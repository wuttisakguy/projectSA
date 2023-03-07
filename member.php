<meta charset="UTF-8">
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Member</title>
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
    
    $query = "SELECT * FROM user1 ORDER BY id asc";

    // echo $query;
    // exit;

    $result = mysqli_query($condb,$query);

    echo "<table border='1' align='center' width='1000'>";
    
    echo "
    <tr align='center' bgcolor='#CCCCCC'>
    <td width=2%>No.</td>
    <td width=20%>Userame</td>
    <td width=20%>Name</td>
    <td width=20%>Email</td>
    <td width=20%>Tel.</td>
    <td width=20%>Address</td>
    <td width=20%>Delete</td>
    </tr>";
    $i=1;
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $i . "</td>"; 
        echo "<td>" .$row["username"] . "</td>";
        echo "<td>" .$row["name"] . "</td>";
        echo "<td>" .$row["email"] . "</td>";
        echo "<td>" .$row["tel"] . "</td>";
        echo "<td>" .$row["address"] . "</td>";
        echo "<td><a href='UserDelete.php?ID=$row[0]' onclick=\"return confrim('Do you want to delete this record? !!!')\">del</a></td>";
        $i++;
    }
    echo "</table>";

    mysqli_close($condb);
?>
