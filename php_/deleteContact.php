<?php
include "Database.php";
$id = $_GET['id'];
$query = "DELETE FROM contact WHERE ID_CONTACT = '$id';";
$result = mysqli_query($connect, $query);
if ($result) {
    header("location: contactedMe.php");
} else {
    echo "Error deleting record";
}
?>