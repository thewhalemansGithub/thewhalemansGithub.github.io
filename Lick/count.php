<?php
// Connect
mysql_connect("sql.byethost7.org", "yougetca_smf", "hjzrTjQSQcvB") or die(mysql_error());
mysql_select_db("yougetca_main") or die(mysql_error());
function add(){
	$query = "SELECT * FROM lick";  
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result) or die(mysql_error());
	$ntotal = $row['total'] + 1;
	$vresult = mysql_query("UPDATE lick SET total='$ntotal' ") ;
}

function total(){
	$q = mysql_query("SELECT * FROM lick") or die(mysql_error());
	$row = mysql_fetch_assoc($q);
	echo number_format($row['total']);
}
total();
add();
?>