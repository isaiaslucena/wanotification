<?php
/* Smarty version 3.1.30, created on 2017-06-01 11:15:40
  from "/app/application/views/templates/body-login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5930218c57d6c7_62964870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f937b89cd290b054f01c0d807e0b84e6a9aac05d' => 
    array (
      0 => '/app/application/views/templates/body-login.tpl',
      1 => 1496325678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:body-banner.tpl' => 1,
  ),
),false)) {
function content_5930218c57d6c7_62964870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6373931665930218c577e60_77467327', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_6373931665930218c577e60_77467327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-md-3 col-center">
			<?php $_smarty_tpl->_subTemplateRender("file:body-banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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

<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'body'} */
}
