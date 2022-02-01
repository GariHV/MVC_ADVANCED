<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= CSS . "/default.css" ?> ">
    <?php
    if(isset($_REQUEST['id'])){
        $id = $request['id'] ;
        //$employee = getById($id);
        foreach($employee as $emp){
            $first_name =  $emp['name'];
            $last_name =$emp['last_name'];
            $gender = $emp["gender_id"];
            $age = $emp["age"];
            $phone_number= $emp["phone_number"];
            $email = $emp['email'];
            $city = $emp['city'];
            $street_address = $emp['street_address'];
            $state = $emp['state'];
            $postal_code = $emp['postal_code'];
        }
    }
    ?>

</head>

<body id="bodyForm">
    <h1><?php
        if(isset($_GET['id'])){
            echo "Update Employee";
        }else{
            echo ' Create New Employee';
        }?>
    </h1>

    </style>
    <form  action= ' ?controller=employee&action=<?php
        if(isset($_GET['id'])){
            $id = $_REQUEST["id"];
            echo "update&id=$id";
        }else{
            echo 'createNewEmployee'; }?>'  method="POST">
        <div class="form-row">
            <div class="hide">
            <p>
                <!-- este input deberá ser dinámico e inalterable. Aparecerá a modo de información para el cliente -->
                <label for="id">Número de identificación</label></br>
                <input type="text" name="id" id="">
            </p>
            </div>
            <div class="form-group col-md-6">
                <label for="name">First Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="John" value="<?= isset($_REQUEST["id"]) ?  $name : '' ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Last Name </label>
                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Doe" value="<?= isset($_REQUEST["id"]) ?  $last_nName : '' ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="gender_id">Gender</label>

                <!-- html to include  -->
                <select name='gender' id='inputgender' class='form-control' value=''>
                    <option selected>Choose...</option>
                    <option value='1'> Male </option>
                    <option value='2'> Female </option>
                </select>

                <?php 
                    // if( isset($_REQUEST["id"])){
                    //     $id = $_REQUEST["id"];
                    //     include HTML . '/selectUpdate.php';
                    // }else{
                    //     include HTML . '/selectNew.php';
                //}
                ?>
            </div>
            <div class="form-group col-md-4">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" id="age" value="<?= isset($_REQUEST["id"]) ?  $age: '' ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="phone_number">Phone Number</label>
                <input type="number" name="phone_number" class="form-control" id="phone_number" value="<?= isset($_REQUEST["id"]) ?  $phone_number : '' ?>">
            </div>
        </div>
        <div class="form-row">
            <div class='form-group col-md-6'>
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="john@mail.com" value="<?= isset($_REQUEST["id"]) ?  $email : '' ?>">
            </div>
            <div class="form-group offset-md-1 col-md-5">
                <label for="city">City</label>
                <input name="city" id="city" class="form-control" value="<?= isset($_REQUEST["id"]) ?  $city : '' ?>">
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="street_address">Street Number</label>
                <input type="number" name="street_address" class="form-control" id="street_addressNumber" value="<?= isset($_REQUEST["id"]) ?  $street_address : '' ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="state">State</label>
                <input type="text" name="state" class="form-control" id="state" value="<?= isset($_REQUEST["id"]) ?  $state : '' ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="postal_code">Postal Code</label>
                <input type="number" name="postal_code" class="form-control" id="postal_code" value="<?= isset($_REQUEST["id"]) ?  $postal_code : '' ?>">
            </div>
        </div>
        <div class="form-row justify-content-around">
            <button type="submit" name='updateEmployee' class="btn btn-lg btn-primary col-md-4 "> Update Employee </button>
            <a id="home" class="btn btn-lg btn-secondary col-md-4 " href="<?= BASE_URL .'/main'?> ">Back to Dashboard</a>
        </div>
    </form>


</body>

</html>