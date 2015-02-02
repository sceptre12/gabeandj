<?php 
  // include ('config/db_config.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
          if(sessionStorage.getItem("auth") !== "true"){
            window.location.replace("404.php");
          }
        </script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/manage.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body class="container" id="admin">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
       <div class="jumbotron">
         <h1>Admin Panel</h1>
       </div>
       <div class="panel panel-default">
         <div class="panel-heading">
           <h2 class="panel-title">Reports</h2>
         </div>
         <div class="panel-body">
           <table class="table table-bordered table-hover" id="report">
             <thead>
               <tr>
                 <th>ID</th>
                 <th>FirstName</th>
                 <th>LastName</th>
                 <th>Email</th>
                 <th>Message</th>
                 <th>Allergies</th>
                 <th>Meal Choice</th>
                 <th>FirstName</th>
                 <th>LastName</th>
                 <th>Meal Choice</th>
                 <th>Allergies</th>
                 <th>FirstName</th>
                 <th>LastName</th>
                 <th>Meal Choice</th>
                 <th>Allergies</th>
                 <th>FirstName</th>
                 <th>LastName</th>
                 <th>Meal Choice</th>
                 <th>Allergies</th>
                 <th>FirstName</th>
                 <th>LastName</th>
                 <th>Meal Choice</th>
                 <th>Allergies</th>
               </tr>
             </thead>
             <tbody>               
             <?php
              $query = $handler->query('SELECT * FROM specialg');
              // fetches the data and stores it as an object
              $count = 1;
              while($r = $query->fetch(PDO::FETCH_OBJ)){
                echo '<tr>';
                  echo '<td>', $count,  '</td>';
                  echo '<td>', $r->fname, '</td>';
                  echo '<td>', $r->lname, '</td>';
                  echo '<td>', $r->email, '</td>';
                  echo '<td>', $r->message, '</td>';
                  echo '<td>', $r->allergies, '</td>';
                  echo '<td>', $r->mchoice, '</td>';
                  echo '<td>', $r->g2fname, '</td>';
                  echo '<td>', $r->g2lname, '</td>';
                  echo '<td>', $r->g2mchoice, '</td>';
                  echo '<td>', $r->g2allergies, '</td>';
                  echo '<td>', $r->g3fname, '</td>';
                  echo '<td>', $r->g3lname, '</td>';
                  echo '<td>', $r->g3mchoice, '</td>';
                  echo '<td>', $r->g3allergies, '</td>';
                  echo '<td>', $r->g4fname, '</td>';
                  echo '<td>', $r->g4lname, '</td>';
                  echo '<td>', $r->g4mchoice, '</td>';
                  echo '<td>', $r->g4allergies, '</td>';
                  echo '<td>', $r->g5fname, '</td>';
                  echo '<td>', $r->g5lname, '</td>';
                  echo '<td>', $r->g5mchoice, '</td>';
                  echo '<td>', $r->g5allergies, '</td>';
                echo '</tr>';
                $count++;
              }
              $handler = null ;
             ?>
             </tbody>
           </table>
         </div>
       </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/manage.js"></script>
        <script src="js/plugins.js"></script>
    </body>
</html>
