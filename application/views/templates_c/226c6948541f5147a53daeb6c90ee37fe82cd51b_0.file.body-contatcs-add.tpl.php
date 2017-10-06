<?php
/* Smarty version 3.1.30, created on 2017-06-07 11:08:13
  from "/app/application/views/templates/body-contatcs-add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593808cd1e7153_41834675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '226c6948541f5147a53daeb6c90ee37fe82cd51b' => 
    array (
      0 => '/app/application/views/templates/body-contatcs-add.tpl',
      1 => 1496844490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:body-banner.tpl' => 1,
  ),
),false)) {
function content_593808cd1e7153_41834675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1068200133593808cd1d9ae0_73369653', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_1068200133593808cd1d9ae0_73369653 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-md-12 col-center">
 			<?php $_smarty_tpl->_subTemplateRender("file:body-banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<div class="row">
				<div class="col-xs-12 col-md-3 col-center">
					
						<div class="form-group">
							<div id="formname" class="input-group">
								<div class="input-group-addon"><span class="fa fa-user"></span></div>
								<input class="form-control" type="text" id="name" name="name" placeholder="Nome" autocomplete="off"/>
								<input class="form-control" type="text" id="surname" name="surname" placeholder="Sobrenome" autocomplete="off"/>
							</div>
							<span id="nameerr" class="help-block hidden text-center"></span>
						</div>
						<div class="form-group">
							<div id="formphone" class="input-group">
								<div class="input-group-addon"><span class="fa fa-phone"></span></div>
								<input class="phonei" style="border: hidden; position: relative; display: inline; height: 100%; width: 100%;" type="tel" id="phone01" name="phone01" placeholder="Telefone"/>
								<input class="phonei" style="border: hidden; position: relative; display: inline; height: 100%; width: 100%;" type="tel" id="phone02" name="phone02" placeholder="Confirmação do Telefone"/>
							</div>
						</div>
							<span id="phoneerr" class="help-block hidden text-center has-error"></span>
						<div class="form-group">
							<label id="labelbtnpubkey" class="btn btn-coke btn-block" data-toggle="tooltip" title="Carregar chave pública">
								<i class="fa fa-key"></i> Chave
								<span id="labelpubkey"></span>
								<input type="file" id="pubkey" name="pubkey" class="hidden"/>
							</label>
						</div>
						<div class="form-group">
							<button id="formbtnsub" disabled class="btn btn-coke btn-block disabled" type="submit"><i class="fa fa-plus-circle"></i> Adicionar</button>
						</div>
						<div class="form-group">
							<a href="/contacts" class="btn btn-coke btn-block"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
						</div>
						<textarea id="pubkeycontent" class="hidden"></textarea>
						<textarea id="encrypcontent" class="hidden"></textarea>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 src="/asset/openpgpjs/openpgp.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready( function() {
		var namesuccess, surnamesuccess, phonesuccess, phonenum, encryptedgpg, file;

		$('[data-toggle="tooltip"]').tooltip();

		$(".phonei").intlTelInput({
			autoHideDialCode: false,
			placeholderNumberType: "MOBILE",
			initialCountry: "br",
			separateDialCode: true,
			loadUtils: "asset/int-tel-input/build/js/utils.js"
		});

		var maskBehavior = function (val) {
			return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
		},
		options = {onKeyPress: function(val, e, field, options) {
			field.mask(maskBehavior.apply({}, arguments), options);
		}
		};

		$('.phonei').mask(maskBehavior, options);

		$('#name').on('blur', function() {
			namei = $('#name').val();
			if (namei.length > 0 && namei.length < 3) {
				$('#nameerr').html('O nome não pode ser muito curto!');
				$('#nameerr').removeClass('hidden');
				$('#name').addClass('has-error');
				$('#name').focus();
			} else if (namei.length == 0) {
				$('#nameerr').html('O nome não pode está em branco!');
				$('#nameerr').removeClass('hidden');
				$('#name').addClass('has-error');
				$('#name').focus();
			} else {
				$('#nameerr').addClass('hidden');
				$('#name').addClass('has-success');
				namesuccess = 1;
			}
		});

		$('#surname').on('blur', function(){
			surnamei = $('#surname').val();
			if (surnamei.length > 0 && surnamei.length < 4) {
				$('#surname').addClass('has-error');
				$('#nameerr').html('O sobrenome não pode ser muito curto!');
				$('#nameerr').removeClass('hidden');
				$('#formname').removeClass('has-error');
				$('#surname').focus();
			} else if (surnamei.length = 0) {
				$('#nameerr').html('O sobrenome não pode está em branco!');
				$('#nameerr').removeClass('hidden');
				$('#name').addClass('has-success');
				$('#surname').focus();
			} else {
				$('#nameerr').addClass('hidden');
				$('#surnname').addClass('has-success');
				surnamesuccess = 1;
			}
		});

		$('#phone02').on('blur', function() {
			phonel01 = $('#phone01').val();
			phonel02 = $('#phone02').val();
			if (phonel01.length && phonel02.length > 0) {
				phonen01c = $('#phone01').intlTelInput("getSelectedCountryData")
				phonen02c = $('#phone02').intlTelInput("getSelectedCountryData")
				phonen01 = phonen01c.dialCode+$('#phone01').cleanVal();
				phonen02 = phonen02c.dialCode+$('#phone02').cleanVal();
				if (phonen01 == phonen02) {
					$('#phoneerr').addClass('hidden');
					// $('#formphone').removeClass('has-error');
					// $('#formphone').addClass('has-success');
					// if (file > 0) {
					if (typeof file !== 'undefined') {
						$('#formbtnsub').removeClass('disabled');
						$('#formbtnsub').attr('disabled', false);
					}
					phonenum = phonen01;
					phonesuccess = 1;
				}else {
					$('#phoneerr').removeClass('hidden');
					// $('#formphone').addClass('has-error');
					$('#phoneerr').text('Os números de telefone não conferem!');
					$('#formbtnsub').addClass('disabled');
					$('#formbtnsub').attr('disabled', true);
					$('#phone01').focus();
				}
			}
		});

		$(document).on('change', ':file', function() {
			var input = $(this),
			numFiles = input.get(0).files ? input.get(0).files.length : 1,
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [numFiles, label]);
		})

		$(':file').on('fileselect', function(event, numFiles, label) {
			$('#labelpubkey').text(label);
			if (numFiles == 1 && namesuccess == 1 && surnamesuccess == 1 && phonesuccess == 1) {
				$('#formbtnsub').removeClass('disabled');
				$('#formbtnsub').removeAttr('disabled');

				var inputfile = $('#pubkey');
				file = inputfile[0].files[0];

				function readFile(file, callback){
					var reader = new FileReader();
					reader.onload = callback
					reader.readAsText(file);
				}

				readFile(file,function(e){$('#pubkeycontent').text(e.target.result)});
			} else {
				$('#formbtnsub').addClass('disabled');
				$('#formbtnsub').attr('disabled', true);
			}
		});

		$('#formbtnsub').click(function(evtbtn) {
			var options;
			pubkeyc = $('#pubkeycontent').text();

			options = {
				data: phonenum,
				publicKeys: openpgp.key.readArmored(pubkeyc).keys,
			};

			openpgp.encrypt(options).then(function(ciphertext) {
				$('#encrypcontent').text(ciphertext.data);
			});

			setTimeout(function(){
				encryptedgpg = $('#encrypcontent').text();
				name = $('#name').val();
				surname = $('#surname').val();

				$.post('add', {
					name: name,
					surname: surname,
					phone: encryptedgpg
				},
				function(data, textStatus, xhr) {
					jdata = $.parseJSON(data);
					if (jdata.responsedata.exist) {
						$('#phoneerr').removeClass('hidden');
						$('#phoneerr').text(jdata.responsedata.message);
						$('#formbtnsub').addClass('disabled');
						$('#formbtnsub').attr('disabled', true);
						$('#phone01').focus();
					} else {
						$('#phoneerr').removeClass('hidden');
						$('#phoneerr').text(jdata.responsedata.message);
						$('#name').val(null);
						$('#surname').val(null);
						$('#phone01').val(null);
						$('#phone02').val(null);
						$('#pgp').focus();
						$('#formbtnsub').addClass('disabled');
						$('#formbtnsub').attr('disabled', true);
						$('#name').focus();
					}
				});
			},150);
		});
	});
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'body'} */
}
