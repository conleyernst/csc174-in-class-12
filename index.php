<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div id="live_data">
		
		function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      } 
		
	</div>

</body>
</html>