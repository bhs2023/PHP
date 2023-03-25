<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
</style>

<?php
    $conn = mysqli_connect( 'localhost', 'user01', '1234', 'mydb');
    $sql = "SELECT * FROM guestbook";
    $result = mysqli_query($conn, $sql);
?>

<table id="customers">
<?php
    $row = mysqli_fetch_array($result);
    while($row) {
        
?>
    <tr >
        <td ><?=$row['id']?></td>
        <td><?=$row['title']?></td>
        <td><?=$row['writer']?></td>
        <td><?=$row['contents']?></td>
        <td><?=$row['wdate']?></td>
    </tr>
<?php
       $row = mysqli_fetch_array($result);
    }

    mysqli_close($conn);
?>
</table>
