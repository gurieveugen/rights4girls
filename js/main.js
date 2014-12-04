jQuery(document).ready(function(){
	jQuery('#signup').submit(function(e){

		jQuery.ajax({
			type: "POST",
			dataType: 'JSON',
			data: jQuery('#signup').serializeArray(),
			url: current_page_url + 'ajax.php',
			success: function(response){
				if(jQuery('#signup .success').length)
				{
					jQuery('#signup .success').remove();	
				}

				if(jQuery('#signup .error').length)
				{
					jQuery('#signup .error').remove();	
				}

				if(response.result)
				{
					jQuery('#signup [name="email"]').after('<label class="success"><span class="fa fa-check-circle-o"></span>Success! thank you for subscribing.</label>');
				}
				else
				{
					jQuery('#signup [name="email"]').after('<label class="error"><span class="fa fa-times-circle-o"></span>Something’s wrong! Please try again.</label>');
				}

				jQuery('#signup [name="email"]').val('');
			}
		});

		e.preventDefault();
	});
});