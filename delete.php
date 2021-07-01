<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CRUD Operations</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- CSS Start -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- CSS End -->

    <!-- JS Start -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- JS End -->

    <!-- DataTable CSS Start -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <!-- DataTable CSS End -->
    <!-- DataTable JS Start -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <!-- DataTable JS End -->

    <!-- SweetAlert CSS Start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- SweetAlert CSS End -->
    <!-- SweetAlert JS Start -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" integrity="sha512-XVz1P4Cymt04puwm5OITPm5gylyyj5vkahvf64T8xlt/ybeTpz4oHqJVIeDtDoF5kSrXMOUmdYewE4JS/4RWAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- SweetAlert JS End -->

</head>

<body>

</body>

</html>


<?php
$con = mysqli_connect("localhost", "root", "", "plus91");

$id = $_GET['id'];

$delete = mysqli_query($con, "DELETE FROM `patients` WHERE `id`=$id");
     
if ($delete) {
    echo '<script type="text/javascript">';
    echo '
        swal({
            title : "Success!",
            text : "Data Deleted Successfully!",
            type : "success"
            },function(){
            window.location.href="index.php";
        });
    ';
    echo '</script>';
} else {
    echo '<script type="text/javascript">';
    echo '
        swal({
            title : "Oops!",
            text : "Failed to Delete Data!",
            type : "error"
            },function(){
            window.location.href="index.php";
        });
    ';
    echo '</script>';
}
