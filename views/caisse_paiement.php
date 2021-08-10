<?php include '../db/db.php'; ?>

<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>

<?php 
    
    $sql = "SELECT * FROM recettes ";
    $result = mysqli_query($db,$sql);
    $row = mysqli_num_rows($result);
 ?>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-400px">
            <div class="page-header" style="border:2px solid #254575;">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4> <i class="fa fa-carte-de-credit-alt "></i> Effectuer un Paiement</h4>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn" href="generer_quittance.php" role="button" style="background-color: #254575;color: #ffffff;">
                                <i class="fa fa-eye"></i> Générer Quittance
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
                        <i class="fa fa-pencil"></i> Informations Paiement</h4>
                    </div>
                    
                </div>
                <form>
                    <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Numero de Paiement</label>
                                <input class="form-control" type="text" placeholder="Numéro Paiement" id="numero">
                                <span id="msg-numero"></span>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Teléphone (Airtel)</label>
                                <input class="form-control" placeholder="Numéro de tel" type="text" id="tel">
                                <span id="msg-tel"></span>
                            </div>
                            <div class="form-group col-md-12 text-right">
                                        <button class="btn btn-danger btn-add" role="button">
                                        <i class="fa fa-remove"></i> Annuler
                                        </button>
                                        <button class="btn btn-success btn-send" role="button">
                                        <i class="fa fa-check"></i> Payer
                                        </button>
                            </div>
                        
                    </div>
                    

                </form>
                <div class="alert alert-success text-small">
                    veillez saisir le numero qui vous a été remis et votre numero de telephone Airtel, a la suite un message de confirmation vous sera envoyer et vous invitant a saisir votre code Airtel money, a la suite de ceci, votre compte sera debité du montant correspondant a la recette a payer, vérifiez bien que le numero saisit est belle et bien celui qui vous a été généré.
                </div>
                
            </div>
            <!-- horizontal Basic Forms End -->

            
    

        </div>
        <?php include 'footer.php'; ?>
    </div>
</div>

<div class="col-md-4 col-sm-12 mb-30">
    <div class="pd-20 card-box height-100-p">
        <h5 class="h4"><i class="fa fa-check-circle"></i> Confirmation !</h5>
        
        <div class="modal fade bs-example-modal-lg" id="confirmations-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="background: #254575;color:#ffffff !important;">
                        <h4 class="modal-title text-white" id="myLargeModalLabel"><i class="fa fa-eye"></i> Vérification</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-cancel" data-dismiss="modal"><i class="fa fa-remove"></i> Abondonner</button>
                        <button type="button" class="btn btn-success btn-confirme"><i class="fa fa-check"></i> Confirmer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- js -->
<script src="../vendors/scripts/jquery.min.js"></script>
<!--<script src="../vendors/scripts/ajouter_contribuable.js"></script>-->
<script>
    $(document).ready(function(){
         
         $('.btn-send').click(function(e){

            e.preventDefault();
             var numero = $('#numero').val();
             var tel = $('#tel').val();

              $.ajax({  
                    url:"../traitements/charger_informations_modal.php",  
                    method:"POST",  
                    data:{numero:numero, tel:tel},  
                    success:function(res)  
                    {   
                       $('.modal-body').html(res);
                       $('#confirmations-modal').modal("show");
                    }
              });
         });

         $('.btn-confirme').click(function(e){
            
            e.preventDefault();
             var numero = $('#numero').val();
             var tel = $('#tel').val();

              $.ajax({  
                    url:"../traitements/ajouter_paiement.php",  
                    method:"POST",  
                    data:{numero:numero, tel:tel},  
                    success:function(res)  
                    {   
                       
                       $('#confirmations-modal').modal("hide");
                         alert(res);
                         numero = $('#numero').val('');
                         tel = $('#tel').val('');

                    }
              });
         });

         $('.btn-cancel').click(function(e){
            
            e.preventDefault();
             var numero = $('#numero').val('');
             var tel = $('#tel').val('');

             $('#confirmations-modal').modal("hide");

             
         });
    });
</script>
<script src="../vendors/scripts/core.js"></script>
<script src="../vendors/scripts/script.min.js"></script>
<script src="../vendors/scripts/process.js"></script>
<!--<script src="../vendors/scripts/layout-settings.js"></script>-->
</body>
</html>