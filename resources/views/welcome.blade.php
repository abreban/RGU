<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wander Blog</title>

    <!--bootstrap css-->
<<<<<<< HEAD
    <link type="application/css" rel="stylesheet" href="dependencies/css/bootstrap/bootstrap.css" />
    <link type="application/css" rel="stylesheet" href="dependencies/css/bootstrap/bootstrap-theme.min.css" />
    <link type="application/css" rel="stylesheet" href="resources/styles/app.css" />

</head>
<body ng-app="app" ng-cloak >
<div class="main" ng-controller="mainController">
    <div ng-include="'partials/header.html'"></div>
    <div ng-include="'partials/menu.html'"></div>

    <div class="container">
        <ng-view></ng-view>
    </div>

    <div ng-include="'partials/footer.html'"></div>
</div>
</body>


<!--jquery-->
<script type="application/javascript" src="dependencies/scripts/jquery/jquery-1.11.3.js"></script>

<!--bootstrap js-->
<script type="application/javascript" src="dependencies/scripts/bootstrap/bootstrap.min.js"></script>

<!--angular-->
<script type="application/javascript" src="dependencies/scripts/angular/angular.min.js"></script>
<script type="application/javascript" src="dependencies/scripts/ui bootstrap/ui-bootstrap-tpls-0.14.3.min.js"></script>
<script type="application/javascript" src="dependencies/scripts/angular/angular-route.min.js"></script>
<script type="application/javascript" src="dependencies/scripts/angular/angular-resource.min.js"></script>

<!--setup js-->
<script type="application/javascript" src="resources/scripts/js/setup.js"></script>

<!--all js-->
<script type="application/javascript" src="resources/scripts/js/mainController.js"></script>
<script type="application/javascript" src="pages/home/home.js"></script>
<script type="application/javascript" src="pages/adventures/adventures.js"></script>
<script type="application/javascript" src="pages/adventures/adventureDetails.js"></script>
<script type="application/javascript" src="pages/adventures/addAdventure.js"></script>
<script type="application/javascript" src="pages/authors/authors.js"></script>
<script type="application/javascript" src="pages/authors/authorDetails.js"></script>
<script type="application/javascript" src="pages/admin/dashboard.js"></script>
<script type="application/javascript" src="pages/admin/roleManagement.js"></script>
<script type="application/javascript" src="pages/admin/userManagement.js"></script>
<script type="application/javascript" src="pages/about/about.js"></script>
</html>