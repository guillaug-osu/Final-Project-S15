<?php require_once( '../Final-Project-S15/php/auth.php'); ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Oregon State Fantasy Sports</title>
      <link rel="stylesheet" type="text/css" href="../Final-Project-S15/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../Final-Project-S15/css/dataTables.bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../Final-Project-S15/css/bootstrapValidator.min.css">
      <link rel="stylesheet" type="text/css" href="../Final-Project-S15/css/style.css"/>
      <script type="text/javascript" charset="utf8" src="../Final-Project-S15/scripts/jquery-1.9.1.min.js"></script> 
      <script type="text/javascript" charset="utf8" src="../Final-Project-S15/scripts/bootstrap.min.js"></script>
      <script type="text/javascript" charset="utf8" src="../Final-Project-S15/scripts/jquery.dataTables.js"></script>
      <script type="text/javascript" charset="utf8" src="../Final-Project-S15/scripts/dataTables.bootstrap.js"></script>
      <script type="text/javascript" charset="utf8" src="../Final-Project-S15/scripts/bootstrapValidator.min.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">Oregon State Fantasy Sports</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li><a href="#">Home<span class="sr-only">(current)</span></a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Team <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Depth Chart</a></li>
                        <li><a href="#">Statistics</a></li>
                        <li><a href="#">Coaching Staff</a></li>
                        <li><a href="#">Front Office</a></li>
                     </ul>
                  </li>
                     <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Player Management<span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="roster.php">My Team</a></li>
                        <li><a href="#">Transactions</a></li>
                        <li><a href="#">Free Agents</a></li>
                        <li><a href="#">Trade Players</a></li>
                     </ul>
                  </li>
                                       <li class="dropdown">
                     <a href="#" class="active dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Around the League <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Players List</a></li>
                        <li><a href="#">League Leaders</a></li>
                        <li><a href="#">Injuries</a></li>
                        <li><a href="#">Standings</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false">Help<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                     <li><a href="#">Test</a></li>
                  </ul>
                  </li>
                  <li class="dropdown">
                     <?php echo '<img src="../Final-Project-S15/images/profile/'.$_SESSION['SESS_PHOTO'].'?" height=50 width=50 alt="Profile Photo" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></img>'; ?>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="profile.php">View Profile</a></li>
                        <li><a href="#">Manage Account</a></li>
                        <li><a href="#">Inbox</a></li>
                        <li><a href="#">Invite a friend</a></li>
                        <li class="divider"></li>
                        <li><a href="../Final-Project-S15/php/index.php">Log out</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
                 <table id="nfl" class="table display">
                        <thead>
                           <tr>
                              <th data-toggle="tooltip" data-placement="left" title="Tooltip on left">Jersey</th>
                              <th>Player Name</th>
                              <th>Overall</th>
                              <th>Position</th>
                              <th>Speed</th>
                              <th>Acceleration</th>
                              <th>Strength</th>
                              <th>Agility</th>
                              <th>Awareness</th>
                              <th>Catching</th>
                              <th>Carrying</th>
                              <th>Throw Power</th>
                              <th>Kick Power</th>
                              <th>Kick Accuracy</th>
                              <th>Run Block</th>
                              <th>Pass Block</th>
                              <th>Tackle</th>
                              <th>Jumping</th>
                              <th>Kick Return</th>
                              <th>Injury</th>
                              <th>Stamina</th>
                              <th>Toughness</th>
                              <th>Trucking</th>
                              <th>Elusiveness</th>
                              <th>Ball Carrier Vision</th>
                              <th>Stiff Arm</th>
                              <th>Spin Move</th>
                              <th>Juke Move</th>
                              <th>Impact Block</th>
                              <th>Power Moves</th>
                              <th>Finnesse Moves</th>
                              <th>Block Shedding</th>
                              <th>Pursuit</th>
                              <th>Play Recognition</th>
                              <th>Man Cover</th>
                              <th>Zone cover</th>
                              <th>Spectacular Catch</th>
                              <th>Catch in Traffic</th>
                              <th>Route Running</th>
                              <th>Hit Power</th>
                              <th>Press</th>
                              <th>Line Release</th>
                              <th>Short Throw Accuracy</th>
                              <th>Medium Throw Accuracy</th>
                              <th>Deep Throw Accuracy</th>
                              <th>Playaction</th>
                              <th>Throw on the Run</th>
                           </tr>
                        </thead>
                     </table>
            </div>
         </div>
      </div>
            <script>
         $(document).ready(function() {
             var table = $('#nfl').DataTable({
                 "bLengthChange": true,
                 "paging": true,
                 "serverSide": true,
                 "scrollX": true,
                 "ordering": true,
                 "info": true,
                 "autoWidth": true,
                 "ajax": {
                     "url": "../Final-Project-S15/php/nfl.php",
                     "type": "POST"
                 },
                 "columns": [{
                         "data": "JERSEY"
                     }, {
                         "data": "Player_Name"
                     }, {
                         "data": "OVERALL_RATING"
                     }, {
                         "data": "POSITION"
                     }, {
                         "data": "SPEED"
                     }, {
                         "data": "ACCELERATION"
                     }, {
                         "data": "STRENGTH"
                     }, {
                         "data": "AGILITY"
                     },
         
                     {
                         "data": "AWARENESS"
                     }, {
                         "data": "CATCHING"
                     }, {
                         "data": "CARRYING"
                     }, {
                         "data": "THROW_POWER"
                     }, {
                         "data": "KICK_POWER"
                     }, {
                         "data": "KICK_ACCURACY"
                     }, {
                         "data": "RUN_BLOCK"
                     }, {
                         "data": "PASS_BLOCK"
                     }, {
                         "data": "TACKLE"
                     }, {
                         "data": "JUMPING"
                     }, {
                         "data": "RETURN_SKILL"
                     }, {
                         "data": "INJURY"
                     }, {
                         "data": "STAMINA"
                     }, {
                         "data": "TOUGHNESS"
                     }, {
                         "data": "TRUCKING"
                     }, {
                         "data": "ELUSIVENESS"
                     }, {
                         "data": "BC_VISION"
                     }, {
                         "data": "STIFF_ARM"
                     }, {
                         "data": "SPIN_MOVE"
                     }, {
                         "data": "JUKE_MOVE"
                     }, {
                         "data": "IMPACT_BLOCK"
                     }, {
                         "data": "POWER_MOVE"
                     }, {
                         "data": "FINESSEE_MOVE"
                     }, {
                         "data": "BLOCK_SHEDDING"
                     }, {
                         "data": "PURSUIT"
                     }, {
                         "data": "PLAY_REC"
                     }, {
                         "data": "MAN_COVERAGE"
                     }, {
                         "data": "ZONE_COVERAGE"
                     }, {
                         "data": "SPECTACULAR_CATCH"
                     }, {
                         "data": "CATCH_IN_TRAFFIC"
                     }, {
                         "data": "ROUTE_RUNNING"
                     }, {
                         "data": "HIT_POWER"
                     }, {
                         "data": "PRESS"
                     }, {
                         "data": "THROW_RELEASE"
                     }, {
                         "data": "THROW_ACCURACY_SHORT"
                     }, {
                         "data": "THROW_ACCURACY_MED"
                     }, {
                         "data": "THROW_ACCURACY_DEEP"
                     }, {
                         "data": "PLAY_ACTION"
                     }, {
                         "data": "THROW_ON_RUN"
                     }
                 ]
               //  "drawCallback": function(settings) {
               //       var test = table.column(3).data().sort().unique();
         
               //       var i;
               //       for (i = 0; i < test.length; i++) {
               //           var data = test[i];
               //           var option = document.createElement("option");
               //           option.text = data;
               //           option.value = data;
               //           var select = document.getElementById("userInput");
               //           select.appendChild(option);
               //       }
               //  }
         
             });
         
         
             $('#nfl tbody').on('click', 'tr', function() {
                 if ($(this).hasClass('selected')) {
                     $(this).removeClass('selected');
                 }
                 else {
                     table.$('tr.selected').removeClass('selected');
                     $(this).addClass('selected');
                 }
                 console.log("touch");
             });
         
         });
      </script>
   </body>
</html>