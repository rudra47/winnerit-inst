//Delete Jquery
$(document).ready(function() {
	$('.destroy').click(function(e) {
	    e.preventDefault();
	    let link = $(this).attr("delete-link");

		const swalWithBootstrapButtons = Swal.mixin({
		  customClass: {
		    confirmButton: 'btn btn-success',
		    cancelButton: 'btn btn-danger'
		  },
		  buttonsStyling: false
		})

		swalWithBootstrapButtons.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonText: 'Yes, delete it!',
		  cancelButtonText: 'No, cancel!',
		  reverseButtons: true
		}).then((result) => {
		  if (result.isConfirmed) {
		    swalWithBootstrapButtons.fire(
		      'Deleted!',
		      'Your file has been deleted.',
		      'success'
		    )
		    $.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
			});
		    $.ajax({
		        url: link,
		        type: 'DELETE', 
		        success: function(result) {
		            console.log(result);
		            location.reload();
		        }
		    });
		  } else if (
		    /* Read more about handling dismissals below */
		    result.dismiss === Swal.DismissReason.cancel
		  ) {
		    swalWithBootstrapButtons.fire(
		      'Cancelled',
		      'Your imaginary file is safe :)',
		      'error'
		    )
		  }
		})
	   
	});

	// Change Password
	$('#change_pass').click(function(e) {
		e.preventDefault();
		let route = $(this).attr('link');
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: route,
			type: 'get', 
			success: function(result) {
				$('#password').val(result.password);
			}
		});
	});

	// Edit Jquery
	// $(".edit").click(function (e) {
	// 	e.preventDefault();
	// 	let editRoute = $(this).attr('link');
	// 	let updateRoute = $(this).attr('update-link');
	// 	console.log(editRoute);
	// 	$.ajaxSetup({
	// 		headers: {
	// 			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	// 		}
	// 	});
	// 	$.ajax({
	// 		url: editRoute,
	// 		type: 'get', 
	// 		success: function(result) {
	// 			$('#name').val(result.designation.name);
	// 			$('.form-horizontal').attr('action', updateRoute);
	// 			$('.form-horizontal').attr('method', 'PUT');
	// 		}
	// 	});
	// });
	// // Update Query
	// $('#submit').click(function(e){
	// 	e.preventDefault();
	// 	/*Ajax Request Header setup*/
	// 	$.ajaxSetup({
	// 		headers: {
	// 			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	// 		}
	// 	});
	// 	/* Submit form data using ajax*/
	// 	$.ajax({
	// 	   url: "{{ url('jquery-ajax-form-submit')}}",
	// 	   method: 'post',
	// 	   data: $('#contact_us').serialize(),
	// 	   success: function(response){
	// 		  //------------------------
	// 			 $('#send_form').html('Submit');
	// 			 $('#res_message').show();
	// 			 $('#res_message').html(response.msg);
	// 			 $('#msg_div').removeClass('d-none');
	 
	// 			 document.getElementById("contact_us").reset(); 
	// 			 setTimeout(function(){
	// 			 $('#res_message').hide();
	// 			 $('#msg_div').hide();
	// 			 },10000);
	// 		  //--------------------------
	// 	   }});
	// 	});

});