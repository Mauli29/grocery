


<?php
include("config.php");

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    $query = "INSERT INTO orders (name, email, phone, address, product, quantity) 
              VALUES ('$name', '$email', '$phone', '$address', '$product', '$quantity')";

    if(mysqli_query($conn, $query)){
       echo "<script>
alert('Order Placed Successfully');
window.location.href='placeorder.php';
</script>";

    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>




<html lang="en">
<head>
<meta charset="UTF-8">
<title>Order Now | Fresh Grocery</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: "Segoe UI", Arial, sans-serif;
}

body{
    background:#f1f5f9;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.order-container{
    background:#ffffff;
    width:100%;
    max-width:420px;
    padding:25px;
    border-radius:14px;
    box-shadow:0 12px 30px rgba(0,0,0,0.1);
}

.order-container h1{
    text-align:center;
    color:#16a34a;
    margin-bottom:6px;
}

.order-container p{
    text-align:center;
    color:#555;
    margin-bottom:20px;
}

.input-group{
    margin-bottom:14px;
}

label{
    display:block;
    margin-bottom:6px;
    font-weight:600;
}

input, textarea, select{
    width:100%;
    padding:10px;
    border-radius:8px;
    border:1px solid #cbd5e1;
    font-size:14px;
}

textarea{
    resize:none;
    height:70px;
}

select[multiple]{
    height:90px;
}

small{
    color:#64748b;
}

button{
    width:100%;
    padding:12px;
    margin-top:10px;
    background:#16a34a;
    color:#fff;
    border:none;
    border-radius:10px;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
}

button:hover{
    background:#15803d;
}
</style>
</head>

<body>

<div class="order-container">
    <h1>🛒 Order Now</h1>
    <p>Fresh groceries delivered fast</p>
<form action="order.php" method="POST">

    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <textarea name="address" placeholder="Address" required></textarea>
    <input type="text" name="product" placeholder="Product Name" required>
    <input type="number" name="quantity" placeholder="Quantity" required>

    <button type="submit" name="submit">Place Order</button>

</form>

</div>

</body>
</html>
