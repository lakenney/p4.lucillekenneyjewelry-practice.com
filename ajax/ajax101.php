<!DOCTYPE html>

<html>

<head>

</head>

<body>

	<form>
    	<input type='text' id='name' name='name'>

        <div id='response'></div>
        <input type='submit'>
    </form>

    <br><br>


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="../ajax/js/form.js"></script>
    <script type="text/javascript" src="../ajax/js/jquery.form.js"></script>

    <script>

    	var options = {
    		type: 'post',
    		url: 'process.php',
    		success: function(response) {
    			$('#response').html(response);
    		}
    	};

    	$('form').ajaxForm(options);

    	/*imagine sending contents of a post, what would happen on process.php (which is actually a controller) it would do a database insert ... 
        gather up the post data, insert into the database and probably send some feedback to the user
        then you would take that feedback and do something with it to the */

    	/*$('button').click(function(){

    		$.ajax(
    			{
    				type:'POST',
    				url: 'process.php',
    				// success option will automatically feed to the function attached to success what the results are.
    				success: function(response) {
    					console.log(response);
    					$('#response').html(response);
    				},
    				data: {
    					name: $('#name').val()
    				}
    			}
    		);
    	});*/
		    </script>

    

</body>
</html>