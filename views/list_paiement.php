<?php include '../db/db.php'; ?>

<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>

<?php 
    
    $sql = "SELECT * FROM paiements p, recettes r, categories c where r.code_rec= p.code_rec and c.id_cat = r.categorie_rec";
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
                            <h4> <i class="fa fa-book"></i> Liste des Paiements éffectués</h4>
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

                <div class="pd-20">
                    <h4 class="text-black"><i class="fa fa-dollar"></i> Paiements</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead style="background:#254575;color: #ffffff;">
                            <tr>
                                <th class="table-plus datatable-nosort">code</th>
                                <th>Matricule</th>
                                <th>Type</th>
                                <th>Montant</th>
                                <th>date de génération</th>
                                <th>date de paiement</th>
                                <th>Motif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if ($row > 0) {
                            while($get_paiement = mysqli_fetch_array($result)) {?>
                            <tr id="row_<?php echo $get_paiement['id'] ?>">
                                <td class="table-plus">
                                    <?php echo $get_paiement['code'] ?>
                                </td>
                                <td>
                                    <?php echo $get_paiement['matricule'] ?>
                                </td>
                                <td>
                                    <?php echo $get_paiement['libelle_cat'] ?>
                                </td>
                                <td>
                                    <?php echo $get_paiement['montant']. ' CFA' ?>
                                </td>
                                <td>
                                    <?php echo $get_paiement['date_gen'] ?>
                                </td>
                                <td>
                                    <?php echo $get_paiement['date_paiement'] ?>
                                </td>
                                <td>
                                    <?php echo $get_paiement['libelle_rec'] ?>
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