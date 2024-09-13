<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Usemodel'); // Ensure your model is loaded
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('form_validation', 'session'));
    }

    // Default function that loads the login page
    public function index()
    {
        $this->load->view('admin/login'); // Ensure this path points to your login view
    }

    // Handle login form submission
    public function adminLogin()
    {
        // Set validation rules for email and password fields
        $this->form_validation->set_rules("email", "Email", "required|valid_email");
        $this->form_validation->set_rules("password", "Password", "required");

        // Run the validation
        if ($this->form_validation->run() === FALSE) {
            // Validation failed, reload the login page with error messages
            $this->session->set_flashdata('error', 'Please enter valid email and password.');
            $this->load->view('admin/login');
        } else {
            // Get email and password from the form
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Encrypt the password (assuming using MD5)
            $encrypted_password = md5($password);

            // Verify user credentials using your model
            $user = $this->Usemodel->adminLogin($email, $encrypted_password);

            if ($user) {
                // If user exists and credentials are valid, set session data
                $user_data = [
                    'user_id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'login' => true
                ];
                $this->session->set_userdata($user_data);

                // Success toast message
                $this->session->set_flashdata('success', 'Login successful! Welcome to the dashboard.');
                redirect(base_url('admin/fooditems'));
            } else {
                // Invalid credentials, reload login page with error message
                $this->session->set_flashdata('error', 'Invalid email or password. Please try again.');
                redirect(base_url('admin/index'));
            }
        }
    }



    //FOODITEM


    public function fooditems()
    {
        if (!$this->session->userdata('login')) {
            redirect(base_url('admin/index')); // Redirect to login if not logged in
        }
        // Ensure user is logged in
        $this->load->model('UseModel');
        $data['categories'] = $this->UseModel->get_all_categories();
        $data['products'] = $this->UseModel->get_all_products();
        $data['viewpage'] = "admin/fooditems";
        $this->load->view('admin/header', $data);
    }




    public function addFoodItem()
    {
        $this->load->model('UseModel');

        // Get the selected category ID and other form data
        $category_id = $this->input->post('category_id');
        $product_name = $this->input->post('product_name');
        $price = $this->input->post('price');
        $product_image = $_FILES['product_image']['name'];

        // Fetch the category name based on the category_id
        $category = $this->UseModel->get_category_by_id($category_id);
        $category_name = $category['category_name'];

        // Get the last inserted id from the products table
        $last_product = $this->UseModel->get_last_product_id();
        $new_product_id = $last_product['id'] + 1;  // Increment for the new food item

        // Rename the product image to follow the new id (e.g., product_image_5.jpg)
        if (!empty($product_image)) {
            $file_ext = pathinfo($product_image, PATHINFO_EXTENSION);
            $new_image_name = $new_product_id . '.' . $file_ext;
            $upload_path = './assets/img/menu/';

            // Move the uploaded file with the new name
            move_uploaded_file($_FILES['product_image']['tmp_name'], $upload_path . $new_image_name);
        }

        if ($category_id && $category_name && $product_name && $price && $new_image_name) {
            // Save the new food item with the updated id and image name
            $this->UseModel->add_new_food_item($new_product_id, $category_id, $category_name, $product_name, $price, $new_image_name);
            $this->session->set_flashdata('success', 'Food item added successfully!');
        } else {
            $this->session->set_flashdata('error', 'All fields are required!');
        }

        redirect('admin/fooditems');
    }



    public function updateFoodItem()
    {
        $id = $this->input->post('id');

        $productData = [
            'product_name' => $this->input->post('product_name'),
            'category_name' => $this->input->post('category_name'),
            'description' => $this->input->post('description'),
            'category_id' => $this->input->post('category_id'),
            'price' => $this->input->post('price')
        ];

        if (!empty($_FILES['product_image']['name'])) {
            $config['upload_path'] = './assets/img/menu/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = time() . '_' . $_FILES['product_image']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('product_image')) {
                $uploadData = $this->upload->data();
                $productData['product_image'] = $uploadData['file_name'];
            }
        }

        $this->Usemodel->updateProduct($id, $productData);
        $this->session->set_flashdata('success', 'Food item updated successfully.');
        redirect('admin/fooditems');
    }

    public function deleteFoodItem($product_id)
    {
        $this->load->model('UseModel');

        // Get the food item details before deleting
        $food_item = $this->UseModel->get_food_item_by_id($product_id);
        $image_name = $food_item['product_image'];

        // Delete the food item from the database
        $this->UseModel->delete_food_item($product_id);

        // Remove the food item image from the folder
        $upload_path = './assets/img/menu/';
        if (file_exists($upload_path . $image_name)) {
            unlink($upload_path . $image_name);  // Delete the image file
        }

        // Get all food items that come after the deleted item
        $subsequent_food_items = $this->UseModel->get_subsequent_food_items($product_id);

        // Shift each subsequent item down by 1 and update the image file names
        foreach ($subsequent_food_items as $item) {
            $old_id = $item['id'];
            $new_id = $old_id - 1;

            // Update the product ID in the database
            $this->UseModel->update_food_item_id($old_id, $new_id);

            // Rename the image file to reflect the new ID
            $old_image_name = $upload_path . $old_id . '.' . pathinfo($item['product_image'], PATHINFO_EXTENSION);
            $new_image_name = $upload_path . $new_id . '.' . pathinfo($item['product_image'], PATHINFO_EXTENSION);
            if (file_exists($old_image_name)) {
                rename($old_image_name, $new_image_name);  // Rename the image file
            }
        }

        $this->session->set_flashdata('success', 'Food item deleted and IDs updated successfully!');
        redirect('admin/fooditems');
    }


    public function getFoodItemById($id)
    {
        $product = $this->Usemodel->get_product_by_id($id); // Get product details from the database
        echo json_encode($product); // Return the product data as JSON
    }



    //BUFFET


    public function buffet()
    {
        $data['categories'] = $this->Usemodel->getUniqueCategoriesFromProducts();
        $data['products'] = $this->Usemodel->get_all_products();
        $data['viewpage'] = "admin/buffet";
        $this->load->view('admin/header', $data); // Load your dashboard view here
    }



    public function addProduct()
    {
        $category_name = $this->input->post('category_name');
        $category_id = $this->input->post('category_id');

        // If 'new' is selected, use the new category name
        if ($category_name === 'new') {
            $category_name = $this->input->post('new_category_name');
        }
        // Add product to the products table
        $productData = [
            'product_name' => $this->input->post('product_name'),
            'category_name' => $category_name,
            'category_id' => $category_id,
            'price' => $this->input->post('price'),
            'day' => $this->input->post('day'),
            'meal' => $this->input->post('meal')
        ];

        // Handle image upload
        if (!empty($_FILES['product_image']['name'])) {
            $config['upload_path'] = './assets/img/menu/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = time() . '_' . $_FILES['product_image']['name']; // Unique filename

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('product_image')) {
                $uploadData = $this->upload->data();
                $productData['product_image'] = $uploadData['file_name']; // Add image to the product data
            }
        }

        $this->Usemodel->addProduct($productData); // Add product to DB
        $this->session->set_flashdata('success', 'Product added successfully.');
        redirect('admin/buffet');
    }

    public function updateProduct()
    {
        $id = $this->input->post('id'); // Get product ID from the hidden field

        // Gather updated product data from the form
        $data = [
            'product_name' => $this->input->post('product_name'),
            'price' => $this->input->post('price'),
            'day' => $this->input->post('day'),
            'meal' => $this->input->post('meal')
        ];

        // Handle image upload if a new image is provided
        if (!empty($_FILES['product_image']['name'])) {
            $config['upload_path'] = './assets/img/menu/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = time() . '_' . $_FILES['product_image']['name']; // Unique filename

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('product_image')) {
                $uploadData = $this->upload->data();
                $data['product_image'] = $uploadData['file_name']; // Add image to the update data
            }
        }

        $this->Usemodel->updateProduct($id, $data); // Update product in DB
        $this->session->set_flashdata('success', 'Product updated successfully.');
        redirect('admin/buffet');
    }

    public function deleteProduct($id)
    {
        $this->Usemodel->delete_product($id);
        $this->session->set_flashdata('success', 'Product deleted successfully.');
        redirect('admin/buffet');
    }
    public function getProductById($id)
    {
        $this->load->model('Product_model'); // Load your model
        $product = $this->Product_model->getProductById($id); // Get product details from the database
        echo json_encode($product); // Return the product data as JSON
    }



    //TODAYSPECIAL


    public function todayspecial()
    {
        $this->load->model('Usemodel');

        // Fetch all products (including today's special)
        $data['products'] = $this->Usemodel->getAllProducts(); // Adjust the model function to retrieve all products

        $data['viewpage'] = "admin/todayspecial";
        $this->load->view('admin/header', $data); // Load your Today's Special view here
    }

    public function addTodaysSpecial()
    {
        $this->load->model('Usemodel');

        // Fetch all products (including today's special)
        $data['products'] = $this->Usemodel->getAllProducts();
        $productData = [

            'product_name' => $this->input->post('product_name'),
            'price' => $this->input->post('price'),
            'todayspecial' => 1 // Set today's special flag
        ];

        // Handle image upload
        if (!empty($_FILES['product_image']['name'])) {
            $config['upload_path'] = './assets/img/menu/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = time() . '_' . $_FILES['product_image']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('product_image')) {
                $uploadData = $this->upload->data();
                $productData['product_image'] = $uploadData['file_name']; // Save uploaded image
            }
        }

        $this->Usemodel->addProduct($productData); // Save the new product as today's special
        $this->session->set_flashdata('success', 'Today\'s special added successfully.');
        redirect('admin/todayspecial');
    }
    public function updateTodaysSpecial()
    {
        // Get the product ID and "Today's Special" status from the AJAX request
        $productId = $this->input->post('productId');
        $todayspecial = $this->input->post('todayspecial');

        // Load the model to interact with the database
        $this->load->model('UseModel');

        // Update the product's "Today's Special" status in the database
        if ($this->UseModel->update_todays_special_status($productId, $todayspecial)) {
            // If successful, send a JSON response
            echo json_encode(['status' => 'success']);
        } else {
            // If there's an error, send an error response
            echo json_encode(['status' => 'error']);
        }
    }


    public function deleteTodaysSpecial($id)
    {
        $this->Usemodel->delete_product($id); // Delete the product
        $this->session->set_flashdata('success', 'Today\'s special deleted successfully.');
        redirect('admin/todayspecial');
    }
    public function manage_todays_special()
    {
        $this->load->model('UseModel');
        $data['products'] = $this->UseModel->get_all_products(); // Get all products
        $this->load->view('admin/manage_todays_special', $data); // Load view with products
    }

    // Save the "Today's Special" status for the selected products
    public function saveTodaysSpecials()
    {
        $selectedProducts = json_decode($this->input->post('selectedProducts'), true);
        $deselectedProducts = json_decode($this->input->post('deselectedProducts'), true);

        // Call model to update status
        $this->load->model('UseModel');
        $this->UseModel->update_todays_special($selectedProducts, $deselectedProducts);

        // Send a response back to the front end
        echo json_encode(['status' => 'success']);
    }




    //CATEGORY


    // Add a new category
    public function category()
    {
        $this->load->model('UseModel');
        // Fetch categories and their related products
        $data['categories'] = $this->UseModel->get_categories_with_products();
        $data['viewpage'] = "admin/category";
        $this->load->view('admin/header', $data);
    }

    // Add a new category
    public function addCategory()
    {
        $this->load->model('UseModel');
        $category_name = $this->input->post('category_name');

        // Check if the category already exists in the 'category' table
        $existing_category = $this->UseModel->check_existing_category($category_name);

        if (!$existing_category) {
            // Add new category to 'category' table
            $this->UseModel->add_new_category($category_name);
            $this->session->set_flashdata('success', 'Category added successfully!');
        } else {
            // If category already exists, show an error
            $this->session->set_flashdata('error', 'Category already exists!');
        }

        redirect('admin/category');
    }

    // Edit category
    public function editCategory()
    {
        $this->load->model('UseModel');
        $category_id = $this->input->post('category_id');
        $category_name = $this->input->post('category_name');

        // Validate if category name is duplicate
        $existing_category = $this->UseModel->check_existing_category($category_name);

        if (!$existing_category || $existing_category['category_id'] == $category_id) {
            $this->UseModel->update_category($category_id, $category_name);
            $this->session->set_flashdata('success', 'Category updated successfully!');
        } else {
            $this->session->set_flashdata('error', 'Category name already exists!');
        }
        redirect('admin/category');
    }

    // Delete category
    public function deleteCategory($category_id)
    {
        $this->load->model('UseModel');
        $this->UseModel->delete_category($category_id);
        $this->session->set_flashdata('success', 'Category deleted successfully!');
        redirect('admin/category');
    }

}