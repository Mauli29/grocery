<?php
include("config.php");

$result = mysqli_query($conn, "SELECT * FROM orders ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>All Orders - Admin Panel</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-10">

<h2 class="text-3xl font-bold mb-8 text-center text-green-600">
All Customer Orders
</h2>

<div class="overflow-x-auto bg-white shadow-lg rounded-lg">
<table class="min-w-full text-center">

<thead class="bg-green-600 text-white">
<tr>
<th class="py-3 px-4">ID</th>
<th class="py-3 px-4">Name</th>
<th class="py-3 px-4">Email</th>
<th class="py-3 px-4">Phone</th>
<th class="py-3 px-4">Address</th>
<th class="py-3 px-4">Product</th>
<th class="py-3 px-4">Quantity</th>
<th class="py-3 px-4">Order Date</th>
</tr>
</thead>

<tbody class="text-gray-700">

<?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr class='border-b hover:bg-gray-50'>";
        echo "<td class='py-2 px-4'>".$row['id']."</td>";
        echo "<td class='py-2 px-4'>".$row['name']."</td>";
        echo "<td class='py-2 px-4'>".$row['email']."</td>";
        echo "<td class='py-2 px-4'>".$row['phone']."</td>";
        echo "<td class='py-2 px-4'>".$row['address']."</td>";
        echo "<td class='py-2 px-4'>".$row['product']."</td>";
        echo "<td class='py-2 px-4'>".$row['quantity']."</td>";
        echo "<td class='py-2 px-4'>".$row['order_date']."</td>";
        echo "</tr>";
    }
}else{
    echo "<tr><td colspan='8' class='py-4'>No Orders Found</td></tr>";
}
?>

</tbody>
</table>
</div>

</body>
</html>
