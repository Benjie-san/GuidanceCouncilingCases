<?php


$uri =  parse_url($_SERVER['REQUEST_URI'])['path'];
include_once 'database/db.php';
$routes = [
    '/' => 'controllers/login.php',
    '/adminDashboard' => 'controllers/admin/adminDashboard.php',
    '/user-dashboard' => 'controllers/user/user-dashboard.php',
    '/guidance' => 'controllers/user/guidance-services.php',
    '/students' => 'controllers/students/students.php',
    '/cases' => 'controllers/cases/cases.php',
    '/accounts' => 'controllers/accounts/accounts.php',
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

// function deleteItemHandler() {
//   global $conn;
//   // Step 1: Get the item ID from the request parameters
//   $id = $_POST['id'];

//   // Step 2: Delete the item from the database
//   try {
//       $stmt = $conn->prepare("DELETE FROM students WHERE ID = ?");
//       $stmt->execute([$id]);

//       // Step 3: Return a success message (can be in JSON format if desired)
//       $response = [
//           'success' => true,
//           'message' => 'Item deleted successfully'
//       ];
//       echo json_encode($response);
//   } catch (PDOException $e) {
//       // Handle error
//       $response = [
//           'success' => false,
//           'message' => 'Error: ' . $e->getMessage()
//       ];
//       echo json_encode($response);
//   }
// }

// function deleteItemHandler2() {
//   global $conn;
//   // Step 1: Get the item ID from the request parameters
//   $id = $_POST['id'];

//   // Step 2: Delete the item from the database
//   try {
//       $stmt = $conn->prepare("DELETE FROM cases WHERE ID = ?");
//       $stmt->execute([$id]);

//       // Step 3: Return a success message (can be in JSON format if desired)
//       $response = [
//           'success' => true,
//           'message' => 'Item deleted successfully'
//       ];
//       echo json_encode($response);
//   } catch (PDOException $e) {
//       // Handle error
//       $response = [
//           'success' => false,
//           'message' => 'Error: ' . $e->getMessage()
//       ];
//       echo json_encode($response);
//   }
// }

// function deleteItemHandler3() {
//     global $conn;
//     // Step 1: Get the item ID from the request parameters
//     $id = $_POST['id'];

//     // Step 2: Delete the item from the database
//     try {
//         $stmt1 = $conn->prepare("DELETE FROM nat WHERE ID = ?");
//         $stmt1->execute([$id]);
//         $stmt2 = $conn->prepare("DELETE FROM ap_rank WHERE ID = ?");
//         $stmt2->execute([$id]);
//         $stmt3 = $conn->prepare("DELETE FROM ap_score WHERE ID = ?");
//         $stmt3->execute([$id]);

//         // Step 3: Return a success message (can be in JSON format if desired)
//         $response = [
//             'success' => true,
//             'message' => 'Item deleted successfully'
//         ];
//         echo json_encode($response);
//     } catch (PDOException $e) {
//         // Handle error
//         $response = [
//             'success' => false,
//             'message' => 'Error: ' . $e->getMessage()
//         ];
//         echo json_encode($response);
//     }
// }