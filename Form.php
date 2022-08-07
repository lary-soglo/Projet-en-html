<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="Formt.css">
</head>
<body> 

    <div class="global">
             <div class="left">
                    <div class="colone1">
                       <img src="img/form-v7.jpg"  alt="img">  
                    </div>         
             </div>

        <div class="right">
             
                    <div class="colone2">

                        <h1>Register Form</h1>
                        <form action="" method="POST" ENCTYPE="multipart/form-data"  id="formulaire">
                              <div class= "nom">
                                   <label for="nom">nom</label><br>
                                   <input type="text" name="nom" id="nom" placeholder="Votre nom"value=""><br>
                              </div>

                              <div class= "prenom">
                                   <label for="prenom">prenom</label><br>
                                   <input type="text" name="prenom" id="prenom"placeholder="Votre prenom" value=""><br>
                              </div>  
                              
                              <div class= "date">
                                   <label for="date">date de naissance</label><br>
                                   <input type="date" name="date" id="date"value=""><br>
                              </div>

                              <div class= "sexe">
                                   <label for="sexe">sexe</label>
                                   <input type="radio" value = "Feminin" name="sexe" >
                                   <label for="sexe">F</label>
                                   <input type="radio" value = "Masculin" name="sexe" id="sexe">
                                   <label for="">M</label>
                                   </div>
                                   
                                   <div class= "diplome">   
                                        <label for="diplome">diplome</label><br>
                                        <input type="file" name="mon_fichier" value=""><br>
                                        </div>
                                   <div >
                                   <button class="Button">Register</button> or <input type="Submit" id='Submit' value = 'Sign in'>
                              
                              </div>
                         </form>     
                                   
                       
               </div>     
        </div>          
   </div>     


</body>
        
</html> 
  <?php
 echo "Les Resultats du traitement du Formulaire"."<br>";

  if(!empty($_POST)){
        $nom= $_POST["nom"];
        $prenom= $_POST["prenom"];
        $date= $_POST["date"];
        $sexe= $_POST["sexe"];
        $file= $_FILES["mon_fichier"]["name"];
        $size= $_FILES["mon_fichier"]["size"];
        $type= $_FILES["mon_fichier"]["type"];
        $extension= pathinfo($_FILES["mon_fichier"]["name"], PATHINFO_EXTENSION);

        /*echo "nom:".$nom ."<br>";*/
        /*echo "prenom:".$prenom."<br>";*/
        echo "date:". $date."<br>";
        echo "sexe:".$sexe."<br>";
        #echo "nom de fichier :".$file.
        echo "la taille du fichier:".$size."<br>";
        echo "le type du fichier:".$type."<br>";
  }
  if(strlen($nom)<2){
              echo "Nombre de caractere insuiffisant"."<br>";
            }else{
              echo "nom:".$nom ."<br>";
            }
            if(strlen($prenom)<2){
              echo "Nombre de caractere insuiffisant"."<br>";
            }else{
            echo "prenom:".$prenom ."<br>";
 }
           $tab =array("doc","docx","pdf","jpg","jpeg","gif","png");
            if(!(in_array($extension,$tab))){
             echo "Le format de votre fichier est invalide"."<br>";
            
            }
             elseif(in_array($extension,$tab) and $size> 4000000){
                echo "Le fichier est trop lourd"."<br>";
              }
              else{
               echo "nom de fichier :".$file."<br>";
                $telecharge= "diploma/".$_FILES["mon_fichier"]["name"];
                move_uploaded_file($_FILES["mon_fichier"]["tmp_name"],$telecharge);
  }
          $fp= fopen("data.txt","r+");
          $nom= $_POST["nom"];
          $prenom= $_POST["prenom"];
          $date= $_POST["date"];
          $sexe= $_POST["sexe"];
          $file= $_FILES["mon_fichier"]["name"];
          $size= $_FILES["mon_fichier"]["size"];
          $type= $_FILES["mon_fichier"]["type"];
          fwrite($fp,"nom:".$nom.PHP_EOL);
          fwrite($fp,"prenom:".$prenom.PHP_EOL);
          fwrite($fp,"date:".$date.PHP_EOL);
          fwrite($fp,"sexe:".$sexe.PHP_EOL);
          fwrite($fp,"name:".$file.PHP_EOL);
          fwrite($fp,"size:".$size.PHP_EOL);
          fwrite($fp,"type:".$type.PHP_EOL);
          fclose($fp);
          
          $var =array("M","F");
          if(!(in_array($sexe,$tab))){
           echo "Votre  sexe est bien stocké";
          }
            
              


           


?>