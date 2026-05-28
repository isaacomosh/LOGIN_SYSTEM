<?php
$conn = mysqli_connect("localhost", "root", "", "Week5db");

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $username = $_POST['username'];

    $update = "UPDATE users SET username='$username' WHERE id='$id'";

    if(mysqli_query($conn, $update)){
        header("Location: dashboard.php");
    }else{
        echo "Update Failed";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card p-4 w-50">

        <h3>Edit User</h3>

        <form method="POST">

            <input type="text"
                   name="username"
                   class="form-control mb-3"
                   value="<?php echo $row['username']; ?>">

            <button type="submit"
                    name="update"
                    class="btn btn-dark">
                Update User
            </button>

        </form>

    </div>

</div>

</body>
</html>