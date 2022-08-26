
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
                    <li class="nav-item d-xl-flex"><a class="nav-link d-xl-flex login" href="#" style="background: var(--bs-cyan);border-radius: 14px;border-width: 0px;border-style: solid;">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>contact</th>
                    <th>orderNo</th>
                    <th>ShopName</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include 'connection.php';
            $selectquery = "select * from buisness";
            $query = mysqli_query($con,$selectquery);
            $num = mysqli_num_rows($query);
            
            // echo $res[1];
            while($res = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td> <?php echo $res['id'];?> </td>
                    <td><?php echo $res['user'];?></td>
                    <td><?php echo $res['contact'];?></td>
                    <td><?php echo $res['ordernumber'];?></td>
                    <td><?php echo $res['shopname'];?></td>
                </tr>
                <?php
            }
?>
                
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>