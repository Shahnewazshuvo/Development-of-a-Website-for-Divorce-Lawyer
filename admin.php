<?php
session_start();

require_once 'includes/db_connect.php';

$select_query = "SELECT * FROM registration";
$data_from_db = mysqli_query($db_connect, $select_query);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Admin</title>
</head>
<body>
 
        <div class="card text-white   bg-secondary mb-3 mt-5">
            <div class="card-header" style="text-align: center; ">
                <h3>Admin Dashbord</h3>
            </div>
            <div class="card-body m-auto">
                <br>
                <table class="table table-bordered" style="background-color: #EBAD59;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">Id</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Age</th>
                            <th scope="col">Date</th>
                            <th scope="col">City</th>
                            <th scope="col">Zip</th>
                            <th scope="col">File name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Religion</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $serial_number = 1;
                    foreach ($data_from_db as $user_info) :
                    ?>
                    <tr>
                        <td><?= $serial_number++ ?></td>
                        <td><?= $user_info['id'] ?></td>
                        <td><?= $user_info['first_name'] ?></td>
                        <td><?= $user_info['last_name'] ?></td>
                        <td><?= $user_info['email'] ?></td>
                        <td><?= $user_info['number'] ?></td>
                        <td><?= $user_info['age'] ?></td>
                        <td><?= $user_info['date'] ?></td>
                        <td><?= $user_info['city'] ?></td>
                        <td><?= $user_info['zip'] ?></td>
                        <td><?= $user_info['file'] ?></td>
                        <td><?= $user_info['gender'] ?></td>
                        <td><?= $user_info['religion'] ?></td>
                        <td><?= $user_info['message'] ?></td>
                        <td>
                            <a class="btn btn-danger" href="delete_post.php?id=<?= $user_info['id'] ?>">Delete</a>
                        </td>
                        <?php
                        endforeach;
                        ?>
                    </tr>
                    </tbody>
                </table>
                <div class="button" style="text-align: center;">
                    <a class="btn btn-danger" href="delete_all_post.php?id=<?= $user_info['id'] ?>">Delete All</a>
                </div>

            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>