<!DOCTYPE html>
<html>

    <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="styling/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <style>
        table {    font-family: arial, sans-serif;
            border-collapse: collapse;
                width: 400px;}td, th {    width:100px;
                    text-align: center;
                        padding: 8px;
         } 
        th  {    background-color: #4CAF50;
                            color: white;
        }                 
        </style>
                       
    </head>
        
    <body>

    <?php
    require_once("includes/header.php");
    ?>


    <?php
    
    $ccNumber = $_POST['ccNumber'];
    $quantity = $_POST['totalQuantity'];
    $price = $_POST['totalPrice'];

        $file = fopen("database/orders.txt", "a");
        //insert this user into the orders.txt file
        fwrite($file, $ccNumber . "," . $quantity . "," . $price ."\n");
        //close the "$file"
        fclose($file);
    


    ?>

            <h1>Customer Order Form</h1>
            <table>  
                <tr>    
                    <th>Products</th>    
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    </tr>  <tr>    
                    <td><?php echo $_POST["ProductA"]; ?></td>
                    <td><?php echo $_POST["ProductAprice"]; ?></td>
                    <td><?php echo $_POST["ProductAquantity"]; ?></td>
                    <td><?php echo $_POST["ProductAtotal"]; ?></td>  
                    </tr>  <tr>    
                    <td><?php echo $_POST["ProductB"]; ?></td>    
                    <td><?php echo $_POST["ProductBprice"]; ?></td>
                    <td><?php echo $_POST["ProductBquantity"]; ?></td>
                    <td><?php echo $_POST["ProductBtotal"]; ?></td>
                    </tr>  <tr>
                    <td><?php echo $_POST["ProductC"]; ?></td>
                    <td><?php echo $_POST["ProductCprice"]; ?></td>
                    <td><?php echo $_POST["ProductCquantity"]; ?></td>
                    <td><?php echo $_POST["ProductCtotal"]; ?></td>
                    </tr>  <tr>
                    <th></th>    
                    <th>Total</th>
                    <th><?php echo $_POST["totalQuantity"]; ?></th>
                    <th><?php echo $_POST["totalPrice"]; ?></th>  
                </tr>
            </table>


     <?php
    require_once("includes/footer.php");
    ?>

    </body>
</html>