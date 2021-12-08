<?php include('adminheader.php'); ?>
<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
		color:#024250  ;
		font-family: monospace;
		font-size: 15px;
		text-align: left;
	}
	th {
		background-color: #588c7e;
		color: white;
	}
	tr:nth-child(even) {background-color: #f2f2f2}
</style>
<br>
<?php
$link = mysqli_connect('localhost', 'root', '', 'airtra');
$query = "SELECT * FROM feedback  ";
$result=mysqli_query($link,$query);
         echo ("User&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         	| 
         	Feedback
         	 "); 		echo  nl2br("\n"); echo  nl2br("\n"); 
        if(mysqli_num_rows($result)>0){
        	        	while(($row = mysqli_fetch_row($result))!=null) {
echo "<table border = '1'>";
echo "<tr>";
echo "<td>" .$row[1] ."</td>";
echo "<td>" .$row[2] ."</td>"; 
echo "</tr>";
echo "</table>";
} 
}

?>
<?php include('../copyright.php'); ?>