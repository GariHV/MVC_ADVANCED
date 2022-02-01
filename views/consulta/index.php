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
        <h1 class='center'> Sección de consulta</h1>
        <div>

        <form action="<?php echo BASE_URL; ?>consulta/updateEmployee/<?= $this->employee[0]->id ?>" method="POST">
            <p class ='hide'>
                <!-- este input deberá ser dinámico e inalterable. Aparecerá a modo de información para el cliente -->
                <label for="id">Número de identificación</label></br>
                <input type="text" name="id" id="" value="<?= $this->employee[0]->id ?> >
            </p>
            <p>
                <label for="name">Name</label></br>
                <input type="text" name="name" id="" value="<?= $this->employee[0]->name ?>">
            </p>
            <p>
                <label for="last_name">Last Name</label></br>
                <input type="text" name="last_name" id="" value="<?= $this->employee[0]->last_name ?>">
            </p>
            <p>
                <label for="email">Email</label></br>
                <input type="text" name="email" id=""value="<?= $this->employee[0]->email ?>">
            </p>
            <p>
                <label for="gender_id">Gender</label></br>
                <input type="text" name="gender_id" id="" value="<?= $this->employee[0]->gender_id ?>">
            </p>
            <p>
                <label for="age">Age</label></br>
                <input type="text" name="age" id="" value="<?= $this->employee[0]->age ?>">
            </p>
            <p>
                <label for="phone_number">Phone Number</label></br>
                <input type="text" name="phone_number" id="" value="<?= $this->employee[0]->phone_number ?>">
            </p>
            <p>
                <label for="city">City</label></br>
                <input type="text" name="city" id="" value="<?= $this->employee[0]->city ?>">
            </p>
            <p>
                <label for="street_address">Street Address</label></br>
                <input type="text" name="street_address" id="" value="<?= $this->employee[0]->street_address ?>">
            </p>
            <p>
                <label for="state">State</label></br>
                <input type="text" name="state" id="" value="<?= $this->employee[0]->state ?>">
            </p>
            <p>
                <label for="postal_code">Postal Code</label></br>
                <input type="text" name="postal_code" id="" value="<?= $this->employee[0]->postal_code ?>">
            </p>
            <p>
                <input type="submit" value="Update Employee">
            </p>
        </form>
    </div>
        
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>