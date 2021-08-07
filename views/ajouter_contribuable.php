    <?php include '../db/db.php'; ?>

    <?php include 'header.php'; ?>

	<?php include 'sidebar.php'; ?>
    <?php 

      $sql = "SELECT * FROM types ";
      $result = mysqli_query($db,$sql);

     ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="alert alert-danger" id="msg-error">
			          Ce contribuable existe déjà!
			      </div>
			      <div class="alert alert-success" id="msg-success">
			          Contribuable créé avec succès!
			     </div>
				<div class="page-header" style="border:2px solid #254575;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4> <i class="fa fa-user-plus"></i> Enregistrement du contribuable</h4>
							</div>

						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn" href="liste_contribuables.php" role="button" style="background-color: #254575;color: #ffffff;">
									<i class="fa fa-eye"></i> Liste de contribuables
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
							<i class="fa fa-pencil"></i> Informations du contribuable</h4>
						</div>
						
					</div>
					<form>
						<div class="row">
								<div class="col-md-6 form-group">
									<label>Nom</label>
									<input class="form-control" type="text" placeholder="Nom" id="nom">
									<span id="msg-nom"></span>
								</div>
								<div class="col-md-6 form-group">
									<label>Prénom</label>
									<input class="form-control" placeholder="Prénom" type="text" id="prenom">
									<span id="msg-prenom"></span>
								</div>
								<div class="col-md-6 form-group">
									<label>Téléphone</label>
									<input class="form-control" placeholder="Téléphone" type="text" id="tel">
									<span id="msg-tel"></span>
								</div>
								<div class="col-md-6 form-group">
									<label>Types</label>
									<select class="form-control" id="type">
										<option>Sélectionner un type</option>
										<?php while ($get_types = mysqli_fetch_array($result)) {?>
										<option value="<?php echo $get_types['id_type'] ?>"><?php echo $get_types['libelle_type']; ?></option>
									    <?php } ?>
									    
									</select>
									<span id="msg-type"></span>
								</div>
								<div class="col-md-6 form-group" id="input1">
									<label>Nif</label>
									<input class="form-control" placeholder="Nif" type="text" id="nif">
									<span id="msg-nif"></span>
								</div>
								<div class="col-md-6 form-group" id="input2">
									<label>Sexe</label>
									<select class="form-control" id="sexe">
										<option value="M">M</option>
										<option value="F">F</option>
									</select>
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
	</div>
	<!-- js -->
	<script src="../vendors/scripts/jquery.min.js"></script>

	<script src="../vendors/scripts/ajouter_contribuables.js"></script>
	<script>
		
	</script>
	
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
</body>
</html>