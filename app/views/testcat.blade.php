<<html>
<head>
	<title>Bienvenu</title>
	    <link href="css/assets/css/bootstrap.css" rel="stylesheet" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
<body>

<div class="container">
	<h1>Hello world</h1>
		<div class="col-lg-4">
							{{Form::open(array('url'=>'','files'=>true))}}			
		                                        <div class="form-group">
		                                            <label>Categorie</label>
		                                            <select id="category" name="category" class="form-control">
		                                         @foreach($categories as $category)

		                                                <option value="{{$category->id}}">{{$category->name}}</option>

                                                @endforeach

		                                            </select>
		                                        </div>


		                                        <div class="form-group">
		                                            <label>SubCategories</label>
		                                            <select name="subcategory" id="subcategory" class="form-control">
		                                                <option value=""></option>
		                                            </select>
		                                        </div>
		                    {{Form::close()}}
		</div>
</div>
<script>


</script>



</body>
</html>