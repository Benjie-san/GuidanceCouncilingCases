<?php

$uri =  parse_url($_SERVER['REQUEST_URI'])['path'];
include_once 'database/db.php';
$routes = [
  '/' => 'controllers/login.php',
  '/adminDashboard' => 'controllers/adminDashboard.php',
  '/cases' => 'controllers/cases.php',
  '/list' => 'controllers/listGrads.php',
  '/nat' => 'controllers/nat.php',
  '/students' => 'controllers/students.php',
  '/accounts' => 'controllers/accounts.php',
  '/settings' => 'controllers/settings.php',
  '/logout' => 'controllers/logout.php',
  '/delete' => 'deleteItemHandler',
];

if(array_key_exists($uri, $routes)){
  $route = $routes[$uri];

    if (strpos($route, 'controllers/') === 0) {
      require $route;
  } else if ($route === 'deleteItemHandler') {
      deleteItemHandler();
  }  else {
      http_response_code(404);
      echo "Sorry, Not Found.";
      die();
}
}else{
  http_response_code(404);

  echo "Sorry Not Found.";

  die();
}

function deleteItemHandler() {
  global $conn;
  // Step 1: Get the item ID from the request parameters
  $id = $_POST['id'];

  // Step 2: Delete the item from the database
  try {
      $stmt = $conn->prepare("DELETE FROM students WHERE ID = ?");
      $stmt->execute([$id]);

      // Step 3: Return a success message (can be in JSON format if desired)
      $response = [
          'success' => true,
          'message' => 'Item deleted successfully'
      ];
      echo json_encode($response);
  } catch (PDOException $e) {
      // Handle error
      $response = [
          'success' => false,
          'message' => 'Error: ' . $e->getMessage()
      ];
      echo json_encode($response);
  }
}