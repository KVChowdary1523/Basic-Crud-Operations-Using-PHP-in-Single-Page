<?php  

function operations_modal($i)
{
    $alpha_key = '';
    $keys = range('A', 'Z');
    for ($j = 0; $j < $i; $j++) {
        $alpha_key .= $keys[array_rand($keys)];
    }

    return $alpha_key;
}

$con = mysqli_connect("localhost", "root", "", "plus91");

?>

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
    <div class="container mt-5">
        <div class="row collapse" id="add_patient">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 mx-auto">
                <div class="card border border-primary">
                    <div class="card-header bg-primary text-center" style="padding:0.15rem 0.15rem !important">
                        <span class="card-title text-white font-weight-bold" style="margin-bottom:0 !important">Add New Patient</span>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                                    <div class="form-group">
                                        <label for="NameInput">Name of the Patient</label>
                                        <input type="text" class="form-control" name="name" id="NameInput" placeholder="Name of the Patient" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                                    <div class="form-group">
                                        <label for="DOB">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" id="DOB" placeholder="Date of Birth" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                                    <div class="form-group">
                                        <label for="AgeInput">Age</label>
                                        <input type="number" class="form-control" name="age" id="AgeInput" placeholder="Age" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                                    <div class="form-group">
                                        <label for="AddressInput">Address</label>
                                        <input type="text" class="form-control" name="address" id="AddressInput" placeholder="Address" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                                    <div class="form-group">
                                        <label for="CityInput">City</label>
                                        <input type="text" class="form-control" name="city" id="CityInput" placeholder="City" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                                    <div class="form-group">
                                        <label for="StateInput">State</label>
                                        <input type="text" class="form-control" name="state" id="StateInput" placeholder="State" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" name="register" class="btn btn-primary btn-sm float-right">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 mx-auto table-responsive">
                <div class="card border border-success">
                    <div class="card-header bg-success" style="padding:0.15rem 0.15rem !important">
                        <span class="text-white font-weight-bold pl-2">Patients List</span>
                        <span class="text-white font-weight-bold float-right pr-2" data-toggle="collapse" href="#add_patient" role="button" aria-expanded="false" aria-controls="add_patient">Add New Patient</span>
                    </div>
                    <div class="card-body">
                        <table id="patients_table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>DOB</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $get_data = mysqli_query($con, "SELECT * FROM `patients` ORDER BY `id`");
                                while ($data = mysqli_fetch_array($get_data)) {
                                    $name = $data['name'];
                                    $dob = date('d F, Y', strtotime($data['dob']));
                                    $age = $data['age'];
                                    $address = $data['address'];
                                    $city = $data['city'];
                                    $state = $data['state'];
                                    $id = $data['id'];
                                    $modal_id = operations_modal(6);
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $dob; ?></td>
                                        <td><?php echo $age; ?></td>
                                        <td><?php echo $address; ?></td>
                                        <td><?php echo $city; ?></td>
                                        <td><?php echo $state; ?></td>
                                        <td>
                                            <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#<?php echo $modal_id; ?>">Edit</a>
                                            <a type="button" href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="<?php echo $modal_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header" style="padding:0.25rem 0.25rem !important">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data for <?php echo $name; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="" method="POST">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="NameInput">Name of the Patient</label>
                                                                    <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                                                                    <input type="text" class="form-control" name="name" id="NameInput" value="<?php echo $name; ?>" placeholder="Name of the Patient" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="DOB">Date of Birth</label>
                                                                    <input type="date" class="form-control" name="dob" id="DOB" value="<?php echo $data['dob']; ?>" placeholder="Date of Birth" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="AgeInput">Age</label>
                                                                    <input type="number" class="form-control" name="age" id="AgeInput" value="<?php echo $age; ?>" placeholder="Age" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="AddressInput">Address</label>
                                                                    <input type="text" class="form-control" name="address" id="AddressInput" value="<?php echo $address; ?>" placeholder="Address" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="CityInput">City</label>
                                                                    <input type="text" class="form-control" name="city" id="CityInput" value="<?php echo $city; ?>" placeholder="City" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="StateInput">State</label>
                                                                    <input type="text" class="form-control" name="state" id="StateInput" value="<?php echo $state; ?>" placeholder="State" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="update" class="btn btn-primary btn-sm">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#patients_table').DataTable();
        });
    </script>

</body>

</html>

<?php


if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    $ins = "INSERT INTO `patients`(`name`, `dob`, `age`, `address`, `city`, `state`) VALUES ('$name', '$dob', '$age', '$address', '$city', '$state')";

    $insert = mysqli_query($con, $ins);

    if ($insert) {
        echo '<script type="text/javascript">';
        echo '
            swal({
                title : "Success!",
                text : "Data Inserted Successfully!",
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
                text : "Failed to Insert Data!",
                type : "error"
                },function(){
                window.location.href="index.php";
            });
        ';
        echo '</script>';
    }
}


if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    $upd = "UPDATE `patients` SET `name` = '$name', `age` = '$age', `dob` = '$dob', `address` = '$address', `city` = '$city', `state` = '$state' WHERE `id` = $id";

    $update = mysqli_query($con, $upd);

    if ($update) {
        echo '<script type="text/javascript">';
        echo '
            swal({
                title : "Success!",
                text : "Data Updated Successfully!",
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
                text : "Failed to Update Data!",
                type : "error"
                },function(){
                window.location.href="index.php";
            });
        ';
        echo '</script>';
    }
}



?>