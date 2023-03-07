<meta charset="UTF-8">
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <br>
    <div align="center">
    <button class="w3-btn w3-blue w3-round"><a href="admin.php">MENU</a></button>
        <br>
        <br>
    </div>
</body>
<?php
    include('config/order/condb.php');
    
    $query = "
    SELECT p.*,m.name 
    FROM order1 as p
    INNER JOIN user1 as m ON p.byN = m.id
    ORDER BY p.id asc";

    // echo $query;
    // exit;

    $result = mysqli_query($condb,$query);

    echo "<table border='1' align='center' width='1300'>";
    
    echo "
    <tr align='center' bgcolor='#CCCCCC'>
    <td width=2%>No.</td>
    <td width=20%>Name</td>
    <td width=10%>Category</td>
    <td width=10%>Paper</td>
    <td width=2%>Size</td>
    <td width=2%>Size(Num)</td>
    <td width=2%>Amount</td>
    <td width=2%>Token</td>
    <td width=20%>Note</td>
    <td width=2%>By</td>
    <td width=2%>Status</td>
    </tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" .$row["id"] . "</td>";
        echo "<td>" .$row["name"] . "</td>";
        echo "<td>" .$row["category"] . "</td>";
        echo "<td>" .$row["paper"] . "</td>";
        echo "<td>" .$row["size1"] . "</td>";
        echo "<td>" .$row["size2"] . "</td>";
        echo "<td>" .$row["amount"] . "</td>";
        echo "<td>" .$row["token"] . "</td>";
        echo "<td>" .$row["note"] . "</td>";
        echo "<td>" .$row["name"] . "</td>";
        echo "<td><a href='statupdate.php?ID=$row[0]' onclick=\"return confrim('Do you want to delete this record? !!!')\">del</a></td>";
    }
    echo "</table>";

    mysqli_close($condb);
?>