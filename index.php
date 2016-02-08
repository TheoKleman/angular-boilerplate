<!DOCTYPE html>
    <html lang="fr" ng-app="app" ng-controller="mainCtrl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <base href="/">

        <title ng-bind="pageTitle">Angular Base</title>

        <meta name="description" content="" />

        <!-- FAVICON -->
        <link rel="icon" href="../assets/img/favicon.png" type="image/png">

        <!-- CSS -->
        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        
        <!-- JS -->
        <script src="../assets/js/dist/vendors.js"></script>
        <script src="../assets/js/dist/app.js"></script>

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png">

        <!-- Facebook meta -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content=""/>
        <meta property="og:title" content=""/>
        <meta property="og:image" content="" />
        <meta property="og:site_name" content=""/>
        <!-- End Facebook meta -->

        <!-- Twitter meta -->
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:url" content=""/>
        <meta name="twitter:title" content=""/>
        <meta name="twitter:site" content=""/>
        <meta name="twitter:image" content=""/>

        <!-- ANALYTICS -->
    </head>

    <body class="{{ bodyClass }}">
        <!-- inject our views using ng-view -->
        <main ng-view></main>
        <!-- end inject -->
        <footer></footer>
    </body>
</html>
