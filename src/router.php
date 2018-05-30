<?php 
//-----------------------------------------Functions to define method behavior---------------------------------//
function get($uri){
    $headers = apache_request_headers();
    switch ($uri) {

        case '/qualcosa':
            getQualcosa();
            break;

        case '/dashboardApertamente':
            getDashboard($headers);
            break;

        case '/listaEsercenti':
            getListaEsercenti($headers);
            break;

        case '/listaQuestionari':
            getListaQuestionari($headers);
            break;

        case '/creaQuestionario':
            crea_questionario($headers);
            break;


        default:
        notFound();
        break;
    }
}


function post($uri){
    $headers = apache_request_headers();
    switch ($uri) {

        case '/qualcosa':
        postQualcosa();
        break;

        case '/creaQuestionario':
            postCreaQuestionario($headers);
            crea_questionario($headers);
            break;

        default:
        notFound();
        break;
    }
}

function notFound(){
    http_response_code(404);
    echo "404 Page Not Found";
}

function badRequest(){
    http_response_code(400);
    echo "Method not implemented";
}

//-----------------------------------------Functions to get the work done---------------------------------//

function getQualcosa(){
    require __DIR__ . '/../view/qualcosa.php';
}

function getDashboard($headers){

    require __DIR__ . '/../model/object.php';
    $r = getQuestionari();
    require __DIR__ . '/../view/listaQuestionari.php';
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/dashboardApertamente.php';

    view_dashboard($r);}
    else { echo $r;};
}


function getListaEsercenti($headers){
    require __DIR__ . '/../model/object.php';
    $r = getEsercenti();
    if(strpos($headers["Accept"], 'html') !== false){
    require __DIR__ . '/../view/listaEsercenti.php';
    view_es($r);}
    else { echo $r;};

}

function getListaQuestionari($headers){
    require __DIR__ . '/../model/object.php';
    $r = getQuestionari();
    if(strpos($headers["Accept"], 'html') !== false){
    require __DIR__ . '/../view/listaQuestionari.php';
    view_quest($r);}
    else { echo $r;};

}

function crea_questionario($headers){
    require __DIR__ . '/../view/creaQuestionario.php';
}


function postQualcosa(){
    var_dump($_POST);
    //Qui faccio qualcosa con il coso del post
    echo "<br/>ho fatto la post\n";
}

function postCreaQuestionario($headers){
    //var_dump($_POST);
    if (isset($_POST)) {
    require __DIR__ . '/../model/object.php';
    creaQuestionario($_POST['id_amministratore'],$_POST['nome'],$_POST['punti'],
                     $_POST['tempo_min'] ,$_POST['tempo_max']);
    }

}

?>