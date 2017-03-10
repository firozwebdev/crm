$(document).ready(function(){
	 
	$( "#button1id" ).click(function( event ) {
		  if(document.property_form.property_name.value=="")
		  {
		    alert("Please Enter Property Name.");
		    document.property_form.property_name.focus();
		    return false;
		  }
		  if(document.property_form.property_type.value==0)
		  {
		    alert("Please Select Property type.");
		    document.property_form.property_type.focus();
		    return false;
		  }
		  if(document.property_form.property_address_1.value=="")
		  {
		    alert("Please Enter Address.");
		    document.property_form.property_address_1.focus();
		    return false;
		  }
		  if(document.property_form.property_city.value=="")
		  {
		    alert("Please Enter your City.");
		    document.property_form.property_city.focus();
		    return false;
		  }
		  if(document.property_form.property_state.value=="")
		  {
		    alert("Please Enter State.");
		    document.property_form.property_state.focus();
		    return false;
		  }
		  if(document.property_form.property_zip.value=="")
		  {
		    alert("Please Enter Zip Code.");
		    document.property_form.property_zip.focus();
		    return false;
		  } 
		else
		  {
		    return true;
		  }
	});
	
	$('#folder_id').change(function(){ 
		if( $('#folder_id').val()=='Add' )
		{ 
			$('#add_folder').show();
		}
		else
		{ 
			$('#add_folder').hide();
		}
	});
	
	
});