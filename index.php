<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>k-tailor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-primary">
        <div class="container-fluid"><a class="navbar-brand" href="#">K-Tailor</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-center" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">&nbsp;Shop</a></li>
                    <li class="nav-item d-xl-flex"><a class="nav-link d-xl-flex login" href="login.php" style="background: var(--bs-cyan);border-radius: 14px;border-width: 0px;border-style: solid;">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="header pb-5">
        <div class="container">
            <h1 class="text-center my-3">&nbsp;Make Your Order</h1>
            <p class="text-center">World's number 1 <strong>COAT-PANT/SHERWANI/WASKIT TAILOR</strong></p>
            <div class="row">
                <div class="col">
                    <picture><img class="img-fluid" src="assets/img/sher.jpg"></picture>
                </div>
                <div class="col">
                    <picture><img class="img-fluid" src="assets/img/solid-color-linen-cotton-blazer-in-royal-blue-v1-mty158_2.jpeg"></picture>
                </div>
                <div class="col">
                    <picture><img class="img-fluid" src="assets/img/edenrobe-maroon-color-waist-coat-for-men-2017.jpg"></picture>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center py-3">Order</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form method ="POST"><label class="form-label ms-2">Name</label><input name="name" class="form-control form-control-sm" type="text" placeholder="Type your Name"><label class="form-label mt-1 ms-2">Contact No</label><input class="form-control" type="number" placeholder="+92 321 1234578" name = "contact"><label class="form-label mt-1 ms-2">Order No (IF ANY)</label><input class="form-control" type="text" placeholder="Order number" name = "ordern"><label class="form-label mt-1 ms-2">Shop Name</label><input class="form-control" type="text" placeholder="Name of shop.." name = "shopn"><label class="form-label mt-1 ms-2">Password</label><input class="form-control" type="text" placeholder="Type your Password" name = "password"><button class="btn btn-info text-center d-flex justify-content-center align-items-center my-4 m-auto btn-submit" type="submit" name = "submit">Place Order</button></form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
</body>

</html>
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$contact = $_POST['contact'];
$ordern = $_POST['ordern'];
$shopn = $_POST['shopn'];
$insertquery = "INSERT INTO buisness( user, contact, ordernumber, shopname) VALUES ('$name','$contact','$ordern','$shopn')";
$res = mysqli_query($con,$insertquery);
// $insertquery = "insert into order(name,contact,order no,shop name) values('$name','$contact','$ordern','$shopn') ";
if($res){
    ?>
   <script>
        alert('Your order is Placed')
   </script>
    <?php

}
else{
    ?>
     <script>
        alert('Order Not Placed Due To Error')
    </script>
    <?php
}

}
?>
