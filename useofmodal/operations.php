<?php
include 'connection.php';

//Add new user
if (isset($_POST['btnSave'])) {
    mysqli_query($conn, "INSERT INTO users(user_firstname, user_lastname, user_address) VALUES('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['address'] . "')");
    header("Location:index.php");
}

//Delete user
if ($_GET['delete'] == 'ok') {
    mysqli_query($conn, "DELETE FROM users WHERE user_id= '" . $_GET['id'] . "'");
    header("Location:index.php");
}

//Edit user
if (isset($_POST['btnEdit'])) {
    mysqli_query($conn, "UPDATE users  SET user_firstname='" . $_POST['firstname'] . "', user_lastname = '" . $_POST['lastname'] . "', user_address= '" . $_POST['address'] . "' where user_id = '" . $_GET['id'] . "'   ");
    header("Location:index.php");
}
