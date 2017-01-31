<!DOCTYPE html>
<html>
<head>
	<title>Responsive Menú</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    {!!Html::style('font-awesome-4.7.0/css/font-awesome.css')!!}
    {!!Html::style('css/bootstrap.css')!!}

	<!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>
<body>
	<div class="header">
		<div class="logo">
        	<i class="fa fa-tachometer"></i>
        <span>Brand</span>
    </div>
		<a herf=" #" class="nav-trigger"><span></span></a>
	</div>
	<div class="side-nav">
		<div class="logo">
	        <i class="fa fa-tachometer"></i>
        <span>Brand</span>
    	</div>
		<nav role="navigation">
			<ul class="menu">
				<li>
					<a href="#">
						<span><i class="fa fa-file-pdf-o"></i></span>
						<span>Minuta</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-wrench"></i></span>
							<span>Soporte</span><i class="icono-der fa fa-chevron-down" aria-hidden="true"></i></a>
					<ul>
                        <li>
                            <a href="#">Flot Charts</a>
                        </li>
                        <li>
                            <a href="#">Morris Charts</a>
                        </li>
                    </ul>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-bar-chart"></i></span>
						<span>Analystics</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-credit-card-alt"></i></span>
						<span>Payments</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="main-content">
	
	</div>
	<div class="content">
		<footer class="main-footer">
			<strong>Copyright &copy; 2017 <a href="http://activalab.mx">ActivaLab</a>.</strong> All rights
	    	reserved.
	    </footer>
    </div>
    {!!Html::script('js/jquery-3.1.1.js')!!}
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/main.js')!!}
</body>
</html>