    <?php include '../db/db.php'; ?>

    <?php include 'header.php'; ?>

    <?php include 'sidebar.php'; ?>
    <?php 

    $sql = "SELECT * FROM types ";
    $result = mysqli_query($db,$sql);
    $row = mysqli_num_rows($result);

    ?>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
    	<div class="pd-ltr-20 xs-pd-20-10">
    		<div class="min-height-200px">
    			<div class="alert alert-danger" id="msg-error">
    				Ce type existe déjà !
    			</div>
    			<div class="alert alert-success" id="msg-success">
    				Type créé avec succès !
    			</div>
    			<div class="page-header" style="border:2px solid #254575;">
    				<div class="row">
    					<div class="col-md-6 col-sm-12">
    						<div class="title">
    							<h4> <i class="fa fa-cogs"></i> Gestion des types</h4>
    						</div>

    					</div>
    					<div class="col-md-6 col-sm-12 text-right">
							<!-- <div class="dropdown">
								<a class="btn" href="liste_contribuables.php" role="button" style="background-color: #254575;color: #ffffff;">
									<i class="fa fa-eye"></i> Liste de contribuables
								</a>
								
							</div> -->
						</div>
					</div>
				</div>


				<!-- horizontal Basic Forms Start -->
				<div class="pd-20 card-box mb-30" style="border:2px solid #254575;">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-black h4">
								<i class="fa fa-book"></i> Types enregistrés</h4>
							</div>

							<div class="pb-20">
								<table class="data-table table stripe hover nowrap">
									<thead style="background: #254575;color: white;">
										<tr>
											<th class="table-plus">Libellé</th>
											<th>Date</th>
											<th class="datatable-nosort">Action</th>
										</tr>
									</thead>
									<tbody id="liste-type">
										<?php
										if ($row > 0) {
											while ($get_types = mysqli_fetch_array($result)) {
												?>
												<tr id="<?= $get_types['id_type']; ?>">
													<td class="table-plus"><?= $get_types['libelle_type']; ?></td>
													<td><?= $get_types['date_type']; ?></td>
													<td>
														<div class="dropdown">
															<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
																<i class="dw dw-more"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
																<button id="<?= $get_types['id_type']; ?>" class="dropdown-item btn-delete"><i class="dw dw-delete-3"></i> Supprimer</button>
															</div>
														</div>
													</td>
												</tr>
												<?php
											}
										}
										?>
									</tbody>
								</table>
							</div>

						</div>
						<form>
							<div class="row">
								<div class="col-md-6 form-group">
									<label>Libellé</label>
									<input class="form-control" type="text" placeholder="Libellé" id="lib-type">
									<span id="msg-lib-type"></span>
								</div>
								<div class="col-md-6 form-group">
									<button class="btn btn-success btn-add" role="button">
										<i class="fa fa-check"></i> Enregistrer
									</button>
								</div>
							</div>




						</form>

					</div>
					<!-- horizontal Basic Forms End -->




				</div>
				<?php include 'footer.php'; ?>
			</div>

			<div id="reponse"></div>
		</div>
		<!-- js -->
		<script src="../vendors/scripts/jquery.min.js"></script>
		<script src="../vendors/scripts/ajouter_type.js"></script>
		<script src="../vendors/scripts/supprimer_type.js"></script>
		<script>

		</script>
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="../src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="../src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="../src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="../vendors/scripts/datatable-setting.js"></script>
	</body>
	</html>