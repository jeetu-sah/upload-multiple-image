<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top:15px;">
  <div class="row">
    <div class="col-sm-12">
    <form id="form_post">
      <div class="form-group">
            <input type="file" name="files[]" id="images" class="form-control" multiple />
            <input type="text" name="imageArrCount" id="imageArrCount" value="" />
        </form>
      </div>
      </form>
    </div>  
    <div id="result" style="display:none;">
     <img src="loading.gif" style="height:100px;" />
    </div>  
    <div id="result22"></div>
    <div id="result22"></div>
    <div id="response"></div>
  </div>
</div>
<script>
$(document).ready(function(e) {
 $(document).on('change','#images',function(){
	$("#response").html(" ");
	var form_data = new FormData(); 
	var imageArrCount = $("#imageArrCount").val();
	form_data.append('imageArrCount' , imageArrCount);
	var i = 0;
	//var files = [];
	var err = '';
	var extArr =  ["gif" , "jpeg" , "jpg" , "png" , "svg" ,"mp4" ,"mp3"];
	$.each($('#images')[0].files , function(index , files){
	   var extension = files.name.substring(files.name.lastIndexOf('.') + 1); //alert(extArr);
	   console.log(extension);
	     if(! $.inArray(extension , extArr) ){
		      err += files.name + "Format is invalid";
		      $("#result222").html(err);
		  }
		 else{
		    form_data.append('files[]', $('#images')[0].files[index]);    
		  } 
	 	});
	//console.log(form_data);
    //form_data.append('files', file_data);
	$.ajax({
        url: 'demo.php', // point to server-side PHP script 
		data: form_data ,                         
        type: 'post',
		//dataType:"JSON",
        cache: false,
        contentType: false,
        processData: false,
		beforeSend: function(){
		  $("#result22").html("uploading ...");
		},
        success: function(data){
          var parseJson = jQuery.parseJSON(data);
		   console.log(parseJson);
		   //$("#response").html(data);
		  
		   var html_content = '';
		       html_content += '<ul>';
			   $.each(parseJson.arr , function(index , value){
				   html_content += '<li><img src="'+value+'" style="height:100px; width:100px;"></li>';
			   });
		       html_content += '</ul>'; 
		   $("#response").html(html_content);
		   $("#imageArrCount").val(parseJson.countImageArr);
		}
     });
 });   
});
   
</script>

</body>
</html>
