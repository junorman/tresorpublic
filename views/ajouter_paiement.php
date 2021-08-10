<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../vendors/images/cropped-logo-dgcpt2-180x180.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../vendors/images/cropped-logo-dgcpt2-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../vendors/images/cropped-logo-dgcpt2-192x192.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="../vendors/images/cropped-logo-dgcpt2-192x192.png" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>


<?php include '../db/db.php'; ?>

<?php 

  $sql = "SELECT * FROM types ";
  $result = mysqli_query($db,$sql);

 ?>
<div class="mobile-menu-overlay"></div>

<div class="">
    <div class="">
        <div class="min-height-400px">
            <div class="page-header text-center">
            <span class = "text-uppercase text-primary h2">
                BIENVENUE DANS L'INTERFACE DES PAIEMENTS DU TRESOR PUBLIC DU GABON
            </span>
            </div>
            <div class="page-header" style="border:2px solid #254575;">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4> <i class="fa fa-carte-de-credit-alt "></i> Effectuer un Paiement</h4>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn" href="liste_contribuables.php" role="button" style="background-color: #254575;color: #ffffff;">
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