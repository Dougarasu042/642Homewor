<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Registration Form (Bootstrap 5 Validation)</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->



<div class="form-body">
        <div class="row">
            <div class="form-holder">  
                <div class="form-content">
                    <div class="form-items" class="form-inline">
                        <h3>CSC 642 848 Fall 2021 Individual Assignment
                        </h3>
                        <h3>Hurtado Aragon Douglas
                        </h3>
                        <p>Data survey form.</p>
                        <form class="requires-validation" action="results.php" method="post" novalidate>

                            <div class="col-md-12 mt-3">
                            Last name <?php echo $_POST["Lastname"]; ?><br>      
                            </div>
                            <div class="col-md-12">
                            First name <?php echo $_POST["FirstName"]; ?><br>      
                             </div>

                             <div class="col-md-12">
                             Title <?php echo $_POST["title"]; ?><br>
                             
                           </div>

                           <div class="col-md-12">
                           Height <?php echo $_POST["Height"]; ?><br>     
                         </div>

                         <div class="col-md-12">
                         Phone Number <?php echo $_POST["Phone"]; ?><br>       
                         </div>

                         <div class="col-md-12">
                         Street address <?php echo $_POST["Street"]; ?><br>
      
                         </div>
                         <div class="col-md-12">
                         City <?php echo $_POST["City"]; ?><br>     
                         </div>

                         <div class="col-md-12">
                         State <?php echo $_POST["State"]; ?><br>      
                         </div>

                         <div class="col-md-12">
                         zip <?php echo $_POST["zip"]; ?><br>
     
                         </div>
                      

                            <div class="col-md-12">
                            Email: <?php echo $_POST["email"]; ?><br>

                            </div>

                            <div class="col-md-12">
                            Budget <?php echo $_POST["budget"]; ?><br>

                            </div>

                              
                  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- partial -->
  <script  src="./script.js">
</script>

</body>
</html>


        Hello <?php echo $_POST["Lastname"]; ?>!<br>
 Your mail is <?php echo $_POST["FirstName"]; ?>. 
