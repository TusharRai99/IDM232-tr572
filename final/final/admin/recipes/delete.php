<?php
$page_title = 'Delete Recipe';
include '../../global/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Build Query
    $query = 'DELETE ';
    $query .= 'FROM recipes ';
    $query .= 'WHERE id=' . $id;


    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        redirectTo('/final/admin/recipes?success=Recipe was deleted');
    } else {
        redirectTo('/final/admin/recipes/view.php?id=' . $_GET['id'] . '&error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/final/admin/users');
}
