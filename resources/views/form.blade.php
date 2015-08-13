<!DOCTYPE html>
<html>
<head>
	<title>Exemplo Laravel e Fanout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

</head>
<body >

<div class="container" id="add" >
	<h1>Digite o título</h1>
	<form  v-on="submit: addPost">
		 <div class="form-group">
                <input v-model="title" v-el="title"  class="form-control"></input>
            </div>

            <button class="btn btn-primary">
                Adicionar post
            </button>
	</form>	
    @{{msg}}
</div>
<script src="http://da1cbe49.fanoutcdn.com/bayeux/static/faye-browser-min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.12.10/vue.min.js"></script>
<script type="text/javascript" src="zepto.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>
