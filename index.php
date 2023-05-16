<?php

$uri =  parse_url($_SERVER['REQUEST_URI'])['path'];
include_once 'database/db.php';
$routes = [
    '/' => 'controllers/login.php',
    '/adminDashboard' => 'controllers/admin/adminDashboard.php',
    '/cases' => 'controllers/cases/cases.php',
    '/list' => 'controllers/grads/listGrads.php',
    '/nat' => 'controllers/nat/nat.php',
    '/students' => 'controllers/students/students.php',
    '/accounts' => 'controllers/accounts.php',
    '/settings' => 'controllers/settings.php',
    '/logout' => 'controllers/logout.php',
    '/delete' => 'deleteItemHandler',
    '/delete2' => 'deleteItemHandler2',
    '/delete3' => 'deleteItemHandler3',
    '/get-data' => 'controllers/get-data.php',
    '/update-data' => 'controllers/update-data.php'
];


if(array_key_exists($uri, $routes)){
  $route = $routes[$uri];

  if (strpos($route, 'controllers/') === 0) {
      require $route;
  } else if ($route === 'deleteItemHandler') {
      deleteItemHandler();
  } else if ($route === 'deleteItemHandler2') {
    deleteItemHandler2();
  }
  else if ($route === 'deleteItemHandler3') {
    deleteItemHandler2();
  } else {
      http_response_code(404);
      echo "Sorry, Not Found.";
      die();
}
}else{
  http_response_code(404);

  echo "Sorry Not Found.";

  die();
}

function getData(){

    $id = 3;
  
    // Perform necessary operations to fetch data based on the ID
    // Example:
    $data = 'Data for ID ' . $id;
  
    // Send the response back to the client
    echo $data;
  
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

function deleteItemHandler2() {
  global $conn;
  // Step 1: Get the item ID from the request parameters
  $id = $_POST['id'];

  // Step 2: Delete the item from the database
  try {
      $stmt = $conn->prepare("DELETE FROM cases WHERE ID = ?");
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

function deleteItemHandler3() {
    global $conn;
    // Step 1: Get the item ID from the request parameters
    $id = $_POST['id'];

    // Step 2: Delete the item from the database
    try {
        $stmt1 = $conn->prepare("DELETE FROM nat WHERE ID = ?");
        $stmt1->execute([$id]);
        $stmt2 = $conn->prepare("DELETE FROM ap_rank WHERE ID = ?");
        $stmt2->execute([$id]);
        $stmt3 = $conn->prepare("DELETE FROM ap_score WHERE ID = ?");
        $stmt3->execute([$id]);

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