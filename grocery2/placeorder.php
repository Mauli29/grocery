<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Placed - Fresh Grocery</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: "Segoe UI", sans-serif;
}

body{
    background:#f2f3f5;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

/* Main Container */
.container{
    width:350px;
    background:#ffffff;
    padding:30px 20px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

/* Success Circle */
.success-circle{
    width:100px;
    height:100px;
    margin:0 auto 20px;
    background:#16c79a;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    position:relative;
}

.success-circle::after{
    content:'';
    position:absolute;
    width:130px;
    height:130px;
    background:#16c79a33;
    border-radius:50%;
    z-index:-1;
}

/* Check Icon */
.checkmark{
    font-size:40px;
    color:white;
}

/* Title */
h2{
    margin-bottom:8px;
    color:#333;
}

.sub-text{
    font-size:14px;
    color:#666;
    margin-bottom:25px;
}

/* Order Card */
.order-card{
    background:#fafafa;
    padding:15px;
    border-radius:10px;
    text-align:left;
    margin-bottom:25px;
    border:1px solid #eee;
}

.order-card h3{
    text-align:center;
    margin-bottom:10px;
    color:#444;
    font-size:16px;
}

.order-row{
    display:flex;
    justify-content:space-between;
    margin:8px 0;
    font-size:14px;
    color:#555;
}

.order-details{
    text-align:center;
    color:#16c79a;
    font-weight:600;
    cursor:pointer;
    margin-top:10px;
}

/* Done Button */
.done-btn{
    width:100%;
    padding:12px;
    background:#16c79a;
    border:none;
    border-radius:8px;
    color:white;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
}

.done-btn:hover{
    background:#13a883;
}
</style>
</head>
<body>

<div class="container">

    <div class="success-circle">
        <div class="checkmark">✓</div>
    </div>

    <h2>Order Successfully Placed</h2>
    <p class="sub-text">Your grocery items will be delivered soon.</p>

    <div class="order-card">
        <h3>Fresh Grocery Store</h3>

        <div class="order-row">
            <span>Items</span>
            <span id="items">5</span>
        </div>

        <div class="order-row">
            <span>Total Amount</span>
            <span id="amount">₹850.00</span>
        </div>

        <div class="order-row">
            <span>Delivery Time</span>
            <span>30-45 mins</span>
        </div>

        <div class="order-details" onclick="showDetails()">
            Order details
        </div>
    </div>

    <button class="done-btn" onclick="goHome()">DONE</button>

</div>

<script>
function showDetails(){
    alert("Order ID: FG12345\nPayment Mode: Cash on Delivery\nStatus: Preparing");
}

function goHome(){
    alert("Redirecting to Home Page...");
    // window.location.href = "index.html";  // Use when home page exists
}
</script>

</body>
</html>
