<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beispiel mit oben fixierter Navbar für Bootstrap</title>

    <!-- Bootstrap-CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Besondere Stile für diese Vorlage -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixierte Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Navigation ein-/ausblenden</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Projekt-Titel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Start</a></li>
            <li><a href="#ueber">Über</a></li>
            <li><a href="#kontakt">Kontakt</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown-Menü <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Aktion</a></li>
                <li><a href="#">Andere Aktion</a></li>
                <li><a href="#">Irgendwas anderes</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav-Überschrift</li>
                <li><a href="#">Abgetrennter Link</a></li>
                <li><a href="#">Noch ein abgetrennter Link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Standard</a></li>
            <li><a href="../navbar-static-top/">Oben statisch</a></li>
            <li class="active"><a href="./">Oben fixiert <span class="sr-only">(aktuell)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Hauptkomponente für eine primäre Marketing-Botschaft oder einen Aufruf zu einer Aktion -->
      <div class="jumbotron">
        <h1>Navbar-Beispiel</h1>
        <p>Dieses Beispiel ist eine schnelle Übung, um zu zeigen, wie die Standard-Navbar, die statische und die oben fixierte Navbar funktionieren. Es enthält responsives CSS und HTML, passt sich also der Breite deines Bildschirms oder Browser-Fensters an.</p>
        <p>Um den Unterschied zwischen statischen und oben fixierten Navbars zu sehen, scrolle einfach etwas nach unten und vergleiche das Ergebnis.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../komponenten/#navbar" role="button">Sieh dir die Dokumentation für Navbars an &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap-JavaScript
    ================================================== -->
    <!-- Am Ende des Dokuments platziert, damit Seiten schneller laden -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10-Anzeigefenster-Hack für Fehler auf Surface und Desktop-Windows-8 -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
