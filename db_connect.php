<?php
	$hostname = "oniddb.cws.oregonstate.edu";
        $user = "leweyk-db";
        $pass = "5M4AVkbRNmg4YyLM";
        $database = "leweyk-db";
    $link = mysql_connect( $hostname, $user, $pass );
	if( !$link ) {
            die("Connection to database server failed.");
        }

        if( !mysql_selectdb( $database ) ) {
            die("Unable to select " . $database . " database" );
        }
?>
