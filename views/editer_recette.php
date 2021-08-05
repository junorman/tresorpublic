    <?php include '../db/db.php'; ?>

    <?php include 'header.php'; ?>

    <?php include 'sidebar.php'; ?>
    <?php 

    $id_rec = $_GET['id_rec'];

    $sql = "SELECT * FROM categories";
    $result = mysqli_query($db,$sql);

    $sql2 = "SELECT * FROM recettes WHERE id_rec=$id_rec";
    $result2 = mysqli_query($db,$sql2);
    $get_recettes = mysqli_fetch_array($result2);

    $sql3 = "SELECT id_cont,nom,prenom FROM contribuables WHERE statut_cont=1";
    $result3 = mysqli_query($db,$sql3);

    ?>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
    	<div class="pd-ltr-20 xs-pd-20-10">
    		<div class="min-height-200px">
			        <div class="alert alert-success" id="msg-success">
			        	Recette modifiée avec succès !
			        </div>
			        <div class="page-header" style="border:2px solid #254575;">
			        	<div class="row">
			        		<div class="col-md-6 col-sm-12">
			        			<div class="title">
			        				<h4> <i class="fa fa-edit"></i> Modification de la recette</h4>
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
			        		<form id="edit-rec">
			        			<div class="row">
			        				<div class="col-md-6 form-group">
			        					<input class="form-control" type="hidden" name="id_rec" value="<?= $get_recettes['id_rec']; ?>">
			        					<label>Code</label>
			        					<input class="form-control" type="text" placeholder="Code" id="code-rec" value="<?= $get_recettes['code_rec']; ?>" name="code">
			        					<!-- <span id="msg-nom"></span> -->
			        				</div>
			        				<div class="col-md-6 form-group">
			        					<label>Libellé</label>
			        					<input class="form-control" placeholder="Libellé" type="text" id="lib-rec" value="<?= $get_recettes['libelle_rec']; ?>" name="libelle">
			        					<!-- <span id="msg-prenom"></span> -->
			        				</div>
			        				<div class="col-md-6 form-group">
			        					<label>Categorie</label>
			        					<select class="form-control" id="cat-rec" name="categorie">
			        						<?php while ($get_cats = mysqli_fetch_array(
			        							$result)) {
			        							if ($get_cats['id_cat'] == $get_recettes['categorie_rec']) {
			        								$selected = "selected";
			        							}else{
			        								$selected = "";
			        							}
			        							?>
			        							<option value="<?= $get_cats['id_cat']; ?>" <?= $selected; ?>><?= $get_cats['libelle_cat']; ?></option>

			        						<?php } ?>
			        					</select>
			        					<!-- <span id="msg-type"></span> -->
			        				</div>
			        				<div class="col-md-6 form-group">
			        					<label>Contribuable</label>
			        					<select class="form-control" id="cont-rec" name="cont">
			        						<?php while ($get_conts = mysqli_fetch_array(
			        							$result3)) {
			        							if ($get_conts['id_cont'] == $get_recettes['cont_rec']) {
			        								$selected = "selected";
			        							}else{
			        								$selected = "";
			        							}
			        							?>
			        							<option value="<?= $get_conts['id_cont']; ?>" <?= $selected; ?>><?= $get_conts['nom'].' '.$get_conts['prenom']; ?></option>

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
			    <script src="../vendors/scripts/editer_recette.js"></script>
			    <script>

			    </script>

			    <script src="../vendors/scripts/core.js"></script>
			    <script src="../vendors/scripts/script.min.js"></script>
			    <script src="../vendors/scripts/process.js"></script>
			    <script src="../vendors/scripts/layout-settings.js"></script>
			  </body>
			  </html>