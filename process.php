    <?php

echo 'Processing...';

//connnect to db

$conn = mysqli_connect('localhost', 'root', '123456', 'ajaxtest');

//Check for get variable

if(isset($_GET['name'])) {
    echo 'GET: Your name is ' . $_GET['name'];
}
if(isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
//    echo 'POST: Your name is ' . $_POST['name'];
    
    $query = "INSERT into users(name) VALUES('$name')";
    
    if(mysqli_query($conn, $query)) {
        echo 'User added';
    }
    else {
        echo 'ERROR: '.mysqli_error($conn);
    }
    
}

?>