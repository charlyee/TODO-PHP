<?php 
    $item = $_POST["item"];
    echo $items[0];
if ( isset( $_POST['submit'] ) )
{
    if (!empty($_POST["item"]))
    {
        echo '<h3> Completed To-Do</h3>';
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
    <title>To-Do PHP list!</title>
</head>

<body>
    <form method="POST">
        <h2> Add a To-Do </2>
        <input type="text" name="todo_item" placeholder="Enter your item">
        <button>Add to list</button>
        <button>Reset</button>
    <h3> Active To-Do </h3>
        <p><input type="checkbox" name="item[]" value="jump" />  Jump</p>
        <p><input type="checkbox" name="item[]" value="run" />  Run</p>
        <p><input type="checkbox" name="item[]" value="skip" />  Skip</p>
        <p><input type="submit" name="submit" value="Complete" /></p>
        </form>

    <h4> Debugging</h4>
    <pre>
    Click to Expnad!
        <strong>SESSION:</strong>
        <?php var_dump( $_SESSION ); ?>
    </pre>
    <pre>
        <strong>POST:</strong>
        <?php var_dump( $_POST ); ?>
    </pre>
</body>
</html>

