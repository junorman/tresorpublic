$(document).ready(function(){
            
    $('#msg-error').hide();
    $('.btn-delete').click(function(e){
    	e.preventDefault();
    	var id = $(this).attr('id');
    	
    	$.ajax({  
            url:"../traitements/supprimer_recette.php",  
            method:"POST",  
            data:{id:id},  
            success:function(res)  
                {   
                	$('#'+id).remove();
                	if (res=="success") {

                        $('#msg-error').show();
                        $('#msg-error').fadeIn();
                        $('#msg-error').focus();
                                     setTimeout(function(){
                        $('#msg-error').fadeOut('slow');
                         },5000);
                        return false; 
                         
                     }
                	
                }
            });
    });
    });