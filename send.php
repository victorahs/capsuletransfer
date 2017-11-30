<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">

    <title>Capsule Transfer - thk u</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="assets/font/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animationSend.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styleFooter.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styleSend.css">
    <script type="text/javascript"></script>

  </head>
  <script type="text/javascript">
  </script>

  <?php
      require '.init.php'; //nécésite la présence d'un fichier avec vos identifiants de BDD avec des variables constantes//
      include 'functions.php';
      $sql = connect();

      $info = Get_info($_REQUEST['Id_Folder'], $sql);



      $destinataire = $info['emailDesti']; //adresse du destinataire
      
  ?>


<body>
    <main>
        <!-- capsule -->
        <svg version="1.1" id="finalPageCapsule" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="1280.5 1480.5 3840 2160" enable-background="new 1280.5 1480.5 3840 2160"
             xml:space="preserve">
            <g id="capsuleFinal">
                <g id="vibrationCapsule">
                    <g>
                        <path fill="#E6E6E6" d="M3569.459,2367.553c-2.178-1.678-6.209-3.052-8.959-3.052h-720c-2.75,0-6.781,1.374-8.959,3.052
                            l-127.314,98.13c-2.178,1.679-3.96,5.302-3.96,8.052l-0.001,173.529c0,2.75,1.782,6.375,3.96,8.053l127.313,98.129
                            c2.178,1.68,6.211,3.053,8.961,3.053h720c2.75,0,6.78-1.373,8.959-3.053l127.314-98.129c2.178-1.68,3.961-5.303,3.961-8.053
                            v-173.529c0-2.75-1.783-6.374-3.961-8.052L3569.459,2367.553z"/>
                    </g>
                    <g>
                        <path fill="#019DE7" d="M2835.499,2762.342c0,2.75-1.746,3.58-3.879,1.844l-127.477-103.689c-2.134-1.734-3.879-5.404-3.879-8.154
                            l0.001-183.683c0-2.75,1.746-6.42,3.879-8.154l127.477-103.69c2.133-1.735,3.879-0.905,3.879,1.845L2835.499,2762.342z"/>
                    </g>
                    <g>
                        <path fill="#332E2D" d="M2862.252,2767.596c0,2.75-2.25,5-5,5H2838.5c-2.75,0-5-2.25-5-5v-414.189c0-2.75,2.25-5,5-5h18.752
                            c2.75,0,5,2.25,5,5V2767.596z"/>
                    </g>
                    <g>
                        <path fill="#019DE7" d="M3565.5,2358.659c0-2.75,1.746-3.58,3.879-1.845l127.478,103.69c2.133,1.734,3.879,5.404,3.879,8.154
                            v183.683c0,2.75-1.746,6.42-3.879,8.154l-127.478,103.689c-2.133,1.736-3.879,0.906-3.879-1.844V2358.659z"/>
                    </g>
                    <g opacity="0.2">
                        <path d="M3695.735,2563.584c2.75,0,5,2.25,5,5v86.84c0,2.75-1.746,6.42-3.879,8.154l-127.478,103.691
                            c-2.133,1.734-3.879,0.904-3.879-1.846v-196.842c0-2.75,2.25-5,5-5h125.235V2563.584z"/>
                    </g>
                    <g opacity="0.2">
                        <path d="M2705.267,2560.5c-2.75,0-5,2.25-5,5l-0.001,86.84c0,2.75,1.746,6.42,3.879,8.154l127.477,103.691
                            c2.133,1.734,3.879,0.904,3.879-1.846l0.001-196.842c0-2.75-2.25-5-5-5L2705.267,2560.5L2705.267,2560.5z"/>
                    </g>
                    <g>
                        <path fill="#332E2D" d="M3538.748,2353.405c0-2.75,2.25-5,5-5h18.752c2.75,0,5,2.25,5,5v414.189c0,2.75-2.25,5-5,5h-18.752
                            c-2.75,0-5-2.25-5-5V2353.405z"/>
                    </g>
                    <rect x="2862.252" y="2563.584" opacity="0.1" enable-background="new    " width="676.498" height="192.916"/>
                </g>
            </g>
        </svg>

        <!-- tube-->
        <svg version="1.1" id="finalPageTube" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
     y="0px" width="100%" height="100%" viewBox="0 0 3840 2160" enable-background="new 0 0 3840 2160" xml:space="preserve">
            <g id="tube">
                <rect x="-6312.832" y="848.294" opacity="0.5" fill="#FFFFFF" enable-background="new    " width="16465.666" height="241.483"/>
                <rect x="-6312.832" y="1089.777" fill="#666666" width="16465.666" height="241.309"/>
                <rect x="-6312.832" y="1186.235" opacity="0.2" enable-background="new    " width="16465.666" height="144.851"/>
            </g>
            <g id="jointL">
                <circle fill="#B3B3B3" cx="319.803" cy="1295.008" r="36.254"/>
                <path opacity="0.2" enable-background="new    " d="M356.058,1295.008c0,20.021-16.231,36.254-36.255,36.254
                    c-20.022,0-36.254-16.231-36.254-36.254"/>
                <circle fill="#B3B3B3" cx="319.803" cy="884.548" r="36.254"/>
                <circle fill="#B3B3B3" cx="319.803" cy="1021.368" r="36.254"/>
                <circle fill="#B3B3B3" cx="319.803" cy="1158.188" r="36.254"/>
                <path opacity="0.2" enable-background="new    " d="M356.058,1158.188c0,20.021-16.231,36.255-36.255,36.255
                    c-20.022,0-36.254-16.232-36.254-36.255"/>
                <path opacity="0.2" enable-background="new    " d="M356.058,1021.368c0,20.021-16.231,36.254-36.255,36.254
                    c-20.022,0-36.254-16.232-36.254-36.254"/>
                <path opacity="0.2" enable-background="new    " d="M356.058,884.548c0,20.021-16.231,36.254-36.255,36.254
                    c-20.022,0-36.254-16.231-36.254-36.254"/>
                <rect x="303.734" y="804.198" fill="#333333" width="71.995" height="571.159"/>
                <rect x="303.734" y="1158.188" opacity="0.2" enable-background="new    " width="73.661" height="217.171"/>
                <g>
                    <rect x="375.729" y="848.293" fill="#B3B3B3" width="18.652" height="72.158"/>
                    <rect x="375.729" y="872.454" opacity="0.2" enable-background="new    " width="18.652" height="24.159"/>
                    <rect x="375.729" y="896.613" opacity="0.3" enable-background="new    " width="18.652" height="23.839"/>
                </g>
                <g>
                    <rect x="375.729" y="985.29" fill="#B3B3B3" width="18.652" height="72.157"/>
                    <rect x="375.729" y="1009.449" opacity="0.2" enable-background="new    " width="18.652" height="24.16"/>
                    <rect x="375.729" y="1033.609" opacity="0.3" enable-background="new    " width="18.652" height="23.84"/>
                </g>
                <g>
                    <rect x="375.729" y="1122.109" fill="#B3B3B3" width="18.652" height="72.155"/>
                    <rect x="375.729" y="1146.268" opacity="0.2" enable-background="new    " width="18.652" height="24.16"/>
                    <rect x="375.729" y="1170.428" opacity="0.3" enable-background="new    " width="18.652" height="23.838"/>
                </g>
                <g>
                    <rect x="375.729" y="1258.928" fill="#B3B3B3" width="18.652" height="72.158"/>
                    <rect x="375.729" y="1283.088" opacity="0.2" enable-background="new    " width="18.652" height="24.162"/>
                    <rect x="375.729" y="1307.25" opacity="0.3" enable-background="new    " width="18.652" height="23.838"/>
                </g>
            </g>
            <g id="jointD">
                <circle fill="#B3B3B3" cx="3529.161" cy="1285.229" r="36.254"/>
                <path opacity="0.2" enable-background="new    " d="M3565.416,1285.229c0,20.021-16.23,36.254-36.255,36.254
                    c-20.022,0-36.255-16.231-36.255-36.254"/>
                <circle fill="#B3B3B3" cx="3529.161" cy="874.77" r="36.254"/>
                <circle fill="#B3B3B3" cx="3529.161" cy="1011.59" r="36.254"/>
                <circle fill="#B3B3B3" cx="3529.161" cy="1148.41" r="36.254"/>
                <path opacity="0.2" enable-background="new    " d="M3565.416,1148.409c0,20.021-16.23,36.255-36.255,36.255
                    c-20.022,0-36.255-16.232-36.255-36.255"/>
                <path opacity="0.2" enable-background="new    " d="M3565.416,1011.59c0,20.021-16.23,36.254-36.255,36.254
                    c-20.022,0-36.255-16.232-36.255-36.254"/>
                <path opacity="0.2" enable-background="new    " d="M3565.416,874.77c0,20.021-16.23,36.254-36.255,36.254
                    c-20.022,0-36.255-16.231-36.255-36.254"/>
                <rect x="3513.093" y="794.42" fill="#333333" width="71.995" height="571.159"/>
                <rect x="3513.093" y="1148.409" opacity="0.2" enable-background="new    " width="73.661" height="217.171"/>
                <g>
                    <rect x="3585.088" y="838.515" fill="#B3B3B3" width="18.652" height="72.158"/>
                    <rect x="3585.088" y="862.676" opacity="0.2" enable-background="new    " width="18.652" height="24.159"/>
                    <rect x="3585.088" y="886.835" opacity="0.3" enable-background="new    " width="18.652" height="23.839"/>
                </g>
                <g>
                    <rect x="3585.088" y="975.512" fill="#B3B3B3" width="18.652" height="72.157"/>
                    <rect x="3585.088" y="999.671" opacity="0.2" enable-background="new    " width="18.652" height="24.16"/>
                    <rect x="3585.088" y="1023.831" opacity="0.3" enable-background="new    " width="18.652" height="23.84"/>
                </g>
                <g>
                    <rect x="3585.088" y="1112.331" fill="#B3B3B3" width="18.652" height="72.155"/>
                    <rect x="3585.088" y="1136.489" opacity="0.2" enable-background="new    " width="18.652" height="24.16"/>
                    <rect x="3585.088" y="1160.649" opacity="0.3" enable-background="new    " width="18.652" height="23.838"/>
                </g>
                <g>
                    <rect x="3585.088" y="1249.149" fill="#B3B3B3" width="18.652" height="72.158"/>
                    <rect x="3585.088" y="1273.31" opacity="0.2" enable-background="new    " width="18.652" height="24.162"/>
                    <rect x="3585.088" y="1297.472" opacity="0.3" enable-background="new    " width="18.652" height="23.838"/>
                </g>
            </g>
            </svg>


        <header>

          <div class="color"></div>
          <h1>Capsule Transfer</h1>
          <h2>Your file has been loaded</h2>



        </header>

        <div id="mainFinal">
          <div >
            <p class="text">Find your capsule here : </p>
            <input type="text" class="inputUrl" value="<?php echo getUrlPageFile($info);?>">
          </div>

          <div class="text textBasMarge">
              <p>An email has been send to : <?php echo $destinataire; ?></p>
              <p>Thank you for using Capsule Transfer.</p>
          </div>

          <div>

            <!-- bouton HOME -->
            <a class="btnClassic opacity"  href="index.php">More files to send?</a>
          </div>

        </div>


        <footer>
            <?php include('footer.php'); ?>
        </footer>
    </main>

    <script>


    </script>
</body>
</html>
