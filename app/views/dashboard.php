<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->
    <link rel="icon" type="image/png" href="./assets/Image/favicon.ico">


    <title>Admin | Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="./assets/css/admin-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

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
                            <a class="nav-link active" href="">
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
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>
                <div class="container">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
						<h6 class="h6">Tên login:</h6>
					</div>
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
						<h6 class="h6">Thời gian login:</h6>
					</div>
                    <div class="row justify-content-center">
                        <div class="col-sm-36 col-md-5 col-lg-4 col-xl-3 mb-3">
                            <div class="card text-center bg-light">
                                <div class="card-body">
                                    <p class="card-text">Người dùng</p>
                                    <a href="" class="card-link">Tìm kiếm</a>
                                    <a href="" class="card-link">Thêm mới</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-36 col-md-5 col-lg-4 col-xl-3 mb-3">
                            <div class="card text-center bg-secondary ">
                                <div class="card-body">
                                   <p class="card-text">Sách</p>
                                    <a href="/Project/app/views/book/book_view.php" class="card-link">Tìm kiếm</a>
                                    <a href="" class="card-link">Thêm mới</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-36 col-md-5 col-lg-4 col-xl-3 mb-3">
                            <div class="card text-center bg-warning">
                                <div class="card-body">
									<p class="card-text">Mượn/Trả sách</p>
                                    <a href="" class="card-link">Tìm kiếm</a>
                                    <a href="" class="card-link">Thêm mới</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>