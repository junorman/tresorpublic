    <?php include '../db/db.php'; ?>

    <?php include 'header.php'; ?>

	<?php include 'sidebar.php'; ?>

	<?php 
        
        $sql = "SELECT * FROM recettes WHERE statut_rec=1";
        $result = mysqli_query($db,$sql);
        $row = mysqli_num_rows($result);
	 ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="border:2px solid #254575;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4> <i class="fa fa-book"></i> Liste des recettes</h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn" href="ajouter_recette.php" role="button" style="background-color: #254575;color: #ffffff;">
									<i class="fa fa-plus-square"></i> Ajouter une recette
								</a>
								
							</div>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30" >
					<div class="alert alert-danger" id="msg-error">
			          Une ligne a été supprimée !
			      </div>
					<div class="pd-20">
						<h4 class="text-black"><i class="fa fa-book"></i> Recettes</h4>
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead style="background:#254575;color: #ffffff;">
								<tr>
									<th class="table-plus datatable-nosort">Code</th>
									<th>Libelle</th>
									<th>Catégorie</th>
									<th>Contribuable</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								if ($row > 0) {
								while($get_recettes = mysqli_fetch_array($result)) {
									$id_rec = $get_recettes['id_rec'];
									$id_cat = $get_recettes['categorie_rec'];
									$id_cont = $get_recettes['cont_rec'];
									?>
								<tr id="<?= $id_rec; ?>">
									<td class="table-plus rec-click">
										<?= $get_recettes['code_rec']; ?>
									</td>
									<td class="rec-click">
										<?= $get_recettes['libelle_rec']; ?>
									</td>
									<?php
									$sql2 = "SELECT libelle_cat FROM categories WHERE id_cat=$id_cat";
        							$result2 = mysqli_query($db,$sql2);
        							$get_cat = mysqli_fetch_array($result2);
									?>
									<td class="rec-click">
										<?= $get_cat['libelle_cat']; ?>
									</td>
									<?php
									$sql3 = "SELECT nom,prenom FROM contribuables WHERE id_cont=$id_cont";
        							$result3 = mysqli_query($db,$sql3);
        							$get_cont = mysqli_fetch_array($result3);
									?>
									<td class="rec-click">
										<?= $get_cont['nom'].' '.$get_cont['prenom']; ?>
									</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="editer_recette.php?id_rec=<?= $id_rec; ?>"><i class="dw dw-edit2"></i> Modifier</a>
												<a class="dropdown-item btn-delete" id="<?= $id_rec; ?>"><i class="dw dw-delete-3"></i> Supprimer</a>
											</div>
										</div>
									</td>
								</tr>
							    <?php } } ?>
							
								
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<?php include 'footer.php'; ?>
		</div>
	</div>
	<!-- js -->
	<script src="../vendors/scripts/jquery.min.js"></script>
	<script src="../vendors/scripts/supprimer_recette.js"></script>
	<script>
		$(document).ready(function(){
			$('.rec-click').click(function() {
				var id = $(this.parentNode).attr('id');
				window.location = 'editer_recette.php?id_rec='+id;
			});
		});
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
	<script src="../vendors/scripts/datatable-setting.js"></script></body>
</html>