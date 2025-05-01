<?php

/**
 * FILE TITLE GOES HERE
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        TITLE.php
 * Location:
 * Project:         vanilla-mvc
 * Date Created:    01/05/2025
 *
 * Author:          ben sefton <20127535@tafe.wa.edu.au>
 *
 */

namespace App\controllers;

use Framework\Authorisation;
use Framework\Database;
use Framework\Session;
use Framework\Validation;

class ProductController
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }


    public function index()
    {
        $sql = "SELECT * FROM products ORDER BY created_at DESC";

        $products = $this->db->query($sql)->fetchAll();


        loadView('products/index', [
            'products' => $products
        ]);
    }


    public function create()
    {
    }

    public function show($params)
    {
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id
        ];

        $sql = 'SELECT * FROM products WHERE id = :id';
        $product = $this->db->query($sql, $params)->fetch();

        // Check if product exists
        if (!$product) {
            ErrorController::notFound('Product not found');
            return;
        }

        loadView('products/show', [
            'product' => $product
        ]);
    }

    public function store()
    {
    }

    public function destroy()
    {
    }

    public function edit($params)
    {
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id
        ];

        $product = $this->db->query('SELECT * FROM products WHERE id = :id', $params)->fetch();

        // Check if product exists
        if (!$product) {
            ErrorController::notFound('Product not found');
            return;
        }
        // Authorisation
        if (!Authorisation::isOwner($product->user_id)) {
            Session::setFlashMessage('error_message', 'You are not authoirzed to update this product');
            return redirect('/products/' . $product->id);
        }
        loadView('products/edit', [
            'product' => $product
        ]);
    }

    public function update($params)
    {
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id
        ];

        $product = $this->db->query('SELECT * FROM products WHERE id = :id', $params)->fetch();

        // Check if product exists
        if (!$product) {
            ErrorController::notFound('Product not found');
            return;
        }

        // Authorisation
        if (!Authorisation::isOwner($product->user_id)) {
            Session::setFlashMessage('error_message', 'You are not authoirzed to update this product');
            return redirect('/products/' . $product->id);
        }

        $allowedFields = ['name', 'description', 'price'];

        $updateValues = [];

        $updateValues = array_intersect_key($_POST, array_flip($allowedFields));

        $updateValues = array_map('sanitize', $updateValues);

        $requiredFields = ['name', 'price'];

        $errors = [];

        foreach ($requiredFields as $field) {
            if (empty($updateValues[$field]) || !Validation::string($updateValues[$field])) {
                $errors[$field] = ucfirst($field) . ' is required';
            }
        }
        if (!empty($errors)) {
            loadView('products/edit', [
                'product' => $product,
                'errors' => $errors
            ]);
            exit;
        } else {
        }

        name = :name, price = :price, description = :description
        // Submit to database
            $updateFields = [];

            foreach (array_keys($updateValues) as $field) {
                $updateFields[] = "{$field} = :{$field}";
            }

            $updateFields = implode(', ', $updateFields);

            $updateQuery = "UPDATE products SET $updateFields WHERE id = :id";

            $updateValues['id'] = $id;

            $this->db->query($updateQuery, $updateValues);

                        // Set flash message
            Session::setFlashMessage('success_message', 'Product updated');

            redirect('/products/' . $id);
        }
}

    public function search()
    {
    }
}