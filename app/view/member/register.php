<div class="row">
	<div class="container">
		<div class="col-lg-6">
			<form method="post" name="fmRegister" id="fmRegister" action="/<?php echo DOMAIN; ?>/member/register">
				<div class="form-group">
					<label>
						First Name:
					</label>
					<input class="form-control" type="text" name="reg[fName]" id="reg[fName]">
				</div>
				<div class="form-group">
					<label>
						Last Name:
					</label>
					<input class="form-control" type="text" name="reg[lName]" id="reg[lName]">
				</div>
				<div class="form-group">
					<label>
						Address:
					</label>
					<textarea class="form-control" name="reg[address]" id="reg[address]">

					</textarea>
				</div>
				<div class="form-group">
					<label>
						E-Mail:
					</label>
					<input class="form-control" type="text" name="reg[mail]" id="reg[lmail]">
				</div>
				<div class="form-group">
					<label>
						Phone:
					</label>
					<input class="form-control" type="number" name="reg[phone]" id="reg[phone]">
				</div>
				<div class="form-group">
					<label>
						UserName:
					</label>
					<input class="form-control" type="text" name="reg[username]" id="reg[username]">
				</div>
				<div class="form-group">
					<label>
						Password:
					</label>
					<input class="form-control" type="text" name="reg[password]" id="reg[password]">
				</div>
				<div class="form-group center-block ">
					<button type="submit" class="btn btn-info">REGISTER</button>
					<button type="RESET" class="btn btn-danger">REGISTER</button>
				</div>
			</form>
		</div>
	</div>
</div>