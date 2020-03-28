<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Blog</title>
    <style>
        body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
        overflow: hidden;
        background-color: #333;
        }

        .topnav a {
        float: right;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        }

        .topnav a:hover {
        background-color: #ddd;
        color: black;
        }

        .topnav a.active {
        background-color: #4CAF50;
        color: white;
        }

        .topnav .icon {
        display: none;
        }
    </style>
</head>
<body>
    
    <div class="topnav" id="myTopnav">
        <!-- <a href="#user" class="active">User</a> -->
        <a href="#login">Home</a>
        <!-- <a href="{% url 'adduser' %}">Register</a> -->
            <i class="fa fa-bars"></i>
        </a>
    </div>
	<form>
	<div class="container">
		<div class="row">
			<div class="col-md-6 m-auto">				
						<div class="card mb-3">
							<div class="card-body" id="post">
                                <main class="py-4">
                                    @yield('content')
                                </main>
							</div>
						</div>
			</div>
		</div>
	</div>
	</form>
</body>
</html>