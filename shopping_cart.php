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
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 400px;
        }

        td,
        th {
            width: 100px;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
   
<?php
    require_once("includes/header.php");
?>
    <h1>Shopping Cart</h1>
    <form action="order_details.php" method="post">
        <table>
            <tr>
                <th>Products</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>Apples<input type="hidden" name="ProductA" id="ProductA" value="ProductA" /></td>
                <td>$10<input type="hidden" name="ProductAprice" id="ProductAprice" value="10" /></td>
                <td><input id="ProductAquantity" name="ProductAquantity" type="number" value="0" min="0" max="10" /></td>
                <td><input id="RemoveProductA" type="button" onclick="removeProduct();" value="Remove"></td>                <td>
                    <p id="ProductAsubtotal">0</p><input id="ProductAtotal" name="ProductAtotal" type="hidden" />
                </td>
            </tr>
            <tr>
                <td>Oranges<input type="hidden" name="ProductB" id="ProductB" value="ProductB" /></td>
                <td>$15<input type="hidden" name="ProductBprice" id="ProductBprice" value="15" /></td>
                <td><input id="ProductBquantity" name="ProductBquantity" type="number" value="0" min="0" max="10" /></td>
                <td><input id="RemoveProductB" type="button" onclick="removeProduct();" value="Remove"></td>                <td>
                    <p id="ProductBsubtotal">0</p><input id="ProductBtotal" name="ProductBtotal" type="hidden" />
                </td>
            </tr>
            <tr>
                <td>Bananas<input type="hidden" name="ProductC" id="ProductC" value="ProductC" /></td>
                <td>$20<input type="hidden" name="ProductCprice" id="ProductCprice" value="20" /></td>
                <td><input id="ProductCquantity" name="ProductCquantity" type="number" value="0" min="0" max="10" /></td>
                <td><input id="RemoveProductC" type="button" onclick="removeProduct();" value="Remove"></td>
                <td>
                    <p id="ProductCsubtotal">0</p><input id="ProductCtotal" name="ProductCtotal" type="hidden" />
                </td>
            </tr>
            <tr>
                <th></th>
                <th>Total</th>
                <th>
                    <p id="Quantity">0</p><input id="totalQuantity" name="totalQuantity" type="hidden" />
                </th>
                <th>
                    <p id="Price">0</p><input id="totalPrice" name="totalPrice" type="hidden" />
                </th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input id="UpdateBtn" type="button" onclick="updateCart();" value="Update"></button></td>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table><br /><br />
    </form>
    <script type="text/javascript">
        function calcSubTotal(productName) {

                var quantity;
                var price;
                var subtotal;
                if (document.getElementById(productName) == null) {
                    quantity = 0;
                    price = 0;
                    subtotal = 0;
                    return 0;  
                }
                
                else {
                    quantity = parseInt(document.getElementById(productName + 'quantity').value);
            if (quantity > 0) {
                price = parseInt(document.getElementById(productName + 'price').value);
                subtotal = price * quantity;
                document.getElementById(productName + "subtotal").innerHTML = subtotal;
                document.getElementById(productName + "total").value = subtotal;
                return subtotal;
            }
            document.getElementById(productName + "subtotal").innerHTML = 0;
            document.getElementById(productName + "total").value = 0;
            return 0;

        }  
            
            
        }

        function updateCart() {

            var total = calcSubTotal('ProductA') + calcSubTotal('ProductB') + calcSubTotal('ProductC');

           

            if (document.getElementById('ProductAquantity') == null && document.getElementById('ProductBquantity') == null && document.getElementById('ProductCquantity') == null) {
                var quantity = 0;
            }

            else if (document.getElementById('ProductAquantity') == null && document.getElementById('ProductBquantity') == null) {
                var quantity = parseInt(document.getElementById('ProductCquantity').value);
            }

            else if (document.getElementById('ProductAquantity') == null && document.getElementById('ProductCquantity') == null) {
                var quantity = parseInt(document.getElementById('ProductBquantity').value);
            }

            else if (document.getElementById('ProductBquantity') == null && document.getElementById('ProductCquantity') == null) {
                var quantity = parseInt(document.getElementById('ProductAquantity').value);
            }

            else if (document.getElementById('ProductAquantity') == null) {
                var quantity = parseInt(document.getElementById('ProductBquantity').value) + parseInt(document.getElementById('ProductCquantity').value);
            }

            else if (document.getElementById('ProductBquantity') == null) {
                var quantity = parseInt(document.getElementById('ProductAquantity').value) + parseInt(document.getElementById('ProductCquantity').value);

            }
            else if (document.getElementById('ProductCquantity') == null) {
                var quantity = parseInt(document.getElementById('ProductAquantity').value) + parseInt(document.getElementById('ProductBquantity').value);
            }
            else {
                var quantity = parseInt(document.getElementById('ProductAquantity').value) + parseInt(document.getElementById('ProductBquantity').value) + parseInt(document.getElementById('ProductCquantity').value);
            }

           
            document.getElementById("Quantity").innerHTML = quantity;
            document.getElementById("totalQuantity").value = quantity;
            document.getElementById("Price").innerHTML = total;
            document.getElementById("totalPrice").value = total;
        }

        function removeProduct(productName) {
            $(this).closest("tr").remove();
            updateCart();
           
        }

        function pageInit() {
        var btn = document.getElementById('RemoveProductA');
        var btn2 = document.getElementById('RemoveProductB');
        var btn3 = document.getElementById('RemoveProductC');
        var updatebtn = document.getElementById('UpdateBtn');
      
        // DOM2 standard
        btn.addEventListener('click', removeProduct, false);
        btn2.addEventListener('click', removeProduct, false);
        btn3.addEventListener('click', removeProduct, false);
        updatebtn.addEventListener('click', updateCart, false);

        }

    </script>

  
<script type="text/javascript">
pageInit();
</script>

        
<?php
    require_once("includes/footer.php");
?>
  
</body>

</html>