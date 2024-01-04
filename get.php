<?php
include('common/config.php');

$category_id= $_POST['category_id'];

// Query the database to get products based on the selected category
// ...
$query =  mysqli_query($conn, "SELECT * from `sub_category` where `category_id`='$category_id'");

// Generate the HTML for the options in the second dropdown menu
$options = "";
while ($row = mysqli_fetch_assoc($query)) {
    $options .= "<option value='{$row['id']}'>{$row['sub_name']}</option>";
}

echo $options;
?>

