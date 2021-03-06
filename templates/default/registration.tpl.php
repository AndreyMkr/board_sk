<? if ($active !== TRUE): ?>
	<form method="post" id="registration">
		<div class="form-group">
			<label for="reg_login">Логин</label>
			<input id="reg_login" class="form-control" type="text" name="reg_login" placeholder="Введите ваш логин" value="<?= $_SESSION['msg']['reg']['login'] ?>"/><br>
		</div>

		<div class="form-group">
			<label for="reg_email">Email</label>
			<input id="reg_email" class="form-control" type="text" name="reg_email" placeholder="Введите ваш email адрес" value="<?= $_SESSION['msg']['reg']['email'] ?>"/><br>
		</div>

		<div class="form-group">
			<label for="reg_name">Имя</label>
			<input id="reg_name" class="form-control" type="text" name="reg_name" placeholder="Введите ваше имя" value="<?= $_SESSION['msg']['reg']['name'] ?>"/><br>
		</div>

		<div class="form-group">
			<label for="reg_password">Пароль</label>
			<input id="reg_password" class="form-control" type="password" name="reg_password" placeholder="Введите ваш пароль"/><br>
		</div>

		<div class="form-group">
			<label for="reg_password_confirm">Подтвердите пароль</label>
			<input id="reg_password_confirm" class="form-control" type="password" name="reg_password_confirm" placeholder="Подтвердите ваш пароль"/><br>
		</div>

		<div class="form-group">
			<label for="reg_phone">Телефон</label>
			<input id="reg_phone" class="form-control" type="text" name="reg_phone" value="" size="">
		</div>

		<div class="form-group">
			<input id="reg_button" type="submit" class="btn btn-primary" value="Зарегистрироваться" name="reg"/>
		</div>
	</form>

	<script>
		var listCountries = $.masksSort($.masksLoad("/templates/default/js/inputmask/data/phone-codes.json"), ['#'], /[0-9]|#/, "mask");
		var maskOpts = {
			inputmask: {
				definitions: {
					'#': {
						validator: "[0-9]",
						cardinality: 1
					}
				},
				showMaskOnHover: false,
				autoUnmask: true,
				clearMaskOnLostFocus: false
			},
			match: /[0-9]/,
			replace: '#',
			listKey: "mask"
		};

		$('#reg_phone').inputmasks($.extend(true, {}, maskOpts, {
			list: listCountries
		}));
	</script>
<? endif; ?>