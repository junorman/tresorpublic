<?php include '../db/db.php'; ?>

<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>

<?php 
    
    $sql = "SELECT * FROM titres t, recettes r where r.code_rec= t.code_rec and t.statut = 0";
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
                            <h4> <i class="fa fa-book"></i> Liste des recettes générés</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn" href="ajouter_contribuable.php" role="button" style="background-color: #254575;color: #ffffff;">
                                <i class="fa fa-user-plus"></i>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30" >
                <div class="alert alert-danger" id="msg-error">
                  Une ligne a été supprimée!
              </div>
                <div class="pd-20">
                    <h4 class="text-black"><i class="fa fa-dollar"></i> recettes</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead style="background:#254575;color: #ffffff;">
                            <tr>
                                <th>Id</th>
                                <th class="table-plus datatable-nosort">code</th>
                                <th>Matricule</th>
                                <th>Type</th>
                                <th>Montant</th>
                                <th>date de génération</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if ($row > 0) {
                            while($get_titre = mysqli_fetch_array($result)) {?>
                            <tr id="row_<?php echo $get_titre['id'] ?>">
                                <td class="table-plus">
                                    <?php echo $get_titre['id'] ?>
                                </td>
                                <td>
                                    <?php echo $get_titre['code'] ?>
                                </td>
                                <td>
                                    <?php echo $get_titre['matricule'] ?>
                                </td>
                                <td>
                                    <?php echo $get_titre['libelle_rec'] ?>
                                </td>
                                <td>
                                    <?php echo $get_titre['montant'] ?>
                                </td>
                                <td>
                                    <?php echo $get_titre['date'] ?>
                                </td>
                                <td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="editer_contribuable.php?id_cont=<?php echo $get_titre['id'] ?>"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item btn-delete" id="<?php echo $get_titre['id'] ?>"><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td>
                            </tr>
                            <?php } } else{

                            }?>
                        
                            
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
<script src="../vendors/scripts/supprimer_contribuable.js"></script>
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
<script src="../vendors/scripts/datatable-setting.js"></script></body>
</html>