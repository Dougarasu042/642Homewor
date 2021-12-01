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
                        <h3>Results verification Page
                        </h3>
                        <h3>Hurtado Aragon Douglas
                        </h3>
                        <p>Data survey form.</p>
                        <form class="requires-validation" action="results.php" method="post" novalidate>

                        <div class="col-md-12 mt-3" >
                        <p class="text-white">        Last name: <?php echo $_POST["Lastname"]; ?><br>  </p>    
                            </div>
                            <div class="col-md-12 mt-3" >
                            <p class="text-white">   First name: <?php echo $_POST["name"]; ?><br>    </p>  
                            </div>      

                             <div class="col-md-12">
                             <p class="text-white">   Title: <?php echo $_POST["title"]; ?><br></p>
                             
                           </div>

                           <div class="col-md-12">
                           <p class="text-white">   Height: <?php echo $_POST["Height"]; ?><br>   </p>  
                         </div>

                         <div class="col-md-12">
                         <p class="text-white">  Phone Number: <?php echo $_POST["Phone"]; ?><br>   </p>    
                         </div>

                         <div class="col-md-12">
                         <p class="text-white">    Street address: <?php echo $_POST["Street"]; ?><br></p>
      
                         </div>
                         <div class="col-md-12">
                         <p class="text-white">   City: <?php echo $_POST["City"]; ?><br>  </p>   
                         </div>

                         <div class="col-md-12">
                         <p class="text-white">    State: <?php echo $_POST["State"]; ?><br>      </p>
                         </div>

                         <div class="col-md-12">
                         <p class="text-white">    zip: <?php echo $_POST["zip"]; ?><br></p>
     
                         </div>
                      

                            <div class="col-md-12">
                            <p class="text-white">      Email: <?php echo $_POST["email"]; ?><br></p>

                            </div>

                            <div class="col-md-12">
                            <p class="text-white">      Budget: <?php echo $_POST["budget"]; ?><br></p>

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
