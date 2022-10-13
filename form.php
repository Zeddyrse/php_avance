<?php

   $errors = [];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $mail = $_POST['mail'];
   $telephone = $_POST['telephone'];
   $sujet = $_POST['sujet'];
   $message = $_POST['message'];

//    if($_SERVER['REQUEST_METHOD'] === 'POST') {
       // nettoyage et validation des données soumises via le formulaire 
       if(!isset($firstname) || trim($firstname) === '')
           $errors[] = "Le prénom est obligatoire";
       if(!isset($lastname) || trim($lastname) === '') 
           $errors[] = "Le nom est obligatoire";
       if(!isset($mail) || trim($mail) === '' || filter_var($mail,FILTER_VALIDATE_EMAIL)) 
           $errors[] = "Une addresse mail est obligatoire";
       if(!isset($telephone) || trim($telephone) === '') 
           $errors[] = "Le téléphone obligatoire";
       if(!isset($sujet ) || trim($sujet ) === '')
           $errors[] = "Une séléction de sujet est obligatoire";
       if(!isset($message) || trim($message) === '')
           $errors[] = "Un message est obligatoire";


           
       if(empty($errors)) 
       {
           // traitement du formulaire
           // puis redirection
           
           header('Location: thanks.php?firstname='. $firstname.'&'.'lastname='. $lastname.'&'.'mail='. $mail.'&'.'telephone='. $telephone.'&'.'message='. $message.'&'.'sujet='. $sujet);
       }
       else
       {
            return $errors;
            header('Location : index.php');
       }
//    }


?>