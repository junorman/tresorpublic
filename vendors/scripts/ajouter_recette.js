$(document).ready(function(){
            
    $('#msg-error').hide();
    $('#msg-success').hide();
    $('.btn-add').click(function(e){
    	e.preventDefault();
    	var donnee = $('#add-rec').serialize();
    	
    	$.ajax({  
            url:"../traitements/ajouter_recette.php",  
            method:"POST",  
            data:donnee,
            success:function(res)  
                {   
                	$('#reponse').html(res);
                }
            });
    });
    });