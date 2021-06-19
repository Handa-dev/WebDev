<body>
<div class="container">
<div class="row">
<div class="col-8">
<h2>Drop Your Message</h2>
        <form action='includes/action/print.php' method="POST">
        Name:<input type="text" name="fname"> <br><br>
        Email: <input type="text" name="email"> <br><br>
        Ph No: <input type="text" name="phNo"> <br><br>
        Sub: <input type="text" name="sub"> <br><br>
        Message: <input type="text" name="msg"> <br><br>
        <input type="submit" name="save">
        </form>
<div class="col-4">
<ul>
        <li><a href="">Home</a></li>
        <li><a href="">About Us</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="">Contact Us</a></li>
    </ul>
</div>
</div>
</div>

<div id="wrapper">
    <div id="header">
        <h1>Shivam First website</h1>
    </div>
    <div id="menu">
        <ul>
        <li><a href="includes/pages/home.php">Home</a></li>
        <li><a href="">About Us</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="">Contact Us</a></li>
        </ul>
    </div>
    <div id="content">
        <h2>Drop Your Message</h2>
        <form action='includes/action/print.php' method="POST">
        Name:<input type="text" name="fname"> <br><br>
        Email: <input type="text" name="email"> <br><br>
        Ph No: <input type="text" name="phNo"> <br><br>
        Sub: <input type="text" name="sub"> <br><br>
        Message: <input type="text" name="msg"> <br><br>
        <input type="submit" name="save">
        </form>
    </div>

<?php
include 'includes/sidebar.php';
include 'includes/header.php';
include 'includes/footer.php';
?>  
</body>
</html>