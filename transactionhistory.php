<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="transfer.css">
</head>

<body>
<div class="header1">
        <div class="container1">
            <div class="navbar1">
                <div class="logo1">
                    <img src="images/bank.png" width="60px" >
                    <p>Sparks Foundation Bank Of India</p>
                    
                </div>
                <nav>
                    <ul id="MenuItems1">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="transfermoney.php">Transfer Money</a></li>
                    <li><a href="transactionhistory.php">History</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
                
            </div>
   

        </div>

	<div class="container">
        <h2 class="text-center pt-4">Transfer History</h2>
        <br>
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'config.php';

                    $sql ="select * from transaction";

                    $query =mysqli_query($conn, $sql);

                    while($rows = mysqli_fetch_assoc($query))
                    {
                    ?>

                    <tr>
            
                    <td class="py-2"><?php echo $rows['sender']; ?></td>
                    <td class="py-2"><?php echo $rows['receiver']; ?></td>
                    <td class="py-2"><?php echo $rows['balance']; ?> </td>
                    <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
                    <?php
                        }

                    ?>
                </tbody>
            </table>

        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</div>
<!---------------js for toggle menu---------------->

<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else{
            MenuItems.style.maxHeight = "0px"
        }
    }
</script>
</body>
</html>