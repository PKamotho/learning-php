<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Book an appointment.css">
    <title>book an appointment</title>
</head>
<section class="main">
    <nav>
            <ul class="navigation">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="About">About</a></li>
                <li><a href="Chefs">Chefs</a></li>
            </ul>
    </nav>



<body>
    <div class="container">
        <h1>Book an appointment</h1>
        <p>Please book an appointment before visiting the advocate</p>
        <form action="">
        <form id="form">
  <div class="field">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
  </div>
  <div class="field">
    <label for="to_name">To Hillana Bakery</label>
    <input type="text" name="to_name" id="to_name">
  </div>
  <div class="field">
    <label for="email">email</label>
    <input type="text" name="email" id="email">
  </div>
  <div class="field">
    <label for="Order">Order</label>
    <input type="text" name="Order" id="Order">
  </div>
  <div class="field">
    <label for="phone">phone</label>
    <input type="text" name="phone" id="phone">
  </div>
  <div class="field">
    <label for="ID number">ID number</label>
    <input type="number" name="ID number" id="ID number">
  </div>

  <input type="submit" id="button" value="Send Email" >
</form>

<script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script type="text/javascript">
  emailjs.init('SrW0SVpaWEw7MGpGu')
</script>
        </form>
         
    </div>
</body>
</section>
</html>