<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>todo</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

	<section id="demo">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-4 col-2">
					<div class="menu_icon">
					<div class="icon"></div>
					<div class="icon"></div>
					<div class="icon"></div>
				</div>
					<div class="title d-none d-md-block">Task Manager</div>
				</div>
				<div class="col-lg-3 col-md-4 col-5">
					<button type="submit" class="btn btn-danger tog"><i class="fa fa-plus" aria-hidden="true" ></i> Add New Task</button>
				</div>
				<div class="col-lg-3 col-md-4 col-5">
					<input type="search" name="search" placeholder="filter task">
				</div>
			</div>
			
		</div>
	</section>
<section id="todo">
	<div class="row">
		<form action="" method="post">
			<div class="col-lg-12">
				<input type="text" name="task"><button type="submit" class="btn btn-warning"><i class="fa fa-plus" aria-hidden="true" ></i> Add New Task</button>
			</div>
			</form>
			<div class="col-lg-12">
				<table width="100%">
					
					<thead>
						<tr>
							<th>No.</th>
							<th>Task</th>
							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td class="task">rgwg</td>
							
							<td class="delete">x</td>
						</tr>
					</tbody>
				</table>
			</div>
	</div>
</section>
	
</body>

</html>