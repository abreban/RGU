<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wander Blog</title>

    <!--bootstrap css-->
    <link type="text/css" rel="stylesheet" href="../dependencies/css/bootstrap/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="../dependencies/css/bootstrap/bootstrap-theme.min.css" />
    <link type="text/css" rel="stylesheet" href="../resources/styles/app.css" />

</head>
<body ng-app="app" ng-cloak >
<div class="main" ng-controller="mainController">
    <div ng-include="'../public/partials/header.html'"></div>
    <div ng-include="'../public/partials/menu.html'"></div>

    <div class="container">
        <ng-view></ng-view>
    </div>

    <div ng-include="'../public/partials/footer.html'"></div>
</div>
</body>
=======
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">SQL 'li'</div>
            </div>
        </div>
    </body>
>>>>>>> c37888fe7cda35f7064d86b5e366e2f65f7a942d
</html>

<!--jquery-->
<script type="text/javascript" src="../dependencies/scripts/jquery/jquery-1.11.3.js"></script>

<!--bootstrap js-->
<script type="text/javascript" src="../dependencies/scripts/bootstrap/bootstrap.min.js"></script>

<!--angular-->
<script type="text/javascript" src="../dependencies/scripts/angular/angular.min.js"></script>
<script type="text/javascript" src="../dependencies/scripts/ui bootstrap/ui-bootstrap-tpls-0.14.3.min.js"></script>
<script type="text/javascript" src="../dependencies/scripts/angular/angular-route.min.js"></script>
<script type="text/javascript" src="../dependencies/scripts/angular/angular-resource.min.js"></script>

<!--setup js-->
<script type="text/javascript" src="../resources/scripts/js/setup.js"></script>

<!--all js-->
<script type="text/javascript" src="../resources/scripts/js/mainController.js"></script>
<script type="text/javascript" src="../public/pages/home/home.js"></script>
<script type="text/javascript" src="../public/pages/adventures/adventures.js"></script>
<script type="text/javascript" src="../public/pages/adventures/adventureDetails.js"></script>
<script type="text/javascript" src="../public/pages/adventures/addAdventure.js"></script>
<script type="text/javascript" src="../public/pages/authors/authors.js"></script>
<script type="text/javascript" src="../public/pages/authors/authorDetails.js"></script>
<script type="text/javascript" src="../public/pages/admin/dashboard.js"></script>
<script type="text/javascript" src="../public/pages/admin/roleManagement.js"></script>
<script type="text/javascript" src="../public/pages/admin/userManagement.js"></script>
<script type="text/javascript" src="../public/pages/about/about.js"></script>