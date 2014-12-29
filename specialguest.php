<?php 
  include ('config/db_config.php');
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
        <title>SignUp</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript">
          if(sessionStorage.getItem("pass") === null){window.location.replace("404.html");}
          else if (localStorage.getItem("used") === "true"){window.location.replace("accessdenied.html");}
          localStorage.setItem("used","true");
        </script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body id="sgsingup" class="container">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
       <div class="jumbotron">
         <h1>Registration</h1>
       </div>
       <form action="member/action/add.php" role="form" method="post">
       <div class="row">
         <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-12">
              <h1>Guest 1</h1>
            </div>
          </div>
           <div class="row">
            <div class="col-sm-6">
              <div class="form-group">          
                <label for="fname">FirstName</label>
               <input type="text" id="fname" name="fname" class="form-control" placeholder="First Name">
              </div>
              <div class="form-group">
                  <label for="lname">LastName</label>
                 <input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name">
              </div>
              <div class="form-group">          
                  <label for="email">Email</label>
                 <input type="email" id="email" name="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="meal">
                <h4>Course Selection</h4>
              </div>            
              <div class="form-group">
                <label for="ft">Meal choice</label>
                <select name="food" id="ft" class="form-control">
                  <option value="Chicken">Chicken</option>
                  <option value="Fish">Fish</option>
                  <option value="Vegetarian">Vegetarian</option>
                </select>
                <label for="allergies">Do you have any Food Allergies</label>
                <input type="text" name="allergies" class="form-control" id="allergies" placeholder="Allergies">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <div class="col-sm-12">
                <label>Message for the Bride and Groom</label>
                  <textarea name="message" id="message" name="message"></textarea>
              </div>
             </div>   
          </div> 
         </div>
         <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-12" id="gi">
              <div class="gont">
                
                </div>
              </div>    
            </div>
          </div>
         </div>
       </div>
         <div class="form-group">
           <div class="col-sm-12" id="sub">
             <button type="submit" name="spguest" class="btn btn-info btn-lg ">Submit</button>
           </div>
         </div>
       </form>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript">
        (function(){var e=sessionStorage.getItem("item");var t=$(".gont");e=e.split("")[0];for(var n=0;n<e;n++){if(n>=1){var r="<h4>Guest "+(n+1)+" </h4>"+'<div class="form-group guest">'+'<label  for="gf'+(n+1)+'">First Name</label>'+'<input type="text" id="gf'+(n+1)+'" name="fgname'+(n+1)+'" placeholder=" First Name">'+'<label for="gl'+(n+1)+'">Last Name</label>'+'<input type="text" id="gl'+(n+1)+'" name="lname'+(n+1)+'" placeholder="Last Name">'+"</div>"+'<div class="form-group">'+'<label for="gft'+(n+1)+'">Meal choice</label>'+'<select name="gfood'+(n+1)+'" id="gft'+(n+1)+'" class="form-control">'+'<option value="Chicken">Chicken</option>'+'<option value="Fish">Fish</option>'+'<option value="Vegetarian">Vegetarian</option>'+"</select>"+'<label for="gallergies'+(n+1)+'">Do They have any Food Allergies</label>'+'<input type="text" name="gallergies'+(n+1)+'" class="form-control" id="allergies'+(n+1)+'" placeholder="Allergies">';t.append(r).find("label").css("margin-right","10px")}}})()
        </script>
        <script src="js/plugins.js"></script>
    </body>
</html>
