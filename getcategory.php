<?php
require_once("dbconn.php");



if(!empty($_POST["country"])) 
{
 
 //retrieve category list based on country input
$query=mysqli_query($conn,"SELECT * FROM tblvisatype WHERE country='" . $_POST["country"] . "' ");
if($query)
echo "success";
else
echo "fail";
?>
<option value="">Select category</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
  <?php
 }
}


?>