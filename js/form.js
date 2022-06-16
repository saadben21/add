$("#myForm").submit(function(){
    // e.preventDefault(); //empêcher une action par défaut
    var form_url = $(this).attr("action"); //récupérer l'URL du formulaire
    var form_method = $(this).attr("method"); //récupérer la méthode GET/POST du formulaire
    var form_data = $(this).serialize(); //Encoder les éléments du formulaire pour la soumission
    
    $.ajax({
      url : form_url,
      type: form_method,
      data : form_data
    }).done(function(response){ 
      $("#res").html(response);
    });
  });