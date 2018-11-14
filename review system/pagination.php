<html>
<style>


</style>
</html>

<?php



$conn = new mysqli('localhost', 'root','', 'feedback');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql= "SELECT Count(pid) FROM product_info";
$row=mysqli_query($conn,$sql);
$rows=mysqli_fetch_row($row);

$pages_row=2;
$last=ceil($rows[0]/$pages_row);
$pagenum;
if($last<1)
{
	$last=1;
}
$pagenum=1;
if(isset($_GET['pn']))
{
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);


}

if($pagenum<1)
{
	$pagenum=1;
}
if($pagenum>$last)
{
	$pagenum=$last;
}

$limit = 'LIMIT ' .($pagenum - 1) * $pages_row .',' .$pages_row;
$sql2="SELECT * FROM product_info $limit";
$query = mysqli_query($conn, $sql2);
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
$paginationCtrls = '';


if($last != 1){
	
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls = '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'"><b>Previous</b></a> &nbsp; &nbsp; ';
			for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls.= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">&nbsp<b>'.$i.'</b>&nbsp</a> &nbsp; ';
			}
	    }
    }
		$paginationCtrls .= ''.$pagenum.' &nbsp; ';
		for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls.= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">&nbsp<b>'.$i.'</b>&nbsp</a> &nbsp; ';
		if($i >= $pagenum+6){
			break;
		}
	}
	
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">&nbsp<b>Next</b></a> ';
    }
    
}

echo"<div style='background-color:#ccbbcc;padding:auto;border-radius: 25px;'>";
	echo"<h1 style='font-family:courier;font-size:200%;' align='center'>PAGINATION </h1> </div>";
	echo"<br>";
	echo"<hr>";
	echo"</div>";
	echo $textline2;

while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){

	$name = $row["name"];
	$cost = $row["cost"];
	$image = $row["image"];
	
	
	echo "<hr>";
	echo"<div style='background-color:#ccbbcc;padding:auto;border-radius:10px;'>";
    echo "<img class='image' src='image/$image' width='150' height='150'>";
    echo"<br>";
    echo"name:$name";
    echo"&nbsp &nbsp";
    echo"cost:$cost";
    echo"<br>";
	
	echo"<br>";
	

	echo"</div>";





}
echo"</hr>";
echo "<br>";

echo"<div style='background-color:#ccbbcc;padding:auto;border-radius:5px;'>";

echo "$paginationCtrls";
echo "</div>";

mysqli_close($conn);
?>











</html>