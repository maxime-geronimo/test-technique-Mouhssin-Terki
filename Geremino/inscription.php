<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Test Geremino</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./css/main.css">
      <link rel="stylesheet" href="./css/style.css">
   </head>
   <body>

      <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
           <div class="container">
              <a class="navbar-brand" href="#">
              <img src="images/logo.png" class="img-responsive" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                 <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                       <a class="nav-link" href="#">pop culture</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link"  href="#">design</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">photography</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">about us</a>
                    </li>
                  
                      <li class="nav-item">
                       <a class="nav-link" href="inscription.html">inscription</a>
                    </li>

                     <li class="nav-item">
                       <a class="nav-link" href="#">connexion</a>
                    </li>

                   	 <li class="nav-item">
                   	 	<div style="position: absolute; top: 12px; left: 20px;width: 250px; height: 105px" > 
                       <a class="dsgnmedia" href="./index.html" ><img src="res/img/app.svg" style="width:10%" > dsgn.media</a>
                         </div>
                   	 </li>
  



                 </ul>
              </div>
           </div>
        </nav>


          <div class="imgcentre">
          <img src="res/img/inscription.jpg" style="width:100%" >
         
      </div>

      </header>


 <div style="text-align: center;"> <fieldset  style="width:97%;"">  
 
                             <legend>Informations personnelles </legend>
                
               <!------------------- formulaire d'inscriptioon ---------------->
               
                   <form method="post" action = "Bases_donnees.php"> 

                   

               
                    <label> Nom :<br /><input type = "text" id="Name" name ="Name" maxlength="30" required > <br/>   
                <label> Prénom :<br /><input type = "text" id="FirstName" name ="FirstName" maxlength="30" required ><br/>
                                <label> E-mail :<br /><input type = "email" id="Email" name ="Email" maxlength="40" placeholder="terki.m@hotmail.com" required ><br/>
                  <label> Mot de passe :<br /><input type = "password" id="Password" name ="Password" minlength="5" maxlength="40" required ><br/>
                  <label> Numéro de téléphone :<br /><input type = "tel" id="PhoneNumber" name ="PhoneNumber" minlength="10" maxlength="14" required ><br/>
                  <label> Date de Naissance : <br /><input type="date" id="BirthDay" name="BirthDay" required><br/><br/>
                  <label> <input type = "radio"  name ="Sexe1" id="SexHome" value ="H" required> Homme  </label>
                                <label> <input type = "radio"  name ="Sexe1" id ="SexFemme" value ="F" required> Femme  </label><br/><br/>

                <p>Pour bien assurer votre inscription nous vous invitons à compléter votre inscription </p>

                <label> Quelle est votre voiture préférée ? <input type = "text" id="Question1_Authentification" name ="Question1_Authentification" maxlength="50">               

                  &nbsp

                
                <input id="AcountCreate" name="AcountCreate"  type="submit" value ="Je m'inscris"> 
                  <input id="Reinitialiser" type="reset" value ="Réinitialiser">
              </label>              
                   </form>

                     </fieldset> 
      </div>
</br>


      <footer class="social-links">
      <div class="container-fluid">
        <ul2>
          <li>
            <a href="#">Instagram</a> 
          </li>
          <li>
            <a href="#">Facebook</a>
          </li>
          <li>
            <a href="#">Twitter</a>
          </li>
          <li>
            <a href="#">Terms of Service and Privacy</a>
          </li>
        </ul2>

      </div>

      </footer>
   </body>
</html>

