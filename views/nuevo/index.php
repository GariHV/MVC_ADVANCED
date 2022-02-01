<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div id="main">
        <h1 class='center'> Sección de nuevo</h1>

        <form action="<?php echo BASE_URL; ?>nuevo/registrarEmpleado" method="POST">
            <p class =''>
                <!-- este input deberá ser dinámico e inalterable. Aparecerá a modo de información para el cliente -->
                <label for="id">Número de identificación</label></br>
                <input type="text" name="id" id="">
            </p>
            <p>
                <label for="name">Name</label></br>
                <input type="text" name="name" id="">
            </p>
            <p>
                <label for="last_name">Last Name</label></br>
                <input type="text" name="last_name" id="">
            </p>
            <p>
                <label for="email">Email</label></br>
                <input type="text" name="email" id="">
            </p>
            <p>
                <label for="gender_id">Gender</label></br>
                <input type="text" name="gender_id" id="">
            </p>
            <p>
                <label for="age">Age</label></br>
                <input type="text" name="age" id="">
            </p>
            <p>
                <label for="phone_number">Phone Number</label></br>
                <input type="text" name="phone_number" id="">
            </p>
            <p>
                <label for="city">City</label></br>
                <input type="text" name="city" id="">
            </p>
            <p>
                <label for="street_address">Street Address</label></br>
                <input type="text" name="street_address" id="">
            </p>
            <p>
                <label for="state">State</label></br>
                <input type="text" name="state" id="">
            </p>
            <p>
                <label for="postal_code">Postal Code</label></br>
                <input type="text" name="postal_code" id="">
            </p>
            <p>
                <input type="submit" value="Registrar nuevo empleado">
            </p>
        </form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>
