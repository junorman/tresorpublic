$(document).ready(function(){
            
    $('#msg-error').hide();
    $('#msg-success').hide();
    $('#msg-lib-cat').hide();
    $('.btn-add').click(function(e){
    	e.preventDefault();
    	var libelle = $('#lib-cat').val();
    	
    	$.ajax({  
            url:"../traitements/ajouter_categorie.php",  
            method:"POST",  
            data:{libelle:libelle},  
            success:function(res)  
                {   
                	$('#reponse').html(res);
                }
            });
    });
    });