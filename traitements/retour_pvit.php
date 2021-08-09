<?php 

//traitement retour pvit......



/*$retour = '200';

if($retour = '200'){
    //generer facture ici
}*/

require_once '../phpqrcode/qrlib.php';

$path = '../qrcodes/';
$file = $path.uniqid().".png";

$text = "5717736";

QRcode::png($text, $file, 'L', 10, 2);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
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
    
</head>
<body style="background:#ffffff;">
    <div id="loadingMask" style="width: 100%; height: 100%; position: fixed; background: #fff;text-align: center;font-size: 30px;">Veuillez patienter...</div>
   <div class="container" style="margin-top: 2%;" id="report">
      <!-- Begin -->
       <div class="row">
           <div class="col-md-3" style="border: 1px solid #000000;height: 200px;">
               <div class="row">
                   <div class="col-md-12" style="border: 1px solid #000000; text-align: center;">
                       TRESOR PUBLIC
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                       <strong>PC:</strong> <span></span><br>
                   </div>
                </div>
                <div class="row" style="position:relative;top: 60%;text-align: center;">
                   <div class="col-md-12">
                       <strong>Cachet du poste</strong>
                   </div>
               </div>
              
           </div>

           <div class="col-md-5" style="border: 1px solid #000000; text-align: center;height: 200px;">
               <strong style="font-size: 30px;">
                   QUITTANCE
               </strong><br>
               <strong style="font-size: 20px;">DE VERSEMENT</strong><br>
               <strong>Disponibilté:</strong> <span>BANCAIRE</span><br>
               <strong>DUPLICATA (1)</strong><br>
               <strong><b style="position:relative;top: 20%;">délivtée en réglement de l'opération ci-après:</b></strong>
           </div>

           <div class="col-md-3" style="border: 1px solid #000000;height: 200px;">
               <div class="row">
                   <div class="col-md-12" style="border: 1px solid #000000; text-align: center;">
                       REPUBLIQUE GABONAISE
                   </div>
                </div>
                <div class="row" style="padding: 15px;">
                   <div class="col-md-12">
                       <strong>Date:</strong> <span>11/03/2019</span><br>
                   </div>
                </div>
                <div class="row" style="padding: 15px;">
                   <div class="col-md-12">
                       <strong>QA:</strong> <span>11495314</span><br>
                   </div>
                </div>
                <div class="row" style="padding: 15px;">
                   <div class="col-md-12">
                       <strong>N° opération:</strong> <span>124230011</span><br>
                   </div>
                </div>
               
           </div>
       </div>
       <!-- End -->

       <!-- TItle -->
         <div class="row">
             <div class="col-md-5" style="border: 1px solid #000000;padding: 1%;margin-top: 2%;">
                 <strong>Redevable:</strong> <span>MANFOUMBI FULBERT</span><br><br>
                 <strong>Nature du versement:</strong> <span>RECETTE DIVERSE</span><br>
                 <strong>atd succesion</strong><br>
                 <strong>Swit BEAC du 11/03/2019</strong><br>
             </div>
             <div class="col-md-1" style="margin-top: 2%;">
                 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
             </div>
             <div class="col-md-5" style="border: 1px solid #000000;padding: 1%;margin-top: 2%;">
                 <strong>Partie versante:</strong> <span>MANFOUMBI FULBERT</span><br><br>
                 <strong>Chèque N°:</strong> <span>106537</span><br>
                 <strong>Compte N°:</strong> <span>SWIFT</span><br>
                 <strong>Banque:</strong> <span>SWIFT BEAC LIBREVILLE</span><br>
                 <strong>sous reserve d'encaissement</strong>
             </div>
         </div><br>
       <!-- End -->

       <!-- Table -->
        <div class="row">
            <div class="col-md-12">
                <table class="table" style="border:1px solid #000000;margin-top: 2%;">
                    <tr>
                        <thead>
                            <th style="border:1px solid #000000;text-align: center;">Ligne</th>
                            <th style="border:1px solid #000000;text-align: center;">Code Opération</th>
                            <th style="border:1px solid #000000;">Imputation Trésor</th>
                            <th style="border:1px solid #000000;text-align: center;">Code Nature</th>
                            <th style="border:1px solid #000000;text-align: center;">Référence 1</th>
                            <th style="border:1px solid #000000;text-align: center;">N° Statistique</th>
                            <th style="border:1px solid #000000;text-align: center;">Montant acquité</th>
                            <th style="border:1px solid #000000;text-align: center;">Contrôle</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border-right:1px solid #000000;border-bottom:1px solid #ffffff;border-top:1px solid #000000;text-align: center;"></td>
                                <td style="border-right:1px solid #000000;border-bottom:1px solid #ffffff;border-top:1px solid #000000;text-align: center;">01&nbsp;&nbsp;&nbsp;&nbsp;PB</td>
                                <td style="border-right:1px solid #000000;border-bottom:1px solid #ffffff;border-top:1px solid #000000;text-align: center;">4751-101</td>
                                <td style="border-right:1px solid #000000;border-bottom:1px solid #ffffff;border-top:1px solid #000000;text-align: center;">39</td>
                                <td style="border-right:1px solid #000000;border-bottom:1px solid #ffffff;border-top:1px solid #000000;text-align: center;"></td>
                                <td style="border-right:1px solid #000000;border-bottom:1px solid #ffffff;border-top:1px solid #000000;text-align: center;">113414R</td>
                                <td style="border-right:1px solid #000000;border-bottom:1px solid #ffffff;border-top:1px solid #000000;text-align: center;">**********30.240.076</td>
                                <td style="border-right:1px solid #000000;border-bottom:1px solid #ffffff;border-top:1px solid #000000;text-align: center;"></td>
                            </tr>
                            <!--  -->
                            <tr rospan="3" style="height: 50px;">
                                <td style="border:1px solid #000000;text-align: center;"></td>
                                <td style="border:1px solid #000000;text-align: center;"></td>
                                <td style="border:1px solid #000000;text-align: center;"></td>
                                <td style="border:1px solid #000000;text-align: center;"></td>
                                <td style="border:1px solid #000000;text-align: center;"></td>
                                <td style="border:1px solid #000000;text-align: center;"></td>
                                <td style="border:1px solid #000000;text-align: center;">***</td>
                                <td style="border:1px solid #000000;text-align: center;"></td>
                            </tr>
                            <!--  -->
                            <tr>
                                <td colspan="6" style="border-left:1px solid #ffffff;border-right:1px solid #000000;border-bottom:1px solid #ffffff;">Acun duplicata ne pourra être délivré.</td>
                                <!-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td> -->
                                <td style="border:1px solid #000000;">**********30.240.076</td>
                                <td style="border:1px solid #ffffff;">----</td>
                            </tr>
                        </tbody>
                    </tr>
                </table>
            </div>
        </div>
       <!-- End -->

       <!-- Footer -->
       <div class="row content_footer">
           <div class="col-md-3">
               <?php echo "<img src='".$file."'' width=50%>" ?>
           </div>
           <div class="col-md-4">
               <strong>Agnet habilité:</strong> <span>EDIMA OKOUMBA RAPHAEL</span><br>
               <strong>Visa:</strong> <span>106537</span><br>
           </div>
           <div class="col-md-3">
               <strong class="pull-right">Original</strong>
           </div>
       </div>
       <!-- End -->
   </div>

