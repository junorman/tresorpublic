$(document).ready(function(){
            
    $('#msg-success').hide();
    $('.btn-add').click(function(e){
    	e.preventDefault();
    	var donnee = $('#edit-rec').serialize();
    	
    	$.ajax({  
            url:"traitements/editer_recette.php",  
            method:"POST",  
            data:donnee,
            success:function(res)  
                {   
                	$('#reponse').html(res);
                }
            });
    });
    });