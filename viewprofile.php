<?php
$server ="localhost";
$user = "root";
$pass ="";
$dbname ="phpp";

$conn = mysqli_connect($server,$user,$pass,$dbname);
$user = $_POST['u'];
$pass = $_POST['p'];
$query = "SELECT * FROM admin where USER_ID = $user And PASSWORDD = $pass" ;
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
echo "<table width ='100%'> 
 <tr>
 <td>ID</td> <br>
 <td>NAME</td>
 <td>ADDRESS </td>
 <td>EMAIL</td>
 <td>PASSWORD</td>
 <td>D_O_B </td>
 <td>MOBILE</td>
 <td>USER_ID</td>
 <td>PASSWORDD</td>

 </tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['ID']."</td>";
    echo "<td>".$row['NAME']."</td>";
    echo "<td>".$row['ADDRESS']."</td>";
    echo "<td>".$row['EMAIL']."</td>";
    echo "<td>".$row['PASSWORDD']."</td>";
    echo "<td>".$row['D_O_B']."</td>" ;
    echo "<td>".$row['MOBILE']."</td>" ;
    echo "<td>".$row['USER_ID']."</td>" ;
    echo "<td>".$row['PASSWORDD']."</td>" ;

echo "</tr>";
} 
echo "</table>";

}
?>