<script src="../vendors/scripts/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        
        $('#report').hide();
        setTimeout(function(){
           $('#loadingMask').fadeOut('slow');
           
           $('#report').show();

           let printContents, popupWin;
          printContents = document.getElementById('report').innerHTML;
          popupWin = window.open('', '_blank', 'top=0,left=0,height=100%,width=auto');
          popupWin.document.open();
          popupWin.document.write('<html><head><title></title></head><body onload="window.print();window.close()"><style media="print" type="text/css">.content_footer{margin-top:3% !important;}.pull-right{position:relative;text-align:right;float:right;}.table{width:100%;}table {border-collapse: collapse;}td, th {border: 1px solid #999;padding: 0.5rem;text-align: left;} *{font-family: Arial, Helvetica, sans-serif; font-weight:bold;}  *{ color-adjust: exact;  -webkit-print-color-adjust: exact; print-color-adjust: exact;} .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6,.col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {float: left;} .col-md-12 {width: 100%;}.col-md-11 {width: 91.66666666666666%;}.col-md-10 {width: 83.33333333333334%;}.col-md-9 {width: 75%;}.col-md-8 {width: 66.66666666666666%;}.col-md-7 {width: 58.333333333333336%;}.col-md-6 {width: 50%;}.col-md-5 {width: 41.66666666666667%;}.col-md-4 {width: 33.33333333333333%;}.col-md-3 {width: 25%;}.col-md-2 {width: 16.666666666666664%;}.col-md-1 {width: 8.333333333333332%;}.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6,.col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {float: left;} .col-lg-12 {width: 100%;}.col-lg-11 {width: 91.66666666666666%;}.col-lg-10 {width: 83.33333333333334%;}.col-lg-9 {width: 75%;}.col-lg-8 {width: 66.66666666666666%;}.col-lg-7 {width: 58.333333333333336%;}.col-lg-6 {width: 50%;}.col-lg-5 {width: 41.66666666666667%;}.col-lg-4 {width: 33.33333333333333%;}.col-lg-3 {width: 25%;}.col-lg-2 {width: 16.666666666666664%;}.col-lg-1 {width: 8.333333333333332%;}.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6,.col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {float: left;} .col-sm-12 {width: 100%;}.col-sm-11 {width: 91.66666666666666%;}.col-sm-10 {width: 83.33333333333334%;}.col-sm-9 {width: 75%;}.col-sm-8 {width: 66.66666666666666%;}.col-sm-7 {width: 58.333333333333336%;}.col-sm-6 {width: 50%;}.col-sm-5 {width: 41.66666666666667%;}.col-sm-4 {width: 33.33333333333333%;}.col-sm-3 {width: 25%;}.col-sm-2 {width: 16.666666666666664%;}.col-sm-1 {width: 8.333333333333332%;}.col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6,.col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12 {float: left;} .col-xl-12 {width: 100%;}.col-xl-11 {width: 91.66666666666666%;}.col-xl-10 {width: 83.33333333333334%;}.col-xl-9 {width: 75%;}.col-xl-8 {width: 66.66666666666666%;}.col-xl-7 {width: 58.333333333333336%;}.col-xl-6 {width: 50%;}.col-xl-5 {width: 41.66666666666667%;}.col-xl-4 {width: 33.33333333333333%;}.col-xl-3 {width: 25%;}.col-xl-2 {width: 16.666666666666664%;}.col-xl-1 {width: 8.333333333333332%;}</style>'+printContents+'</body></html>'
           );
           popupWin.document.close(); 

        },5000);

    });
</script>
</body>
</html>