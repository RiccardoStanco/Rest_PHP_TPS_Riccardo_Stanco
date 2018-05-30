<?php

function view_quest($r)
{
    $page_title = 'Visualizza questionari';

    include("../headfoot/header.php");


// Page header:


    echo '<h1>Questionari registrati</h1>'; ?>


    <!--Inizio listaEsercenti-->

    <style>

        @-webkit-keyframes hvr-pulse {
            25% {
                -webkit-transform: scale(1.1);
                transform: scale(1.1);
            }
            75% {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }
        }

        @keyframes hvr-pulse {
            25% {
                -webkit-transform: scale(1.1);
                transform: scale(1.1);
            }
            75% {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }
        }

        .hvr-pulse {
            display: inline-block;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-animation-name: hvr-pulse;
            animation-name: hvr-pulse;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            -webkit-animation-iteration-count: 3;
            animation-iteration-count: 3;
        }



        .demo-card-image > .mdl-card__actions {
            height: 52px;
            padding: 16px;
            background: rgba(0, 0, 0, 0.25);
        }

        .demo-card-image__filename {
            color: #fff;
            font-weight: 500;
        }

        .listaformat {
            margin: 16px 0 16px 16px;
        }

        .emptylist {
            font-size: 24px;
            color: rgba(0, 0, 0, 0.7);
            border: 2px solid rgb(63, 81, 181);
            border-radius: 8px;
            padding: 16px;
            margin: 16px;
            text-align: center;
            background-color: rgba(63, 81, 181, 0.2);
        }

    </style>


    <!--Fine listaEsercenti-->


    <?php



    echo '<table width="60%">
    <thead>
    <tr>

        <th align="left"><strong>ID Questionario</strong></th>
        <th align="left"><strong>ID Admin</strong></th>
        <th align="left"><strong>Nome</strong></th>
        <th align="left"><strong>Punti</strong></th>
        <th align="left"><strong>Tempo min</strong></th>
        <th align="left"><strong>Tempo max</strong></th>
        
    </tr>
    </thead>
    <tbody>
    ';

    // Fetch and print all the records....
    $bg = '#eeeeee';
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        $bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
        echo '<tr bgcolor="' . $bg . '">


        <td align="left">' . $row['id_questionario'] . '</td>
        <td align="left">' . $row['id_amministratore'] . '</td>
        <td align="left">' . $row['nome'] . '</td>
        <td align="left">' . $row['punti'].'</td>
        <td align="left">' . $row['tempo_min'].'</td>
        <td align="left">' . $row['tempo_max'].'</td>
       
    </tr>

    ';}?>

    <?php
    include("../headfoot/footer.php");}?>