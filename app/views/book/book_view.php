<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->
    <link rel="icon" type="image/png" href="./assets/Image/favicon.ico">


    <title>Admin | Manage Book</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="./assets/css/admin-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>

<body>
	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">HUS-Admin</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="">Log out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="/Project/app/views/dashboard.php">
                                <i class="fas fa-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="fas fa-users"></i>
                                <span>Người dùng</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Project/app/views/book/book_view.php">
                                <i class="fas fa-server"></i>
                                <span>Sách</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="fas fa-file-alt "></i>
                                <span>Mượn, trả sách</span>
                            </a>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Some Actions</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                </div>
            </nav>
		
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
				<div  style = "margin-top: 3%;" align="center">
					<label>Thể loại</label>
					<input  style="width:50%; " type="select" id="search" name="search">
				</div>
				<div style = "margin-top: 3%;" align="center">
					<label >Từ khóa</label>
					<input  style="width:50%; " type="text" id="search" name="search">
				</div>
				<div style = "margin-top: 3%;" align="center">
					<input  type="submit" name="btn_submit" style="background-color: #5b9bd5" value="Tìm kiếm"></input >
				</div>

				<div style = "margin-top: 3%;  margin-left: 1%;  margin-bottom: 5%">
				<?php echo 'Số quyển sách tìm thấy: XXX' ?>   
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-sm" id='data-table'>
						<thead>
						<tr>
							<th>No.</th>
							<th>Tên sách</th>
							<th>Thể loại</th>
							<th>Mô tả chi tiết</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
							 <tr>
								<td><?php echo '1' ?></td>
								<td><?php echo '2' ?></td>
								<td><?php echo '3' ?></td>
								<td><?php echo '4' ?></td>
								<td><?php echo '5' ?></td>
							</tr>	
						</tbody>
					</table>
				</div>
			</main>
		</div>
	</div>
		
</body>
</html>
