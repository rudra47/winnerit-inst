@extends('backEnd.user.layout.main')

@section('panel-title')
User Profile Update
@endsection
@section('content')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css"> 
  <meta name="csrf-token" content="{{ csrf_token() }}">
					
      <div class="panel panel-info">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4 text-center">
            <div id="upload-demo"></div>
            </div>
            <div class="col-md-4" style="padding:6%;">
            <input type="file" id="image" class="btn btn-primary btn-block" required>
            <button class="btn btn-primary btn-block upload-image" style="margin-top:2%;display: none">Upload Image</button>
            </div>
          </div>
     
        </div>
      </div>

<script type="text/javascript">
 
$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
 
 
var resize = $('#upload-demo').croppie({
    enableExif: true,
    enableOrientation: true,    
    viewport: { // Default { width: 100, height: 100, type: 'square' } 
        width: 250,
        height: 250,
        type: 'circle' //square
    },
    boundary: {
        width: 350,
        height: 350
    }
});
 
 
$('#image').on('change', function () { 
    $(".upload-image").show();
  var reader = new FileReader();
    reader.onload = function (e) {
      resize.croppie('bind',{
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
});
 
 
$('.upload-image').on('click', function (ev) {
  resize.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (img) {
    $.ajax({
      url: "{{route('user.uplodeImage')}}",
      type: "POST",
      data: {"image":img},
      success: function (data) {
        location.replace("{{route('user.profile')}}");
      }
    });
  });
});
 
 
</script>

@endsection



