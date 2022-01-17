<?php 

function GetInfoPersoDemande()
    {
        //etape 1: on recupère toujour la dernière url envoyé en db
      $pdo = new PDO('mysql:host=localhost;dbname=theageofspirits;charset=utf8', 'root', '',);
      $sql ='SELECT * FROM combat ORDER BY id DESC LIMIT 1 ';
      $query = $pdo->query($sql);
      $query->execute();
      $rows = $query->fetchAll(PDO::FETCH_OBJ);
      $id = $rows[0]->user_demande_id;


      $sql ='SELECT * FROM user WHERE id = :id';
      $query =$pdo->prepare($sql);
      $query->execute(array(
        'id'=> $id,
      ));
      $rows = $query->fetchAll(PDO::FETCH_OBJ);
      $id = $rows[0]->perso_id;

 

      //etape 3: on recupère l'id pour recupe les differente info du perso
      $sql ='SELECT * FROM perso WHERE id = :id';
      $query =$pdo->prepare($sql);
      $query->execute(array(
          'id'=>$id));
      $persoDemande = $query->fetchAll(PDO::FETCH_OBJ);
        
    return $persoDemande;
    }

    function GetInfoPersoReception()
    {
        //etape 1: on recupère toujour la dernière url envoyé en db
        $pdo = new PDO('mysql:host=localhost;dbname=theageofspirits;charset=utf8', 'root', '',);
        $sql ='SELECT * FROM  combat ORDER BY id DESC LIMIT 1 ';
        $query = $pdo->query($sql);
        $query->execute();
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        $id = $rows[0]->user_reception_id;

        $sql ='SELECT * FROM user WHERE id = :id';
        $query =$pdo->prepare($sql);
        $query->execute(array(
          'id'=> $id,
        ));
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        $id = $rows[0]->perso_id;

        //etape 3: on recupère l'id pour recupe les differente info du perso
        $sql ='SELECT * FROM perso WHERE id = :id';
        $query =$pdo->prepare($sql);
        $query->execute(array(
            'id'=>$id));
        $persoReception = $query->fetchAll(PDO::FETCH_OBJ);
        return $persoReception;
    }
?>