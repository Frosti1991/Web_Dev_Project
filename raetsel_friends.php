<?php
$name = $_GET["name"];
$typ = $_GET["typ"];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Bootstrap Icons-Stylesheet
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/app_self.css">



    <title>Rätsel Friendows</title>
</head>

<body>

    <nav id="mainNavbar" class="navbar navbar-dark  navbar-expand-md py-0 sticky-top">
        <a href="index_friends.html" class="navbar-brand">START</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLinks"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item dropdown show">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RÄTSEL</a>
                    <ul class="dropdown-menu text-start border-0 p-0" aria-labelledby="navbarDropdown">
                        <a href="#Rätsel1" class="dropdown-item">Rätsel #1</a>
                        <a href="#Rätsel2" class="dropdown-item">Rätsel #2</a>
                        <a href="#Rätsel3" class="dropdown-item">Rätsel #3</a>
                        <a href="#Rätsel4" class="dropdown-item">Rätsel #4</a>
                        <a href="#Rätsel5" class="dropdown-item">Rätsel #5</a>
                        <a href="#Rätsel6" class="dropdown-item">Rätsel #6</a>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#Loesung" class="nav-link">LÖSUNG</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="container-fluid">
        <div class="row align-items-center justify-content-center text-center mt-5">
            <div class="col-10 py-1 inhalt">
                <h1>WAS GEHT AAAAAAB????</h1>
                <p>Sehr schön! Du bist am Start und hast Bock auf die geilste Party des Jahres. Es wird auch die einzige
                    sein! Danke Merkel. Aber vorab müsstest du leider ein paar Fragen beantworten, bevor du deine
                    Einladung erhältst...</p>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="row justify-content-center text-center ">
            <div class=" col-8 col-sm-5 col-xl-2 border intro m-2">
                <div class="row h-100 ">
                    <div class="col my-auto">
                        <div class="py-2"> <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%"
                                fill="currentColor" class=" bi bi-question-square text-white" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                            </svg>
                        </div>
                        <div class="py-2">
                            <p> Löst die Rätsel mit Hilfe der Hinweise</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-8 col-sm-5 col-xl-2  border m-2 intro">
                <div class="row h-100">
                    <div class="col my-auto">
                        <div class="py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor"
                                class="bi bi-stoplights" viewBox="0 0 16 16">
                                <path
                                    d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm1.5 2.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                <path
                                    d="M4 2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v1a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-1c-1.2-.4-1.833-1.5-2-2h2V8c-1.2-.4-1.833-1.5-2-2h2V4c-1.2-.4-1.833-1.5-2-2h2zm2-1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6z" />
                            </svg>
                        </div>
                        <div class="py-2">
                            <p>Eingabefeld grün?</p>
                            <p>Lösungsbuchstabe erscheint</p>

                        </div>
                    </div>
                </div>


            </div>
            <div class="col-8 col-sm-5 col-xl-2 border m-2 intro">
                <div class="row h-100">
                    <div class="col my-auto">
                        <div class="py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor"
                                class="bi bi-puzzle" viewBox="0 0 16 16">
                                <path
                                    d="M3.112 3.645A1.5 1.5 0 0 1 4.605 2H7a.5.5 0 0 1 .5.5v.382c0 .696-.497 1.182-.872 1.469a.459.459 0 0 0-.115.118.113.113 0 0 0-.012.025L6.5 4.5v.003l.003.01c.004.01.014.028.036.053a.86.86 0 0 0 .27.194C7.09 4.9 7.51 5 8 5c.492 0 .912-.1 1.19-.24a.86.86 0 0 0 .271-.194.213.213 0 0 0 .039-.063v-.009a.112.112 0 0 0-.012-.025.459.459 0 0 0-.115-.118c-.375-.287-.872-.773-.872-1.469V2.5A.5.5 0 0 1 9 2h2.395a1.5 1.5 0 0 1 1.493 1.645L12.645 6.5h.237c.195 0 .42-.147.675-.48.21-.274.528-.52.943-.52.568 0 .947.447 1.154.862C15.877 6.807 16 7.387 16 8s-.123 1.193-.346 1.638c-.207.415-.586.862-1.154.862-.415 0-.733-.246-.943-.52-.255-.333-.48-.48-.675-.48h-.237l.243 2.855A1.5 1.5 0 0 1 11.395 14H9a.5.5 0 0 1-.5-.5v-.382c0-.696.497-1.182.872-1.469a.459.459 0 0 0 .115-.118.113.113 0 0 0 .012-.025L9.5 11.5v-.003a.214.214 0 0 0-.039-.064.859.859 0 0 0-.27-.193C8.91 11.1 8.49 11 8 11c-.491 0-.912.1-1.19.24a.859.859 0 0 0-.271.194.214.214 0 0 0-.039.063v.003l.001.006a.113.113 0 0 0 .012.025c.016.027.05.068.115.118.375.287.872.773.872 1.469v.382a.5.5 0 0 1-.5.5H4.605a1.5 1.5 0 0 1-1.493-1.645L3.356 9.5h-.238c-.195 0-.42.147-.675.48-.21.274-.528.52-.943.52-.568 0-.947-.447-1.154-.862C.123 9.193 0 8.613 0 8s.123-1.193.346-1.638C.553 5.947.932 5.5 1.5 5.5c.415 0 .733.246.943.52.255.333.48.48.675.48h.238l-.244-2.855zM4.605 3a.5.5 0 0 0-.498.55l.001.007.29 3.4A.5.5 0 0 1 3.9 7.5h-.782c-.696 0-1.182-.497-1.469-.872a.459.459 0 0 0-.118-.115.112.112 0 0 0-.025-.012L1.5 6.5h-.003a.213.213 0 0 0-.064.039.86.86 0 0 0-.193.27C1.1 7.09 1 7.51 1 8c0 .491.1.912.24 1.19.07.14.14.225.194.271a.213.213 0 0 0 .063.039H1.5l.006-.001a.112.112 0 0 0 .025-.012.459.459 0 0 0 .118-.115c.287-.375.773-.872 1.469-.872H3.9a.5.5 0 0 1 .498.542l-.29 3.408a.5.5 0 0 0 .497.55h1.878c-.048-.166-.195-.352-.463-.557-.274-.21-.52-.528-.52-.943 0-.568.447-.947.862-1.154C6.807 10.123 7.387 10 8 10s1.193.123 1.638.346c.415.207.862.586.862 1.154 0 .415-.246.733-.52.943-.268.205-.415.39-.463.557h1.878a.5.5 0 0 0 .498-.55l-.001-.007-.29-3.4A.5.5 0 0 1 12.1 8.5h.782c.696 0 1.182.497 1.469.872.05.065.091.099.118.115.013.008.021.01.025.012a.02.02 0 0 0 .006.001h.003a.214.214 0 0 0 .064-.039.86.86 0 0 0 .193-.27c.14-.28.24-.7.24-1.191 0-.492-.1-.912-.24-1.19a.86.86 0 0 0-.194-.271.215.215 0 0 0-.063-.039H14.5l-.006.001a.113.113 0 0 0-.025.012.459.459 0 0 0-.118.115c-.287.375-.773.872-1.469.872H12.1a.5.5 0 0 1-.498-.543l.29-3.407a.5.5 0 0 0-.497-.55H9.517c.048.166.195.352.463.557.274.21.52.528.52.943 0 .568-.447.947-.862 1.154C9.193 5.877 8.613 6 8 6s-1.193-.123-1.638-.346C5.947 5.447 5.5 5.068 5.5 4.5c0-.415.246-.733.52-.943.268-.205.415-.39.463-.557H4.605z" />
                            </svg>
                        </div>
                        <div class="py-2">
                            <p>Alle Lösungsbuchstaben zusammen ergeben das Lösungswort. Die Reihenfolge müsst ihr selbst
                                rausfinden!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 col-sm-5 col-xl-2 border m-2 intro">
                <div class="row h-100">
                    <div class="col my-auto">
                        <div class="py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor"
                                class="bi bi-pencil" viewBox="0 0 16 16">
                                <path
                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                        </div>
                        <div class="py-2"><a href="#Loesung" style="color:black">HIER</a> euren Lösungsvorschlag
                            eingeben und absenden!
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container-fluid px-0">
        <div class="row align-items-center ZeileContent ">
            <div class="col-xl-6 order-2 order-xl-1 text-center ">
                <img class="img-fluid  " src="imgs/soccer.jfif" alt="Soccer">

            </div>
            <div class="col-xl-6 text-center order-1 order-xl-2">
                <div class="row justify-content-center">
                    <div class="col-10  inhalt mb-5 ">
                        <h1 id="Rätsel1">Rätsel#1</h1>
                        <p>Schon seit vielen Jahren bin ich Fußball-Freund. Derzeit kann man weder live im Stadion
                            durchdrehen und 34 Bier trinken, noch kann man sonst so richtig zufrieden sein, wie sich
                            "König Fußball" während der Pandemie und seiner Selbstwahrnehmung präsentiert. Dennoch
                            schlägt mein Herzchen vor allem für einen Verein.
                        </p>
                        <p> <b>Wie ist der Name des Vereins?</b> <i>(6 Buchstaben, 1. von 2 Wörtern)</i> </p>
                        <div class="row justify-content-center align-items-center m-0">
                            <div class="col-12   col-xl-12 py-1">
                                <div class="input-group input-group-lg">
                                    <label for="Antwort1" class="input-group-text ">Antwort#1</label>
                                    <input type="text" class="form-control solution_try " aria-label="With textarea"
                                        id="Antwort1" placeholder="NAAAAAAA?!">
                                </div>
                            </div>
                            <div class="col-12 col-md-4  col-xl-12 py-1">
                                <div class="input-group input-group-lg">
                                    <label for="Buchstabe1" class="input-group-text ">Buchstabe#1</label>
                                    <input type="text" class="form-control solution" aria-label="Disabled input example"
                                        disabled id="Buchstabe1">
                                </div>
                            </div>

                            <div class="col-12 col-md-8 col-xl-12 py-1">
                                <div class="accordion justify-content-start" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header mb-0" id="headingOne">
                                            <button class="accordion-button btn-outline-primary btn-sm collapsed "
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-controls="collapseOne">
                                                Hinweis#1
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body row align-items-center m-0 p-0">
                                                <div class="col-12 col-lg-6">

                                                    <img class="img-fluid blinki" src="imgs/dynamo.png" alt="Soccer">
                                                </div>

                                                <div class="col-12 col-lg-6 mb-1 mb-lg-0 ">

                                                    <span class="dynamo">Licht</span> am Fahrrad, <span
                                                        class="dynamo">Licht</span> am Fahrrad,
                                                    ......!

                                                    </div-col-4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>


                </div>
    </section>

    <section class="container-fluid px-0">
        <div class="row align-items-center ZeileContent ">
            <div class="col-xl-6 order-2 order-xl-2 text-center ">
                <img class="img-fluid  " src="imgs/Auszug_Gröbel2.jpg" alt="Gröbel14">

            </div>
            <div class="col-xl-6 text-center order-1 order-xl-1">
                <div class="row justify-content-center">
                    <div class="col-10  inhalt mb-5 ">
                        <h1 id="Rätsel2">Rätsel#2</h1>
                        <p>Das Feiern liegt mir bekanntlich auch am Herz. Und das ist gut so. Im Nachhinein sind dadurch
                            viele schicke Geschichten entstanden. Und ja, ich
                            stehe zu meiner Eitelkeit... es war mir schon wichtig, dass es gern ein bisschen arg
                            übertrieben zuging und war auch über nachträgliches Lob höchsterfreut :D. Anbei das
                            "Nachher"-Bild zu meiner Auszugsparty in Dresden,
                            Gröbelstraße 14. Alle, die dabei waren, erinnern sich hoffentlich noch... Die Party diente
                            vor allem dazu, mir den Weg zum Wertstoffhof zu ersparen, weshalb kurzerhand alle vorab
                            gekennzeichneten Möbel und Gegenstände aus dem Fenster geflogen sind. Geil. Aber auch bitter
                            :D
                        </p>
                        <p> <b>Welches Gerät fand durch eine diverse Eigendynamik eher unerwartet seinen Weg nach
                                unten?</b> <i>(9
                                Buchstaben)</i> </p>
                        <div class="row justify-content-center align-items-center m-0">
                            <div class="col-12   col-xl-12 py-1">
                                <div class="input-group input-group-lg">
                                    <label for="Antwort2" class="input-group-text ">Antwort#2</label>
                                    <input type="text" class="form-control solution_try " aria-label="With textarea"
                                        id="Antwort2" placeholder="UND?!">
                                </div>
                            </div>
                            <div class="col-12 col-md-4  col-xl-12 py-1">
                                <div class="input-group input-group-lg">
                                    <label for="Buchstabe2" class="input-group-text ">Buchstabe#2</label>
                                    <input type="text" class="form-control solution" aria-label="Disabled input example"
                                        disabled id="Buchstabe2">
                                </div>
                            </div>

                            <div class="col-12 col-md-8 col-xl-12 py-1">
                                <div class="accordion justify-content-start" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header mb-0" id="headingTwo">
                                            <button class="accordion-button btn-outline-primary btn-sm collapsed "
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-controls="collapseOne">
                                                Hinweis#2
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body row align-items-center m-0 p-0">
                                                <div class="col-12 ">
                                                    <video src="imgs/Auszug_Gröbel_2014.mp4" controls></video>

                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>


                </div>
    </section>

    <section class="container-fluid px-0">
        <div class="row align-items-center ZeileContent ">
            <div class="col-xl-6 order-2 order-xl-1 text-center ">
                <img class="img-fluid  " src="imgs/polotik.jfif" alt="Soccer">

            </div>
            <div class="col-xl-6 text-center order-1 order-xl-2">
                <div class="row justify-content-center">
                    <div class="col-10  inhalt mb-5 ">
                        <h1 id="Rätsel3">Rätsel#3</h1>
                        <p>Von Zeit zu Zeit liebe ich es ja zu diskutieren und bin der Meinung, sehr vieles sehr viel
                            besser zu wissen. Hmmmmm... das ist sympathisch :D Am Ende stellt man allzu gern fest, dass
                            es sich innerhalb der eigenen Blase viel entspannter Leben lässt. Genau diesem Impuls habe
                            ich mit zunehmendem Alter und mangelnder Scharfsinnigkeit nachgegeben und bin in eine Partei
                            eingetreten, um mir schön permanent die eigene Meinung bejahend um die Ohren ballern zu
                            lassen.
                            Nur bei der Hömopathie geh ich nicht mit. Die spinnen doch.
                        </p>
                        <p> <b>Wie ist die Farbe der Partei, in der ich seit Dezember 2019 Mitglied bin?</b> <i>(4
                                Buchstaben)</i> </p>
                        <div class="row justify-content-center align-items-center m-0">
                            <div class="col-12   col-xl-12 py-1">
                                <div class="input-group input-group-lg">
                                    <label for="Antwort3" class="input-group-text ">Antwort#3</label>
                                    <input type="text" class="form-control solution_try " aria-label="With textarea"
                                        id="Antwort3" placeholder="LOS JETZT!!!">
                                </div>
                            </div>
                            <div class="col-12 col-md-4  col-xl-12 py-1">
                                <div class="input-group input-group-lg">
                                    <label for="Buchstabe3" class="input-group-text ">Buchstabe#3</label>
                                    <input type="text" class="form-control solution" aria-label="Disabled input example"
                                        disabled id="Buchstabe3">
                                </div>
                            </div>

                            <div class="col-12 col-md-8 col-xl-12 py-1">
                                <div class="accordion justify-content-start" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header mb-0" id="headingThree">
                                            <button class="accordion-button btn-outline-primary btn-sm collapsed "
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-controls="collapseThree">
                                                Hinweis#3
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body row align-items-center m-0 p-0">
                                                <div class="col-12   text-center">

                                                    <p> <b>LINKS _ _ _ _ VERSIFFT!</b> </p>

                                                    </div-col-4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>


                </div>
    </section>
    <section class="container-fluid px-0">
        <div class="row align-items-center ZeileContent ">
            <div class="col-xl-6 order-2 order-xl-2 text-center ">
                <img class="img-fluid  " src="imgs/oberlosa.jpg" alt="Soccer">

            </div>
            <div class="col-xl-6 text-center order-1 order-xl-1">
                <div class="row justify-content-center">
                    <div class="col-10  inhalt mb-5 ">
                        <h1 id="Rätsel4">Rätsel#4</h1>
                        <p>Neben Sport anschauen, bewege ich mich auch selbst ganz gern. Und dabei immer tänzerisch und
                            feenhaft. Zwar kann ich bis heute keinen Kopfstand ohne Schädelhirntrauma, aber davon kann
                            man sich am Ende auch nichts kaufen. Ihr Loser! Viel wichtiger als sich Sachen zu kaufen,
                            ist eher die Tatsache, dass mir mein jahrelanges Sporttreiben im Verein viele geile Momente,
                            sozialen Halt und vor allem viele sexy Freunde beschert hat. Geilo!
                        </p>
                        <p> <b>Doch welchen Sport treibe ich eigentlich seit mittlerweile 23 Jahren?</b> <i>(8
                                Buchstaben)</i> </p>
                        <div class="row justify-content-center align-items-center m-0">
                            <div class="col-12   col-xl-12 py-1">
                                <div class="input-group input-group-lg">
                                    <label for="Antwort4" class="input-group-text ">Antwort#4</label>
                                    <input type="text" class="form-control solution_try " aria-label="With textarea"
                                        id="Antwort4" placeholder="GEIL!">
                                </div>
                            </div>
                            <div class="col-12 col-md-4  col-xl-12 py-1">
                                <div class="input-group input-group-lg">
                                    <label for="Buchstabe4" class="input-group-text ">Buchstabe#4</label>
                                    <input type="text" class="form-control solution" aria-label="Disabled input example"
                                        disabled id="Buchstabe4">
                                </div>
                            </div>

                            <div class="col-12 col-md-8 col-xl-12 py-1">
                                <div class="accordion justify-content-start" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header mb-0" id="headingFour">
                                            <button class="accordion-button btn-outline-primary btn-sm collapsed "
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-controls="collapseFour">
                                                Hinweis#4
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body row align-items-center m-0 p-0">

                                                <div class="col-12">

                                                    <p><b>Brauchst du dafür wirklich einen Hinweis??? MAN!</b></p>

                                                    </div-col-4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>


                </div>
    </section>
    <section class="container-fluid px-0">
        <div class="row align-items-center ZeileContent ">
            <div class="col-xl-6 order-2 order-xl-1 text-center ">
                <img class="img-fluid  " src="imgs/blumentopf.jpg" alt="Konzert">

            </div>
            <div class="col-xl-6 text-center order-1 order-xl-2">
                <div class="row justify-content-center">
                    <div class="col-10  inhalt mb-5 ">
                        <h1 id="Rätsel5">Rätsel#5</h1>
                        <p>Musik höre ich gern und viel. Wenn ich nicht gerade zum zeitlosen 80er-Sound nackt durch die
                            Wohnung tanze, gönne ich mir auch gern die dopesten, freshesten, fettesten, lässigsten,
                            realsten und vor allem tightesten Lines, die das HipHop-Business zu bieten hat. Und das vor
                            allem deutsch, denn ich kann kein englisch. Wack Shit meinerseits! Hier immer
                            wichtig: Street Credibility! Sonst kann man mich als derben Oldschooler nicht von seinen
                            Hooks convincen ey! Dann gibt´s Beef und keine Probs! Das Bild zeigt das Abschiedskonzert
                            meiner Lieblings-Crew in
                            München im Oktober 2016!

                        </p>
                        <p> <b>Viel wichtiger als die Show sind aber am Ende doch die Texte. Welche deutsche
                                HipHop-Kapelle
                                gehört zu meinen absoluten Favoriten?</b> <i>(10 Buchstaben)</i> </p>
                        <div class="row justify-content-center align-items-center m-0">
                            <div class="col-12   col-xl-12 py-1">
                                <div class="input-group input-group-lg">
                                    <label for="Antwort5" class="input-group-text ">Antwort#5</label>
                                    <input type="text" class="form-control solution_try " aria-label="With textarea"
                                        id="Antwort5" placeholder="GEIL!">
                                </div>
                            </div>
                            <div class="col-12 col-md-4  col-xl-12 py-1">
                                <div class="input-group input-group-lg">
                                    <label for="Buchstabe5" class="input-group-text ">Buchstabe#5</label>
                                    <input type="text" class="form-control solution" aria-label="Disabled input example"
                                        disabled id="Buchstabe5">
                                </div>
                            </div>

                            <div class="col-12 col-md-8 col-xl-12 py-1">
                                <div class="accordion justify-content-start" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header mb-0" id="headingFive">
                                            <button class="accordion-button btn-outline-primary btn-sm collapsed "
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                aria-controls="collapseFive">
                                                Hinweis#5
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse"
                                            aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body row align-items-center m-0 p-0">
                                                <div class="col-12 ">

                                                    <img class=" img-fluid " src="imgs/blumentopf.gif" alt="hiphop">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>


                </div>
    </section>
    <section class="container-fluid px-0">
        <div class="row align-items-center ZeileContent ">
            <div class="col-xl-6 order-2 order-xl-2 text-center ">
                <img class="img-fluid  " src="imgs/canada.JPG" alt="Soccer">

            </div>
            <div class="col-xl-6 text-center order-1 order-xl-1">
                <div class="row justify-content-center">
                    <div class="col-10  inhalt mb-5 ">
                        <h1 id="Rätsel6">Rätsel#6</h1>
                        <p>Reisen fetzt und macht Laune. So richtig gemerkt habe ich das allerdings erst im zarten Alter
                            von 23 bzw. 24. In 2015 habe ich 5 Monate im Ausland verbracht. Zunächst geWORKt mit meinem
                            geilen Richard, anschließend geTRAVELet mit der herrlichen Luise. Eine geile Zeit, an die
                            ich immer wieder gern zurück denke!
                        </p>
                        <p> <b>In welchem Land fand mein Aufenthalt statt?</b> <i>(6 Buchstaben, englische
                                Schreibweise)</i> </p>
                        <div class="row justify-content-center align-items-center m-0">
                            <div class="col-12   col-xl-12 py-1">
                                <div class="input-group input-group-lg">
                                    <label for="Antwort6" class="input-group-text ">Antwort#6</label>
                                    <input type="text" class="form-control solution_try " aria-label="With textarea"
                                        id="Antwort6" placeholder="GEIL!">
                                </div>
                            </div>
                            <div class="col-12 col-md-4  col-xl-12 py-1">
                                <div class="input-group input-group-lg">
                                    <label for="Buchstabe6" class="input-group-text ">Buchstabe#6</label>
                                    <input type="text" class="form-control solution" aria-label="Disabled input example"
                                        disabled id="Buchstabe6">
                                </div>
                            </div>

                            <div class="col-12 col-md-8 col-xl-12 py-1">
                                <div class="accordion justify-content-start" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header mb-0" id="headingSix">
                                            <button class="accordion-button btn-outline-primary btn-sm collapsed "
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                aria-controls="collapseSix">
                                                Hinweis#6
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse"
                                            aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                            <div class="accordion-body row align-items-center m-0 p-0">
                                                <div class="col-6 text-center ">
                                                    <img src="http://i0.wp.com/www.eishockeyderbestesport.de/wp-content/uploads/2015/07/body-check-fail.gif?resize=600%2C469"
                                                        alt=" eishockey">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>


                </div>
    </section>
    <section class="container-xl border border-5 my-3 loesung">
        <div class="row align-items-center mt-2 ">

            <div class="col-xl-12 text-center order-1 order-xl-1">
                <div class="row justify-content-center">
                    <div class="col-10  inhalt py-2">
                        <h1>Lösung</h1>
                        <p style="color: white">Gib deine Lösung ein und bestätige mit dem "Absenden"-Button. Viel
                            Glück!
                        </p>
                    </div>

                    <div class="col-10 col-sm-6 mb-3 py-1">
                        <form id="check" action= <?php echo 'php/riddle_handler.php?name='.$name.'&typ='.$typ; ?> method="POST"
                            class="input-group input-group-lg">
                            <input type="text" class="form-control" aria-label="With textarea" id="Loesung"
                                name="riddle" placeholder="GEIL!">
                            <button class="input-group-text" type="submit">Absenden</button>
                        </form>
                    </div>

                </div>
    </section>
    <section class="container-fluid footer p-3 border-top border-white ">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-md-4 text-xl-start "> Designed by Chrissi</div>
            <div class="col-md-4 "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z" />
                </svg>

            </div>
            <div class="col-md-4 "> Powered by Tom Ziegler and Chrissi</div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>
    <script src="js/vendor.js"></script>
    <script src="js/bootstrap_tom.js"></script>
    <script src="js/app_tom.js"></script>
    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>
</body>

</html>