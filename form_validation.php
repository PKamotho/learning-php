<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form_validation.css">
    <title>PHP Form validation</title>
</head>
<body>
    <h1>Below is a Program code to validate a form submition</h1>
    <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name:
        <input type="text" name="name"> <br>
        Email:
        <input type="text" name="email"><br>
        Website:
        <input type="text" name="website" ><br>
        Comment:
        <textarea name="comment"  cols="30" rows="2"></textarea><br>
        Gender: <br>
        <input type="radio" name="gender" value="Male" checked>Male.<br>
        <input type="radio" name="gender" value="Female">Female.<br>
        <input type="radio" name="gender" value="Other">Other. <br>
        <input type="submit" value="Submit">

    </form>
    </div>
    <?php
    //define the variables and set them to empty values
    $name = $email = $gender = $comment = $website = "";

    ?>



</body>
</html>