    <?php include '../db/db.php'; ?>

    <?php include 'header.php'; ?>

	<?php include 'sidebar.php'; ?>
    <?php 

      $sql = "SELECT * FROM categories";
      $result = mysqli_query($db,$sql);

      $sql2 = "SELECT * FROM contribuables WHERE statut_cont=1";
      $result2 = mysqli_query($db,$sql2);

     ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="alert alert-danger" id="msg-error">
			          Cette recette existe déjà!
			      </div>
			      <div class="alert alert-success" id="msg-success">
			          Recette créée avec succès!
			     </div>
				<div class="page-header" style="border:2px solid #254575;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4> <i class="fa fa-plus-square"></i> Enregistrement de la recette</h4>
							</div>

						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn" href="liste_recettes.php" role="button" style="background-color: #254575;color: #ffffff;">
									<i class="fa fa-eye"></i> Liste de recettes
								</a>
								
							</div>
						</div>
					</div>
				</div>
			

				<!-- horizontal Basic Forms Start -->
				<div class="pd-20 card-box mb-30" style="border:2px solid #254575;">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-black h4">
							<i class="fa fa-pencil"></i> Informations de la recette</h4>
						</div>
						
					</div>
					<form id="add-rec">
						<div class="row">
								<div class="col-md-6 form-group">
									<label>Code</label>
									<input class="form-control" placeholder="Code" type="text" id="code-rec" name="code">
									<!-- <span id="msg-prenom"></span> -->
								</div>
								<div class="col-md-6 form-group">
									<label>Libellé</label>
									<input class="form-control" type="text" placeholder="Libellé" id="lib-rec" name="libelle">
									<!-- <span id="msg-nom"></span> -->
								</div>
								<div class="col-md-6 form-group">
									<label>Catégorie</label>
									<select class="form-control" id="cat-rec" name="categorie">
										<option>Sélectionner une catégorie</option>
										<?php while ($get_cats = mysqli_fetch_array($result)) {?>
										<option value="<?php echo $get_cats['id_cat'] ?>"><?php echo $get_cats['libelle_cat']; ?></option>
									    <?php } ?>
									    
									</select>
									<!-- <span id="msg-type"></span> -->
								</div>
								<div class="col-md-6 form-group">
									<label>Contribuable</label>
									<select class="form-control" id="cont-rec" name="cont">
										<option>Sélectionner un contribuable</option>
										<?php while ($get_conts = mysqli_fetch_array($result2)) {?>
										<option value="<?= $get_conts['id_cont']; ?>"><?= $get_conts['nom'].' '.$get_conts['prenom']; ?></option>
									    <?php } ?>
									    
									</select>
									<!-- <span id="msg-cont"></span> -->
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
	<script src="../vendors/scripts/ajouter_recette.js"></script>
	<script>
		
	</script>
	
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
</body>
</html>