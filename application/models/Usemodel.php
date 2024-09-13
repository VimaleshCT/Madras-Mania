<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function adminLogin($email, $password)
    {
        // Query to check for user with the provided email and password
        $this->db->where('email', $email);
        $this->db->where('password', $password); // Assuming the password is hashed

        $query = $this->db->get('user'); // 'user' is your table name

        // Check if any record is returned
        if ($query->num_rows() == 1) {
            return $query->row(); // Return the user data
        } else {
            return false; // Return false if no matching user found
        }
    }



    public function get_selected_categories_with_products()
    {
        // Specify the category IDs you want to display
        $selected_category_ids = [1, 2, 10, 3]; // Replace with actual category IDs for 'Tandoori Vorspeisen', 'Uthappam', 'Indische Brot', 'Nordindische Curries'

        // Query to fetch products for the specified category IDs
        $query = "
            SELECT 
                p.category_id,
                p.category_name, 
                p.product_name, 
                p.price, 
                p.description, 
                p.product_image 
            FROM 
                products p
            WHERE 
                p.category_id IN (" . implode(',', array_fill(0, count($selected_category_ids), '?')) . ")
            ORDER BY 
                FIELD(p.category_id, " . implode(',', $selected_category_ids) . "),
                p.product_name
        ";

        $result = $this->db->query($query, $selected_category_ids)->result_array();

        $category_products = [];

        foreach ($result as $row) {
            // Initialize the category if it hasn't been already
            if (!isset($category_products[$row['category_name']])) {
                $category_products[$row['category_name']] = [];
            }

            // Only add the first 8 products for each category
            if (count($category_products[$row['category_name']]) < 8) {
                $category_products[$row['category_name']][] = [
                    'product_name' => $row['product_name'],
                    'price' => $row['price'],
                    'description' => $row['description'],
                    'product_image' => $row['product_image']
                ];
            }
        }

        return $category_products;
    }

    public function get_all_categories_with_products($excluded_categories = [6])
    {
        // Select necessary fields
        $this->db->select('category_id, category_name, product_name, price, description, product_image');
        $this->db->from('products');

        if (!empty($excluded_categories)) {
            $this->db->where_not_in('category_name', $excluded_categories);
        }

        $this->db->order_by('category_id'); // Order by category ID
        $products = $this->db->get()->result_array();

        $category_products = [];

        // Group products by category
        foreach ($products as $product) {
            $category_name = $product['category_name'];
            $category_products[$category_name][] = $product;
        }

        return $category_products;
    }

    public function getTodaysSpecial()
    {
        $this->db->select('id,product_name, price, description, product_image');
        $this->db->from('products');
        $this->db->where('todayspecial', 1);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function update_todays_special_status($productId, $todayspecial)
    {
        // Ensure the product ID is valid and update its status
        $this->db->where('id', $productId);
        return $this->db->update('products', ['todayspecial' => $todayspecial]);
    }

    public function get_all_products_with_categories()
    {
        $this->db->select('products.id,products.product_name, products.price, products.category_name, products.product_image, products.description');
        $this->db->from('products');

        $query = $this->db->get();

        // Return the results as an array
        return $query->result_array();
    }
    public function getAllProducts()
    {
        $this->db->select('*');
        $this->db->from('products'); // Assuming your products table is called 'products'
        $query = $this->db->get();

        return $query->result_array(); // Return all products as an array
    }

    public function get_unique_meals_by_day($day)
    {
        $this->db->distinct();
        $this->db->select('meal');
        $this->db->where('day', $day);
        $query = $this->db->get('products');
        return $query->result_array();
    }

    // Fetch products based on selected day and meal
    public function get_products_by_day_and_meal($day, $meal)
    {
        $this->db->where('day', $day);
        $this->db->where('meal', $meal);
        $query = $this->db->get('products');
        return $query->result_array();
    }
    //actions

    public function addProduct($data)
    {
        $this->db->insert('products', $data); // Insert data into 'products' table
    }

    // Fetch product by ID
    public function get_product_by_id($id)
    {
        return $this->db->get_where('products', ['id' => $id])->row_array();
    }

    // Update product
    public function updateProduct($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('products', $data);
    }

    // Delete product
    public function delete_product($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('products');
    }

    public function getUniqueCategoriesFromProducts()
    {
        $this->db->distinct();
        $this->db->select('category_name, category_id');
        $query = $this->db->get('products');  // Fetch unique categories from the 'products' table
        return $query->result_array();
    }




    // Fetch categories and related products
    public function get_categories_with_products()
    {
        $this->db->select('c.category_id, c.category_name, GROUP_CONCAT(p.product_name SEPARATOR ", ") as products');
        $this->db->from('category c');
        $this->db->join('products p', 'p.category_id = c.category_id', 'left');
        $this->db->group_by('c.category_id, c.category_name');
        return $this->db->get()->result_array();
    }

    // Check if the category name already exists
    public function check_existing_category($category_name)
    {
        $this->db->where('category_name', $category_name);
        return $this->db->get('category')->row_array();
    }


    // Add new category to the 'category' table, not the 'products' table
    public function add_new_category($category_name)
    {
        // Check if the category already exists
        $this->db->select('category_id');
        $this->db->where('category_name', $category_name);
        $result = $this->db->get('category')->row_array();

        if (!$result) {
            // If category does not exist, insert it
            $this->db->select_max('category_id');
            $max_result = $this->db->get('category')->row_array();
            $new_category_id = $max_result['category_id'] + 1;

            $data = array(
                'category_id' => $new_category_id,
                'category_name' => $category_name
            );
            return $this->db->insert('category', $data);
        }

        // Return the existing category ID if it exists
        return $result['category_id'];
    }


    // Update existing category
    public function update_category($category_id, $category_name)
    {
        $this->db->where('category_id', $category_id);
        return $this->db->update('category', array('category_name' => $category_name));
    }

    // Delete category
    public function delete_category($category_id)
    {
        $this->db->where('category_id', $category_id);
        return $this->db->delete('category');
    }
    public function get_all_categories()
    {
        $this->db->select('category_id, category_name');
        $this->db->from('category');
        return $this->db->get()->result_array();
    }

    // Fetch all products
    public function get_all_products()
    {
        $this->db->select('*');
        $this->db->from('products');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Fetch category name by category_id
    public function get_category_by_id($category_id)
    {
        $this->db->select('category_name');
        $this->db->from('category');
        $this->db->where('category_id', $category_id);
        return $this->db->get()->row_array();
    }

    // Get the last inserted product id
    public function get_last_product_id()
    {
        $this->db->select('id');
        $this->db->from('products');
        $this->db->order_by('id', 'DESC'); // Get the last inserted id
        $this->db->limit(1);
        return $this->db->get()->row_array();
    }

    // Add new food item to the 'products' table with the correct id and image
    public function add_new_food_item($id, $category_id, $category_name, $product_name, $price, $product_image)
    {
        $data = array(
            'id' => $id,  // Insert with the correct id
            'category_id' => $category_id,
            'category_name' => $category_name,
            'product_name' => $product_name,
            'price' => $price,
            'product_image' => $product_image
        );
        return $this->db->insert('products', $data);
    }
    public function get_food_item_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('products')->row_array();
    }

    public function delete_food_item($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('products');
    }
    public function get_subsequent_food_items($id)
    {
        $this->db->where('id >', $id);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('products')->result_array();
    }
    public function update_food_item_id($old_id, $new_id)
    {
        $this->db->set('id', $new_id);
        $this->db->where('id', $old_id);
        return $this->db->update('products');
    }

}

