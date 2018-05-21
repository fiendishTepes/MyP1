<div class="container">
	<form method="post"> 
		<div class="col-lg-4">
			<input class="form-control input" type="text" name="n[input]">
		</div>
		<button class="btn btn-info" type="submit">SUBMIT</button>
	</form>
</div>

<script>
	$(document).ready(function() 
	{
		$('.input').focusout(function()
		{
			var username = $('.input').val();
			$.ajax(
			{
				url: '../../app/myjs/test.php',
				method: 'post',
				data: {username: username},
				success: function (data) {
					alert(data);
				}
			});
		});
	});
</script>