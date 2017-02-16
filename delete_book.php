<?php
include "config.php";
$id= $_GET['id'];
$query="DELETE FROM book WHERE id = '$id' ";
$result=$pdo->prepare($query);
$result->execute();
if($result)
{
	echo "<script language=\"javascript\">";
	echo "document.location=\"http://localhost/admin/list-book.php\"";
	echo "</script>";
	return;
}
else
{
	echo '保存失败!';

}
?>