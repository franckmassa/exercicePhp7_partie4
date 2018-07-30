<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice7</title>
</head>
<body>
  <p>
    <?php
    //Déclaration de la fonction info
    function info($age, $gender){
      //Conditions pour retourner le message selon l'age et le genre
      if($age >= 18 && $gender == 'homme'){
        return 'Vous êtes un homme majeur';
      } elseif($age < 18 && $age > 0 && $gender == 'homme'){
        return 'Vous êtes un homme mineur';
      } elseif($age >= 18 && $gender == 'femme'){
        return 'Vous êtes une femme majeur';
      } elseif($age < 18 && $age > 0 && $gender == 'femme'){
        return 'Vous êtes une femme mineur';
      } else {
        //Affichage d'alerte lié à un age invalide
        echo 'Age invalide';
      }
    }
    //Affichage de l'age et le genre
    echo info(25, 'femme');
    ?>
  </p>
</body>
</html>
