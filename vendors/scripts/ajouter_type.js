$(document).ready(function(){
            
    $('#msg-error').hide();
    $('#msg-success').hide();
    $('#msg-lib-type').hide();
    $('.btn-add').click(function(e){
    	e.preventDefault();
    	var libelle = $('#lib-type').val();
    	
    	$.ajax({  
            url:"../traitements/ajouter_type.php",  
            method:"POST",  
            data:{libelle:libelle},  
            success:function(res)  
                {   
                	$('#reponse').html(res);
                }
            });
    });
    });