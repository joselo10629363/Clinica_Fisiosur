<?php
function backup_table($host,$user,$pass,$name,$tables='*'){
	$return='';
	$link=new mysqi($host,$user,$pass,$name);
	if ($tables=='*') {

	$tables =array();
	$result = $link->query('SHOW TABLES');
	while($row =mysqli_fetch_row($result))
	{
		$tables[]= $row[0];
	}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',', $tables);
	}

	foreach ($tables as $table) {
		$result = $link->query('SELECT * FROM'.$table);
		$num_fields = mysqli_num_fields($result);
		$row2 = mysqli_fetch_row($link->query('SHOW CREATE TABLE'.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		for ($i=0; $i < $num_fields ; $i++) { 
			while ($row = mysqli_fetch_row($result)) {

				$return.='INSERT INTO'.$table.'VALUES(';
               
               for($j=0; $j<$num_fields; $j++){
               	$row[$j] = addslashes($row[$j]);
           	$row[$j] = preg_replace("/\n/","\\n",$row[$j]);
           	if (isset($row[$j])) {$return.= '"'.$row[$j].'"';} else {   }
           	if ($j<($num_fields-1)) { $return.=','; }

               }
               $return.= ");\n";
			}
		}
		$return.="\n\n\n";

			}
			$fecha=date("Y-m-d");
			$handle = fopen('backups/db-backup-'.$fecha.'sql','w+');
			fwrite($handle, $return);
			fclose($handle);
}

?>