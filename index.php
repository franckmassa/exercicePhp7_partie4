<?php
//Lancement de la fonction avec les paramètres demandés
 function identity($gender, $age){
   //Première condition si l'age est bien > 0
   if($age > 0){
    //Condition pour le sexe, soit = homme soit = femme
     if($gender == 'femme' || $gender == 'homme'){
       //Succession de condition pour tester le genre et la majorité
       if($gender == 'homme' && $age > 18 ){
         $message = 'Vous êtes un homme majeur';
       } elseif($gender == 'homme' && $age < 18 ){//Deusieme condition si homme < 18 ans
         $message = 'Vous êtes un homme mineur';
       } elseif($gender == 'femme' && $age > 18){//Troisieme condition si femme > 18 ans
         $message = 'Vous êtes une femme majeure';
       } else{//Quatrième condition si femme < 18 ans
         $message = 'Vous êtes une femme mineure';
       }
     } else {
       //Affichage non binaire si vous ne vous sentez pas homme ou femme
       $message = 'Vous êtes non-binaire';
     }
   } else {
     //Affichage si age < 0
     $message = 'Vous n\'êtes pas né';
   }
   return $message;
 }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p>
<?=
//Affectation des valeurs aux variable-paramètres
identity('homme',26);
?>
    </p>
  </body>
</html>
