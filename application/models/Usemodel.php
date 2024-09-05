<?php
defined('BASEPATH') or exit('No direct script access allowed');


// public function get_all_categories_with_products()
// {
//     // Get all categories and their products
//     $this->db->select('category_id, category_name');
//     $this->db->from('products');
//     $categories = $this->db->get()->result_array();

//     $category_products = [];

//     // For each category, get the products
//     foreach ($categories as $category) {
//         $this->db->select('product_name, price, description, product_image');
//         $this->db->from('products');
//         $this->db->where('category_id', $category['category_id']);
//         $products = $this->db->get()->result_array();

//         if (!empty($products)) {
//             $category_products[$category['category_name']] = $products;
//         }
//     }

//     return $category_products;
// }

// public function getTodaysSpecial($category_id)
// {
//     $this->db->select('product_name, price, description, product_image');
//     $this->db->from('products');
//     $this->db->where('todayspecial', 1);
//     $this->db->where('category_id', $category_id);
//     $query = $this->db->get();
//     return $query->result_array();
// }


class Usemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
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
        $this->db->select('product_name, price, description, product_image');
        $this->db->from('products');
        $this->db->where('todayspecial', 1);
        $query = $this->db->get();
        return $query->result_array();
    }

}
