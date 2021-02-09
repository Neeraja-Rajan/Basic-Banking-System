<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/bank.png" width="60px" >
                    <p>Sparks Foundation Bank Of India</p>
                    
                </div>
                <nav>
                    <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="transfermoney.php">Transfer Money</a></li>
                    <li><a href="transactionhistory.php">History</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
                
            </div>
   

        </div>
        <div class="box">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <a href="transfermoney.php"><img src="images/customer (1).png"></a><br><br>
                        <a href="transfermoney.php"><p>View Customers</p> </a>
                        
                    </div>
                      
                    <div class="col-3">
                        <a href="transactionhistory.php"><img src="images/transaction.png"></a><br><br>
                        <a href="transactionhistory.php"><p>Transaction History</a></p> 
                    </div>
                
                </div>
            </div>
        </div>
         
             
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