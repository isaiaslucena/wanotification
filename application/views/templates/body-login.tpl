{extends file="head.tpl"}
{block name=body}
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-md-3 col-center">
			{include file="body-banner.tpl"}
			<div class="row">
				<div id="inputuser" class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><span class=" fa fa-user"></span></div>
						<input class="form-control" type="text" id="user" name="user" placeholder="Usuário" autocomplete="off"/>
					</div>
				</div>
				<div id="inputpass" class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><span class="fa fa-lock"></span></div>
						<input class="form-control" type="password" id="pass" name="pass" placeholder="Senha" autocomplete="off"/>
					</div>
				</div>
				<div class="form-group">
					<button id="submitbnt" class="btn btn-coke btn-block">
						Entrar
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
{literal}
<script type="text/javascript">
	$(document).ready(function() {
		$("#pass").keypress(function(event) {
			if (event.which == 13) {
				event.preventDefault();
				sendlogin();
			}
		});

		$('#submitbnt').click(function() {
			sendlogin();
		});

		function sendlogin() {
			username = $('#user').val();
			password = $('#pass').val();

			$('#submitbnt').html('<span class="fa fa-refresh fa-spin"></span> Aguarde...');
			$('#submitbnt').attr('disabled', 'true');
			$('#submitbnt').addClass('disabled');

			$.post('/login', {
				username: username,
				password: password
			},
			function(data, textStatus, xhr) {
				jdata = $.parseJSON(data);
				if (jdata.status == 'success') {
					$('#inputuser').removeClass('has-error');
					$('#inputpass').removeClass('has-error');
					$('#user').css('background-color', '#E7FFE9');
					$('#pass').css('background-color', '#E7FFE9');
					$('#inputuser').addClass('has-success');
					$('#inputpass').addClass('has-success');
					$('#spini').addClass('hidden');
					$('#spini').removeClass('fa-spin');
					$('#submitbnt').html('Entrar');
					window.location.replace("/home");
				} else if (jdata.status == 'error') {
					$('#user').val(null);
					$('#pass').val(null);
					$('#user').attr('placeholder', 'Usuário ou senha incorretos!');
					$('#pass').attr('placeholder', 'Usuário ou senha incorretos!');
					$('#user').css('background-color', '#FFE7E9');
					$('#pass').css('background-color', '#FFE7E9');
					$('#inputuser').addClass('has-error');
					$('#inputpass').addClass('has-error');
					$('#spini').addClass('hidden');
					$('#spini').removeClass('fa-spin');
					$('#submitbnt').html('Entrar');
					$('#submitbnt').removeAttr('disabled');
					$('#submitbnt').removeClass('disabled');
					$('#user').focus();
				}
			});
		}
	});
</script>
{/literal}
{/block}