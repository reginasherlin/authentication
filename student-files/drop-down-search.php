
<?php
$con=mysqli_connect('localhost','root','','vuad');
$sql="select subject_name from video order by subject_name asc";
$res=mysqli_query($con,$sql);

?>
<div class="form">
<form action="drop-down-search.php" method="post">
<select name="search">



<?php
while($row=mysqli_fetch_assoc($res))
{

$subject_name=$row['subject_name'];
echo "<option value='$subject_name'>$subject_name</option>";

}


?>

</select>
<input type="submit" name="submit" value="Search" />
</form>
</div>
<?php

if(isset($_POST["submit"])){
$set= $_POST['search'];
$show="select * from video where subject_name = '$set'";
$result=mysqli_query($con,$show);
?>	
<table border=1>

<tr>
<th>STAFF NAME</th>
<th>VIDEO NAME</th>
<th>SUBJECT NAME</th>
<th>VIDEO LINK</th>
</tr>
<?php
while($rows=mysqli_fetch_array($result)){
	$id=$rows['id'];
	$name=$rows['name'];
?>	
<tr>

<td><?php echo $rows['subject_name']; ?></td>
<td><?php echo $rows['name']; ?></td>
<td><?php  echo "<a href='../student_watch.php?id=$id'>".$name."</a>"; ?></td>
</tr>
<?php 


}
}


else{
	
	echo "";
	
}

?>
</table>

