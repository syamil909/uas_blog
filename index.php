<?php
	include 'conn.php';
	include 'conf.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BLOGS</title>
	<link rel="stylesheet" type="text/css" href="assets/css/css.css">
</head>
<body>
	<div class="top-gray"></div>
	<div class="header">
		<div class="big-logo">BLOGS</div>
		<?php include 'menu.php';?>
	</div>
	<div class="content">
		<div class="container">
			<?php
				if(!is_null(get('p'))){
					switch (get('p')) {
						case 'crud':
							inc('crud');
							break;
							case 'blog':
							switch (get('m')) {
								case 'crud':
									inc('tampilan/crud/all');
									break;
									case 'add':
									inc('tampilan/crud/add');
									break;
								case 'edit':
									inc('tampilan/crud/edit');
									break;
								default:
									inc('tampilan/crud/all');
									break;
							}
							break;
						default:
							inc('home');
							break;
						}
				}else { inc('crud'); } ?>
			</div>
		</div>
	</body>
</html>