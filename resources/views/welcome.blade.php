<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wander Blog</title>

    <!--bootstrap css-->
    <link type="application/css" rel="stylesheet" href="{!! asset("dependencies/css/bootstrap/bootstrap.css")  !!}" />
    <link type="application/css" rel="stylesheet" href="{!! asset("dependencies/css/bootstrap/bootstrap-theme.min.css")  !!}" />
    <link type="application/css" rel="stylesheet" href="{!! asset("resources/styles/app.css")  !!}" />

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


<!--jquery-->
<script type="application/javascript" src="{!! asset("dependencies/scripts/jquery/jquery-1.11.3.js")  !!}"></script>

<!--bootstrap js-->
<script type="application/javascript" src="{!! asset("dependencies/scripts/bootstrap/bootstrap.min.js")  !!}"></script>

<!--angular-->
<script type="application/javascript" src="{!! asset("dependencies/scripts/angular/angular.min.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("dependencies/scripts/ui bootstrap/ui-bootstrap-tpls-0.14.3.min.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("dependencies/scripts/angular/angular-route.min.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("dependencies/scripts/angular/angular-resource.min.js")  !!}"></script>

<!--setup js-->
<script type="application/javascript" src="{!! asset("resources/scripts/js/setup.js")  !!}"></script>

<!--all js-->
<script type="application/javascript" src="{!! asset("resources/scripts/js/mainController.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("pages/home/home.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("pages/adventures/adventures.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("pages/adventures/adventureDetails.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("pages/adventures/addAdventure.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("pages/authors/authors.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("pages/authors/authorDetails.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("pages/admin/dashboard.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("pages/admin/roleManagement.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("pages/admin/userManagement.js")  !!}"></script>
<script type="application/javascript" src="{!! asset("pages/about/about.js")  !!}"></script>
</html>