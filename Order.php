<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is the order section</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>
    <ul>
<li><a href="./index.php"class="active">Home</a></li><br>

</ul>
    <h1>Please Fill The Form Below </h1>
    <form action="#">
       <div class="container">
        <label for="Name">Name</label>
        <input type="text" name="name" id="name" style="float: right;"> <br>
        <label for="Email">Email</label>
        <input type="email" name="email" id="email" style="float: right;"> <br>
        <label for="Contact">Contact</label>
        <input type="text" name="Contact" id="Contact" style="float: right;"> <br>
        <label for="Number of People">Number of People</label>
        <input type="number" name="number" id="number" style="float: right;"> <br>
        <label for="location">Location</label>
        <input type="text" name="name" id="name" style="float: right;"> <br>
        <label for="Description">Please Provide a description of the kind of cake you would like to order</label>
        <textarea name="description" cols="5" rows="5"></textarea> <br>
        <input type="submit" value="Order">
        </div>
    </form>
   
    
</body>
</html>