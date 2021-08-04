$(document).ready(function(){
            
    $('.btn-delete').click(function(e){
    	e.preventDefault();
    	var id = $(this).attr('id');
    	
    	$.ajax({  
            url:"traitements/supprimer_type.php",  
            method:"POST",  
            data:{id:id},  
            success:function(res)  
                {   
                	$('#'+id).remove();
                	if (res=="success") {
                        $('#msg-error').text('Type supprimé avec succès !');
                        $('#msg-error').show();
                        $('#msg-error').fadeIn();
                        $('#msg-error').focus();
                                     setTimeout(function(){
                        $('#msg-error').fadeOut('slow', function(){ $('#msg-error').text('Ce type existe déjà !'); });
                         },5000);
                        return false; 
                         
                     }
                	
                }
            });
    });
    });