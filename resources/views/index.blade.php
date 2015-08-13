<!DOCTYPE html>
<html>
<head>
	<title>Exemplo Laravel e Fanout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

</head>
<body >

<div class="container">
	<h1>Lista de posts</h1>
	<ul class="list-group" id="list">
		<li v-repeat="posts"  class="list-group-item">
	      @{{title}}
	    </li>
	</ul>
</div>
<script src="http://da1cbe49.fanoutcdn.com/bayeux/static/faye-browser-min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.12.10/vue.min.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>
