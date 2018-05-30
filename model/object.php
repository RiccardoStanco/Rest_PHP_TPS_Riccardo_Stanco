
<?php
//interrogazioni al database


function connettiDb(){
    $datb = require __DIR__.('/../database/db.php');
    return $datb;
}

function getEsercenti(){
    $dbc = connettiDb();
    $q = "SELECT id_amministratore, email, nome FROM amministratore";
    $r = @mysqli_query($dbc, $q);
    return $r;
}

function getQuestionari(){
    $dbc = connettiDb();
    $q = "SELECT id_questionario, id_amministratore, nome, punti, tempo_min, tempo_max FROM questionario";
    $r = @mysqli_query($dbc, $q);
    return $r;
}

/*function getIdUltimoQuestionario(){
    $dbc = connettiDb();
    $q = "SELECT id_questionario FROM questionario ORDER BY DESC LIMIT 1";
    $r = @mysqli_query($dbc, $q); // Run the query.
    return $r;
}*/

function creaQuestionario($idamministratore,$nome,$punti, $tempomin, $tempomax){
    $dbc = connettiDb();

    $q = "INSERT INTO questionario (id_amministratore, nome, punti, tempo_min, tempo_max, metodo_invio, data, pubblicato) 
          VALUES ('$idamministratore', '$nome','$punti','$tempomin','$tempomax','','','')";
    $r = @mysqli_query($dbc, $q); // Run the query.
    return $r;
}


?>