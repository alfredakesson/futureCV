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

    function getUserByID($ID)
    {   
        return queryDB("SELECT * FROM \"Users\" WHERE ID = \"$ID\"")[0]["Name"];
    }
	//echo getUserByID(1);
	//print_r( queryDB("SELECT * FROM \"test\""));