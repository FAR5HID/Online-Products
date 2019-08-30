$(document).ready(function(){
	/* Handling get products */
	function get_products() {
		$.ajax({				
			type : 'GET',
			url  : 'response1.php?action=list',
			success : function(response1){
				response1 = JSON.parse(response1);
				var tr;
		      	$('#prd_body').html('');
		      	$.each(response1, function( index, prd ) {
				  tr = $('<tr/>');
		            tr.append("<td>" + prd.Name + "</td>");
		            tr.append("<td>" + prd.Description + "</td>");
		            tr.append("<td>" + prd.Cost + "</td>");

	            	var action = "<td><div class='btn-group' data-toggle='buttons'>";
	            	action += "<a href='#' target='_blank' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#edit_model'>Edit</a>";
	            	action += "<a href='#' target='_blank' class='btn btn-danger btn-xs'>Delete</a>";
		            tr.append(action);
		            $('#prd_body').append(tr);
				});
			}
		});
	}
	
	//initialize method on load
 	function init() {
 		get_products();
 	}
 	init();
});