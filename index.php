<?php 
if ( isset( $_POST['add a to-do'] ) )
{
    if (!empty($_POST["item"]))
    {
        echo '<h3> Active To-Do</h3>';
        foreach ($_POST["item"] as $item);
        {
            echo '<p>'.$item.'</p>';
        }
    }
    else
    {
        echo 'Please select an item';
    }
}
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>To-Do PHP list!</title>
</head>

<body>
        <h3 class="header">Add a To-Do </h3>
        <form method="POST">
            <p><input type="checkbox" name="item" value="ABC" />  ABC</p>
            <p><input type="checkbox" name="item" value="BAC" />  BAC</p>
            <p><input type="checkbox" name="item" value="CAB" />  CAB</p>
            <p><input type="submit" name="submit" value="Add to list" /></p>
        </form>
</body>
</html>

