<?php
    $page_title = 'Crea Questionario';
    include("../headfoot/header.php");
    ?>

<div class="page-header"><h1>Aggiungi Questionario</h1></div>
<form class="form-horizontal" enctype="multipart/form-data" action="/creaQuestionario" method="post">


    <div class="form-group">
        <label class="control-label col-sm-2">ID Admin:</label>
        <div class="col-sm-10">
            <input class="form-control" type="number" name="id_amministratore" min="1" max="4" placeholder="0-4" value="">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Nome:</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="nome" size="15" maxlength="40" value="">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Punti:</label>
        <div class="col-sm-10">
            <input class="form-control" type="number" name="punti" min="1" max="999" placeholder="0-999" value="">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Tempo minimo:</label>
        <div class="col-sm-10">
            <input class="form-control" type="number" name="tempo_min" min="1" max="30" placeholder="1-30" value="">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Tempo massimo:</label>
        <div class="col-sm-10">
            <input class="form-control" type="number" name="tempo_max" min="31" max="199" placeholder="31-199" value="">
        </div>
    </div>


    <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="aggiungi" value="Aggiungi">Crea</button>
            </div>
        </div>
</form>

<?php // Include the footer and quit the script:
include('../headfoot/footer.php');
?>