<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;

class ListingController
{
  protected $db;

  public function __construct()
  {
    $config = require basePath('config/db.php');
    $this->db = new Database($config);
  }

  /*
   * Show all listings
   * 
   * @return void
   */
  public function index()
  {
    $listings = $this->db->query('SELECT * FROM listings')->fetchAll();

    loadView('listings/index', [
      'listings' => $listings
    ]);
  }

  /*
   * Show the create listing form
   * 
   * @return void
   */
  public function create()
  {
    loadView('listings/create');
  }

  /*
   * Show a single listing
   * 
   * @return void
   */
  public function show($params)
  {
    $id = $params['id'] ?? '';

    $params = [
      'id' => $id
    ];

    $listing = $this->db->query('SELECT * FROM listings WHERE id = :id', $params)->fetch();

    // Check if listing exists
    if (!$listing) {
      ErrorController::notFound('Listing not found');
      return;
    }

    loadView('listings/show', [
      'listing' => $listing
    ]);
  }

  /**
   * Store data in database
   * 
   * @return void
   */
  public function store()
  {
    $allowedFields = ['title', 'description', 'salary', 'tags', 'company', 'address', 'city', 'state', 'phone', 'email', 'requirements', 'benefits'];

    $newListingData = array_intersect_key($_POST, array_flip($allowedFields));

    $newListingData['user_id'] = 1;

    $newListingData = array_map('sanitize', $newListingData);

    $requiredFields = ['title', 'description', 'email', 'city', 'state'];

    $errors = [];

    foreach ($requiredFields as $field) {
      if (empty($newListingData[$field]) || !Validation::string($newListingData[$field])) {
        $errors[$field] = ucfirst($field) . ' is required';
      }
    }

    if (!empty($errors)) {
      // Reload view with errors
      loadView('listings/create', [
        'errors' => $errors,
        'listing' => $newListingData
      ]);
    } else {
      // Submit data
      echo 'Success';
    }
  }
}
