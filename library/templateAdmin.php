<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <title>Dashboard</title>
	</head>
	<body>


		<div class="container-fluid">
			<div class="row">
				<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block text-white bg-dark sidebar collapse">
                      <span class="fs-4">EasyScooters</span>
                    <hr>
					<div class="position-sticky pt-3">
						<ul class="nav nav-pills flex-column mb-auto ">i
							<li class="nav-item">
								<a class="nav-link link-secondary" aria-current="page" href="usermana"></span>Utilisateurs</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link-secondary" href="scootermana"></span>Trotinettes</a>
							</li>
						</ul>
					</div>
				</nav>
				<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
						<div class="btn-toolbar mb-2 mb-md-0">
							<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"><span data-feather="calendar"></span>This week</button>
						</div>
					</div>
					<?= $adminContent?>
				</main>
			</div>
		</div>
        <script type="text/javascript" src="library/js/main.js"> </script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
