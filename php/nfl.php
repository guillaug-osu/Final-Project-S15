<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'players';


// Table's primary key
$primaryKey = 'Player_ID';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes 
$columns = array(
	array( 'db' => 'JERSEY',     'dt' => 'JERSEY'),
	array( 'db' => 'Player_Name',     'dt' => 'Player_Name'),
	array( 'db' => 'OVERALL_RATING',     'dt' => 'OVERALL_RATING'),
	array( 'db' => 'POSITION',     'dt' => 'POSITION'),
	array( 'db' => 'SPEED',     'dt' => 'SPEED'),
	array( 'db' => 'ACCELERATION',     'dt' => 'ACCELERATION'),
	array( 'db' => 'STRENGTH',     'dt' => 'STRENGTH'),
	array( 'db' => 'AGILITY',     'dt' => 'AGILITY'),
	array( 'db' => 'AWARENESS',     'dt' => 'AWARENESS'),
	array( 'db' => 'CATCHING',     'dt' => 'CATCHING'),
	array( 'db' => 'CARRYING',     'dt' => 'CARRYING'),
	array( 'db' => 'THROW_POWER',     'dt' => 'THROW_POWER'),
	array( 'db' => 'KICK_POWER',     'dt' => 'KICK_POWER'),
	array( 'db' => 'KICK_ACCURACY',     'dt' => 'KICK_ACCURACY'),
	array( 'db' => 'RUN_BLOCK',     'dt' => 'RUN_BLOCK'),
	array( 'db' => 'PASS_BLOCK',     'dt' => 'PASS_BLOCK'),
	array( 'db' => 'TACKLE',     'dt' => 'TACKLE'),
	array( 'db' => 'JUMPING',     'dt' => 'JUMPING'),
	array( 'db' => 'RETURN_SKILL',     'dt' => 'RETURN_SKILL'),
	array( 'db' => 'INJURY',     'dt' => 'INJURY'),
	array( 'db' => 'STAMINA',     'dt' => 'STAMINA'),
	array( 'db' => 'TOUGHNESS',     'dt' => 'TOUGHNESS'),
	array( 'db' => 'TRUCKING',     'dt' => 'TRUCKING'),
	array( 'db' => 'ELUSIVENESS',     'dt' => 'ELUSIVENESS'),
	array( 'db' => 'BC_VISION',     'dt' => 'BC_VISION'),
	array( 'db' => 'STIFF_ARM',     'dt' => 'STIFF_ARM'),
	array( 'db' => 'SPIN_MOVE',     'dt' => 'SPIN_MOVE'),
	array( 'db' => 'JUKE_MOVE',     'dt' => 'JUKE_MOVE'),
	array( 'db' => 'IMPACT_BLOCK',     'dt' => 'IMPACT_BLOCK'),
	array( 'db' => 'POWER_MOVE',     'dt' => 'POWER_MOVE'),
	array( 'db' => 'FINESSEE_MOVE',     'dt' => 'FINESSEE_MOVE'),
	array( 'db' => 'BLOCK_SHEDDING',     'dt' => 'BLOCK_SHEDDING'),
	array( 'db' => 'PURSUIT',     'dt' => 'PURSUIT'),
	array( 'db' => 'PLAY_REC',     'dt' => 'PLAY_REC'),
	array( 'db' => 'MAN_COVERAGE',     'dt' => 'MAN_COVERAGE'),
	array( 'db' => 'ZONE_COVERAGE',     'dt' => 'ZONE_COVERAGE'),
	array( 'db' => 'SPECTACULAR_CATCH',     'dt' => 'SPECTACULAR_CATCH'),
	array( 'db' => 'CATCH_IN_TRAFFIC',     'dt' => 'CATCH_IN_TRAFFIC'),
	array( 'db' => 'ROUTE_RUNNING',     'dt' => 'ROUTE_RUNNING'),
	array( 'db' => 'HIT_POWER',     'dt' => 'HIT_POWER'),
	array( 'db' => 'PRESS',     'dt' => 'PRESS'),
	array( 'db' => 'THROW_RELEASE',     'dt' => 'THROW_RELEASE'),
	array( 'db' => 'THROW_ACCURACY_SHORT',     'dt' => 'THROW_ACCURACY_SHORT'),
	array( 'db' => 'THROW_ACCURACY_MED',     'dt' => 'THROW_ACCURACY_MED'),
	array( 'db' => 'THROW_ACCURACY_DEEP',     'dt' => 'THROW_ACCURACY_DEEP'),
	array( 'db' => 'PLAY_ACTION',     'dt' => 'PLAY_ACTION'),
	array( 'db' => 'THROW_ON_RUN',     'dt' => 'THROW_ON_RUN')
	
);

// SQL server connection information
$sql_details = array(
	'user' => 'girgalicious',
	'pass' => '',
	'db'   => 'nfl',
	'host' => '0.0.0.0'
);



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);

