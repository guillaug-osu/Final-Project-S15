<?php require_once( '../Final-Project-S15/php/auth.php'); ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Oregon State Fantasy Sports</title>
      <link rel="stylesheet" href="../Final-Project-S15/css/bootstrap.css">
      <link rel="stylesheet" href="../Final-Project-S15/css/bootstrapValidator.min.css">
      <link rel="stylesheet" href="../Final-Project-S15/css/style.css"/>
      <script type="text/javascript" src="../Final-Project-S15/scripts/jquery-1.9.1.min.js"></script> 
      <script type="text/javascript" src="../Final-Project-S15/scripts/bootstrap.min.js"></script>
      <script type="text/javascript" src="../Final-Project-S15/scripts/bootstrapValidator.min.js"></script>
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
                  <li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
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
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Player Management <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="roster.php">My Team</a></li>
                        <li><a href="#">Transactions</a></li>
                        <li><a href="freeagents.php">Free Agents</a></li>
                        <li><a href="#">Trade Players</a></li>
                     </ul>
                  </li>
                                       <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Around the League <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="league.php">Players List</a></li>
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
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-3">
                      <?php echo '<img src="../Final-Project-S15/images/profile/'.$_SESSION['SESS_PHOTO'].'?" height=150 width=150 alt="Profile Photo"></img>'; ?>
                  </div>
                  <div class="col-md-9">
                      <h1><?php echo $_SESSION['SESS_FIRST_NAME']; ?> </h1><h1><?php echo $_SESSION['SESS_LAST_NAME']; ?></h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
            <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="navbar-header">
               <span class="navbar-brand">Fantasy Profile</span>
            </div>
            <div>
               <ul class="nav navbar-nav nav-tab" id="myTab" data-tabs="tabs">
                  <li role="presentation" class="active"><a href="#overview" data-toggle="tab">Overview<span class="sr-only">(current)</span></a></li>
                  <li role="presentation"><a href="#leagues" data-toggle="tab">Leagues</a></li>
                  <li role="presentation"><a href="#medals" data-toggle="tab">Recent Medals</a></li>
                  <li role="presentation"><a href="#achievements" data-toggle="tab">Achievements</a></li>
                  <li role="presentation"><a href="#trophies" data-toggle="tab">Trophies</a></li>
               </ul>
            </div>
         </div>
      </nav>
               <div class="container-fluid">
                     <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade in active" id="overview">overview</div>
            <div class="tab-pane fade in" id="leagues">leagues</div>
            <div class="tab-pane fade in" id="medals">medals</div>
            <div class="tab-pane fade in" id="trophies">trophies</div>
            </div>
            </div>
   </body>
</html>