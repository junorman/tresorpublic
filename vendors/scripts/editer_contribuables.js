$(document).ready(function(){
            
            var type = "";

            $('#msg-error').hide();
            $('#msg-success').hide();
            $('#msg-nom').hide();
            $('#msg-prenom').hide();
            $('#msg-tel').hide();
            $('#msg-nif').hide();
            $('#msg-type').hide();
            $('#input2').hide();

            $('#type').change(function(){
                //e.preventDefault();
               type = $(this).val();

               if (type == 1) {
                 $('#input1').show();
                 $('#input2').hide();

               }else{
                 $('#input1').hide();
                 $('#input2').show();
                 
               }
                
            });

            $('.btn-add').click(function(e){
                e.preventDefault();
                var nom = $('#nom').val();
                var prenom = $('#prenom').val();
                var tel = $('#tel').val();
                var sexe = $('#sexe').val();
                var id_cont = $('#id_cont').val();
                var nif = $('#nif').val();

                if (nom.length == '') {
                     $('#msg-nom').show();
                     $('#msg-nom').
                     html("Veuillez saisir le nom complet ***").fadeIn();
                     $('#msg-nom').focus();
                     $('#msg-nom').css("color", "red");
                     setTimeout(function(){
                     $('#msg-nom').fadeOut('slow');
                     },5000);
                     return false;
                }

                else if (prenom.length == '') {
                     $('#msg-prenom').show();
                     $('#msg-prenom').
                     html("Veuillez saisir le prenom ***").fadeIn();
                     $('#msg-prenom').focus();
                     $('#msg-prenom').css("color", "red");
                     setTimeout(function(){
                     $('#msg-prenom').fadeOut('slow');
                     },5000);
                     return false;
                }else if (tel.length == ''  || tel.length != '9') {
                     $('#msg-tel').show();
                     $('#msg-tel').
                     html("Veuillez saisir le numéro de téléphone la taille maximale est de 9 caractères ***").fadeIn();
                     $('#msg-tel').focus();
                     $('#msg-tel').css("color", "red");
                     setTimeout(function(){
                     $('#msg-tel').fadeOut('slow');
                     },5000);
                     return false;
                }else if($.isNumeric(tel) == false){
                  $('#msg-tel').show();
                     $('#msg-tel').
                     html("Veuillez saisir le numéro de téléphone en chiffre ***").fadeIn();
                     $('#msg-tel').focus();
                     $('#msg-tel').css("color", "red");
                     setTimeout(function(){
                     $('#msg-tel').fadeOut('slow');
                     },5000);
                     return false;
                }else if(tel.charAt(0) != '0'){
                  $('#msg-tel').show();
                     $('#msg-tel').
                     html("Veuillez saisir un numéro valide ***").fadeIn();
                     $('#msg-tel').focus();
                     $('#msg-tel').css("color", "red");
                     setTimeout(function(){
                     $('#msg-tel').fadeOut('slow');
                     },5000);
                     return false;
                }
                else if(type.length == ''){
                  $('#msg-type').show();
                     $('#msg-type').
                     html("Veuillez sélectionner un type ***").fadeIn();
                     $('#msg-type').focus();
                     $('#msg-type').css("color", "red");
                     setTimeout(function(){
                     $('#msg-type').fadeOut('slow');
                     },5000);
                     return false;
                }else{

                    $.ajax({  
                    url:"../traitements/editer_contribuable.php",  
                    method:"POST",  
                    data:{nom:nom, prenom:prenom, tel:tel, 
                      type:type, sexe:sexe, id_cont:id_cont,
                      nif:nif},  
                    success:function(res)  
                        { 
                            

                            if (res=="errors") {

                               /* $('#msg-nif').show();
                                $('#msg-nif').fadeIn();
                                $('#msg-nif').focus();
                                             setTimeout(function(){
                                $('#msg-nif').fadeOut('slow');
                                 },5000);
                                return false; */

                                alert("Veuillez saisir le nif");
                                 
                             }
                            else if (res=="success") {
                                $('#msg-success').show();
                                $('#msg-success').fadeIn();
                                $('#msg-success').focus();
                                             setTimeout(function(){
                                $('#msg-success').fadeOut('slow');
                                 },5000);
                                 
                            }
                            /*else if (res=="error") {

                                $('#msg-error').show();
                                $('#msg-error').fadeIn();
                                $('#msg-error').focus();
                                             setTimeout(function(){
                                $('#msg-error').fadeOut('slow');
                                 },5000);
                                return false; 
                                 
                             }*/
                        }
                    });
                    
                }
               
            });
        });