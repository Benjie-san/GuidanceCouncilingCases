<?php 
require('database/db.php');
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $id = $_GET['id'];
  $sql = "DELETE FROM students WHERE id = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  echo "Item deleted successfully.";
}

// if (isset($_POST['id'])) {
//   $id = $_POST['id'];

//   // Step 3: Delete the item from the database
//   try {
//       $sql = ("DELETE FROM students WHERE id = :id");
//       $stmt = $conn->prepare($sql);
//       $stmt->bindParam(':id', $id);
//       $stmt->execute();

//       // Step 4: Return a success message
//       echo "Item deleted successfully";
//   } catch (PDOException $e) {
//       // Handle error
//       echo "Error: " . $e->getMessage();
//   }
// } else {
//   // Return an error message if the ID parameter is missing
//   echo "Error: ID parameter is missing";
// }



?>