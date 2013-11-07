<?php
	function queryDB($query)
	{
		$handle = new SQLite3("data.db");
		$array['dbhandle'] = $handle; 
    	$array['query'] = $query;
    	$result = $dbhandle->query($query);
    	$i = 0; 
    	while ($result->columnName($i)) 
    	{ 
        	$columns[ ] = $result->columnName($i); 
        	$i++; 
    	} 
    
    	$resx = $result->fetchArray(SQLITE3_ASSOC); 
    	return $resx; 
	}
	echo "string";
	echo queryDB("SELECT * FROM \"test\"");