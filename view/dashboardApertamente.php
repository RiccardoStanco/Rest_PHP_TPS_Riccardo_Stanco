<?php

function view_dashboard($r)
{
    $page_title = 'Dashboard';
    include("../headfoot/header.php");
    ?>

    <!--Inizio dashboardApertamente-->

    <style>

        .demo-card-wide > .mdl-card__title {
            color: #fff;
            background-color: rgb(63, 81, 181);
        }

        .demo-card-wide.mdl-card {
            width: 512px;
            margin: auto;
            margin-top: 0;
        }

        .dashboard {
            display: flex;
            margin: 10% auto;
        }

        .demo-list-two {
            width: auto;
            margin: 0;
            padding: 0;
        }

        .mdl-button {
            color: white;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0;
            cursor: pointer;
            text-align: center;
            line-height: 36px;
        }

        .mdl-list__item-avatar, .mdl-list__item-avatar.material-icons {
            height: 40px;
            width: 40px;
            box-sizing: border-box;
            border-radius: 0;
            background-color: transparent;
            font-size: 40px;
            color: grey;
        }

        .mdl-card__supporting-text {
            color: rgba(0, 0, 0, .54);
            font-size: 1rem;
            line-height: 18px;
            overflow: hidden;
            padding: 16px 0;
            width: auto;
        }

        .mdl-list__item {
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: .04em;
            line-height: 1;
            min-height: 48px;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            padding: 16px 32px;
            cursor: default;
            color: rgba(0, 0, 0, .87);
            overflow: hidden;
        }

        li.questlist:hover {
            background-color: rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .emptylist {
            margin: 16px;
            font-size: large;
        }

    </style>

    <div class="dashboard">

        <!--Card per grafici sommativi-->
        <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin-right: 5%;">
            <div class="mdl-card__title" style="height: 150px;">
                <h2 class="mdl-card__title-text">Rettangolo blu random</h2>
                <img src="../immaginebella.jpg">
            </div>


        </div>

        <!--Card per ultimi questionari (ordinati per data creazione)-->
        <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin-left: 5%;">
            <div class="mdl-card__title" style="height: 150px;">
                <h2 class="mdl-card__title-text">Ultimi questionari creati</h2>
            </div>
            <div class="mdl-card__supporting-text">

                <ul class="demo-list-two mdl-list">

                    <?php


                    if ($r == null) {
                        echo '<div class="emptylist">Lista vuota!</div>';
                    } else {
                        foreach ($r as $questionario) {
                            echo '<li class="mdl-list__item mdl-list__item--two-line questlist"
                    onclick="location.href = \'grafici.php?id=' . $questionario['id_questionario'] . '\'">
                        <span class="mdl-list__item-primary-content">
                           
                            <span><strong> NOME:</strong> ' . $questionario['nome'] . '</span>
                             <span><strong> PUNTI:</strong> ' . $questionario['punti'] . '</span>
                            
                            
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <div class="mdl-list__item-secondary-action">
                        </span>
                </li>';
                        }

                    }

                    ?>

                </ul>

            </div>




    </div>

    <!--Fine dashboardApertamente-->

    <?php
    include("../headfoot/footer.php");
}?>
