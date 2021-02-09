<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <?php
        include 'config.php';
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn,$sql);
    ?>

    <div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
        <div class="row">
            <div class="box">
                <div class="square" style="--i:0;"><img src="images/dollar.png"></div>
                <div class="square" style="--i:1;"><img src="images/dollar.png"></div>
                
    
            </div>
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">C.Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($rows=mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td class="py-2"><?php echo $rows['id'] ?></td>
                                <td class="py-2"><?php echo $rows['name']?></td>
                                <td class="py-2"><?php echo $rows['email']?></td>
                                <td class="py-2"><?php echo $rows['balance']?></td>
                                <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Show Details/Transfer</button></a></td> 
                            </tr>
                            <?php
                                }
                            ?>
            
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

<!---------------js for toggle menu---------------->
<script>
    var MenuItems = document.getElementById("MenuItems1");
    MenuItems1.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems1.style.maxHeight == "0px")
        {
            MenuItems1.style.maxHeight = "200px"
        }
        else{
            MenuItems1.style.maxHeight = "0px"
        }
    }
</script>
</body>
</html>