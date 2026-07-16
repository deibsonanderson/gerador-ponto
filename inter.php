<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
require_once 'controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
		<?php include('topbar.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Intervalo interjornada</h1>
          <p class="mb-4">Essa tela calcula o intervalo de interjornada que é o descanso obrigatório de, no mínimo, 11 horas consecutivas entre o fim de uma jornada de trabalho e o início da seguinte..</p>
   		  <?php 
			  //$controller = new Controller();
			  //echo $controller->timesTableView();
		  ?>
                            <!-- Circle Buttons -->
			<div class="row">
				<div class="col-lg-6">							
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Calculador</h6>
						</div>
						<div class="card-body">
							<p>Informa o horário exato que encerrou o expediente do dia anterior para que seja calculado o próximo horário permitido para iniciar a próxima jornada de trabalho!</p>
							<!-- Circle Buttons (Default) -->
							<form class="user">
								<div class="form-group">
									<input type="datetime-local" class="form-control form-control-user" 
									    id="timer" aria-describedby="timerHelp">
								</div>				
								<a href="#" id="calcular" onclick="calcular()" class="btn btn-primary btn-icon-split btn-lg col-xl-12 col-md-12">
									<span class="text">calcular</span>
								</a>
								<hr>
								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-12 col-md-12 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
														Próxima jornada</div>
													<div id="result" class="h5 mb-0 font-weight-bold text-gray-800">--:--</div>
												</div>
												<div class="col-auto">
													<i class="fas fa-calendar fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
						
          <!-- DataTales Example -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
	<?php include('footer.php'); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <?php include('includes.php'); ?>

</body>

</html>
