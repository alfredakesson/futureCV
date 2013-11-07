<?php
	function queryDB($query)
	{
		$handle = new SQLite3("data.db");
		$array['dbhandle'] = $handle; 
    	$array['query'] = $query;
    	$result = $handle->query($query);

    	while ($res = $result->fetchArray(SQLITE3_ASSOC)) 
    	{ 
        	$columns[ ] = $res; 
    	} 
    
    	return $columns; 
	}
	echo "string1";
	print_r( queryDB("SELECT * FROM \"test\""));