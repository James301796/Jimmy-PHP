<?php
    include("./db-connect.php");
//create variables
    $name=null;
    $email=null;
    $number=null;
    $order=null;
    $phone=null;

//check if data is sent to us
   if(isset($_POST['submit'])){
    $name =  mysqli_real_escape_string($conn,$_POST['name']);
    $phone =  mysqli_real_escape_string($conn, $_POST['number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $order = mysqli_real_escape_string($conn, $_POST['order']);
}

$sql= "INSERT INTO datashop(name,email,phone,items) VALUES('$name','$email','$phone','$order')";

if($name != null && $email != null && $phone != null && $order !=null){
    mysqli_query($conn,$sql);
    header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center">Place Your Order</h4>
    <form action="add.php" class="white" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Phone Number:</label>
        <input type="text" name="number" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Order:</label>
        <input type="text" name="order" required>

        <div class="center">
            <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<section class="container">
    <h4 class="center">Our Menu</h4>
    <div class="row">
        <div class="col s12 m4 l4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="images/cross.jpg" alt="Crossaint" style="width:100%; height:200px; object-fit:cover;">
                    <span class="card-title">Crossaint</span>
                </div>
                <div class="card-content">
                    <p>Fresh crossaint sandwich with whatever meat you want.</p>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="images/coffee.jpg" alt="Cream fulled coffee" style="width:100%; height:200px; object-fit:cover;">
                    <span class="card-title">Latte</span>
                </div>
                <div class="card-content">
                    <p>Smooth espresso with steamed milk.</p>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="images/dubia chocalate.jpg" alt="crunchy chocalate" style="width:100%; height:200px; object-fit:cover;">
                    <span class="card-title">dubia chocalate</span>
                </div>
                <div class="card-content">
                    <p>Chrunchy chocalate when you bite into it, but a creamy pistacho paste.</p>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="images/donut.jpg" alt="donut" style="width:100%; height:200px; object-fit:cover;">
                    <span class="card-title">donut</span>
                </div>
                <div class="card-content">
                    <p>donut with creamy chocolate filling.</p>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="images/breakfest tacos.jpg" alt="breakfast taco" style="width:100%; height:200px; object-fit:cover;">
                    <span class="card-title">Breakfast Taco</span>
                </div>
                <div class="card-content">
                    <p>Breakfast taco with egg, cheese, and potatos.</p>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="images/boba.jpg" alt="boba" style="width:100%; height:200px; object-fit:cover;">
                    <span class="card-title">Boba</span>
                </div>
                <div class="card-content">
                    <p> Bubbly boba drink.</p>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="images/cake pops.jpg" alt="cakepop" style="width:100%; height:200px; object-fit:cover;">
                    <span class="card-title">Cakepop</span>
                </div>
                <div class="card-content">
                    <p> Chocolate cakepop with creamy chocolate filling.</p>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="images/waffles.jpg" alt="waffles" style="width:100%; height:200px; object-fit:cover;">
                    <span class="card-title">waffles</span>
                </div>
                <div class="card-content">
                    <p> Buttermilk waffles with glouries syrup.</p>
                </div>
            </div>
        </div>

        <!-- Add more menu items as additional .col elements -->
    </div>
</section>

<?php include('templates/footer.php'); ?>
</body>
</html>