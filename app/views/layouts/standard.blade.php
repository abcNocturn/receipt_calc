<!doctype html>
<html lang="en" ng-app="receiptCalc">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Little ReceiptCalc</title>

	{{ HTML::script('bower_components/angular/angular.js'); }}
	{{ HTML::script('bower_components/jquery/dist/jquery.min.js'); }}
	{{ HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js'); }}
	{{ HTML::script('js/app/app.js'); }}

    {{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.css'); }}
    {{ HTML::style('css/main.css'); }}


	<style>
	</style>
	<script>
	    var laravelConfig = {"url_to": "{{URL::to('/');}}"};
	</script>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to("page/index") }}">Bonrechner</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
                {{ HTML::clever_link("page/statistics", 'Statistiken' ) }}
                {{ HTML::clever_link("page/insert-bon", 'Bon einfügen' ) }}
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
	<div class="content">
	    @yield('content')
	</div>
	<div class="footer">
	</div>
</body>
</html>
