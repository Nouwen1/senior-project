<?php
// update_quantity.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productname = $_POST['facility']; // Update the variable name to match the form input
    $quantity = $_POST['quantity'];

    // Include the connection file
    include('connection.php');

    $sql = "UPDATE medicines SET quantity = quantity - ? WHERE productname = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $quantity, $productname); // Remove the 's' from the parameter types since quantity is an integer
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Quantity updated successfully
        echo "Quantity updated successfully.";
    } else {
        // Quantity update failed
        echo "Failed to update quantity.";
    }

    $stmt->close();
    $conn->close();
}
?>
