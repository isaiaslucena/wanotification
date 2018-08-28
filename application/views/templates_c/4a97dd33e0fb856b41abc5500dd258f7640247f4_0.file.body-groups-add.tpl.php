<?php
/* Smarty version 3.1.30, created on 2018-08-28 14:31:14
  from "/app/application/views/templates/body-groups-add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b8586e2a6a1e4_97820942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a97dd33e0fb856b41abc5500dd258f7640247f4' => 
    array (
      0 => '/app/application/views/templates/body-groups-add.tpl',
      1 => 1535477471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:body-banner.tpl' => 1,
  ),
),false)) {
function content_5b8586e2a6a1e4_97820942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_679261545b8586e2a52eb8_28364390', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_679261545b8586e2a52eb8_28364390 extends Smarty_Internal_Block
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
							<div class="input-group-addon"><span class="fa fa-group"></span></div>
							<input class="form-control" type="text" id="groupname" placeholder="Nome do grupo" maxlength="25" autocomplete="off"/>
						</div>
						<span id="groupnameerr" class="help-block hidden text-center"></span>
					</div>
					<div class="form-group">
						
						<div id="panelusers" class="panel panel-default">
							<div class="panel-heading">
								<div class="input-group">
									<div class="input-group-btn">
										<button id="btnadduser" type="button" class="btn btn-default" data-toggle="tooltip" title="Criar novo usuário">
											<i class="fa fa-plus-circle"></i>
										</button>
									</div>
									<input id="searchusers" type="text" class="form-control search-input" aria-label="..." placeholder="&#xf002; Pesquisar usuário" autocomplete="off">
								</div>
							</div>
							
							<ul id="ulusers" class="list-group" style="height: 300px; overflow-y: auto; overflow-x: hidden">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
								<li class="list-group-item">
									<div class="checkbox">
										<label>
											<input data-userid="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id_contact'];?>
" type="checkbox" class="userckbx">
											 <?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value['surname'];?>

										</label>
									</div>
								</li>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</ul>
							
							<div id="uladduser" class="panel-body" style="display: none">
								<div class="form-group">
									<div id="formname" class="input-group">
										<div class="input-group-addon"><span class="fa fa-user"></span></div>
										<input class="form-control" type="text" id="username" placeholder="Nome" autocomplete="off"/>
										<input class="form-control" type="text" id="usernsurname" placeholder="Sobrenome" autocomplete="off"/>
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
									<button id="btncreateuser" disabled class="btn btn-coke btn-block disabled" type="submit">
										<i class="fa fa-plus-check"></i> Adicionar
									</button>
								</div>
								<div class="form-group">
									<button id="formbtncan" class="btn btn-coke btn-block">
										<i class="fa fa-times-circle"></i> Cancelar
									</button>
								</div>
								<textarea id="pubkeycontent" class="hidden"></textarea>
								<textarea id="encrypcontent" class="hidden"></textarea>
							</div>
						</div>

						
						<div id="panelalerts" class="panel panel-default" style="display: none">
							<div class="panel-heading">
								<div class="input-group">
									<div class="input-group-btn">
										<button id="btnaddalert" type="button" class="btn btn-default" data-toggle="tooltip" title="Criar novo alerta">
											<i class="fa fa-plus-circle"></i>
										</button>
									</div>
									<input id="searchalerts" type="text" class="form-control search-input" aria-label="..." placeholder="&#xf002; Pesquisar alerta" autocomplete="off">
								</div>
							</div>
							
							<ul id="ulalerts" class="list-group" style="height: 300px; overflow-y: auto; overflow-x: hidden">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alerts']->value, 'alert');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
?>
								<li class="list-group-item">
									<div class="checkbox">
										<label>
											<input data-alertid="<?php echo $_smarty_tpl->tpl_vars['alert']->value['id_alert'];?>
" class="alertckbx" type="checkbox" aria-label="..."> <?php echo $_smarty_tpl->tpl_vars['alert']->value['name'];?>

										</label>
									</div>
								</li>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</ul>
							
							<div id="uladdalert" class="panel-body" style="display: none">
								
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><span class="fa fa-bell"></span></div>
										<input class="form-control" type="text" id="alertname" placeholder="Nome do alerta" maxlength="25" autocomplete="off"/>
									</div>
									<span id="alertnameerr" class="help-block text-center has-error" style="display: none"></span>
								</div>
								
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><span class="fa fa-key"></span></div>
										<select id="selkeywords" class="form-control disabled" disabled>
											<option class="disabled" disabled selected>Selecione um cliente</option>
										</select>
									</div>
								</div>

								
								<div class="form-group">
									<div class="input-group">
										<div class="btn-group center-block" role="group" aria-label="...">
											<button id="btntgvlista" type="button" class="btn btn-default btntgl">Lista de veículo</button>
											<button id="btntgtveicu" type="button" class="btn btn-default btntgl">Tipo de Veículo</button>
										</div>
									</div>
								</div>

								
								<div id="divfrmgvlista" class="form-group" style="display: none">
									<div class="input-group">
										<div class="input-group-addon"><span class="fa fa-list-ul"></span></div>
										<select id="selvlistas" class="form-control disabled" disabled>
											<option class="disabled" disabled selected>Selecione uma palavra-chave</option>
										</select>
									</div>
								</div>
								
								<div id="divfrmgtveicu" class="form-group" style="display: none">
									<div class="input-group">
										<div class="input-group-addon"><span class="fa fa-bullseye"></span></div>
										<select id="selkeywords" class="form-control disabled" disabled multiple>
											<option class="disabled" disabled selected>Selecione um tipo de veículo</option>
										</select>
									</div>
								</div>

								<span id="alertresponsemsg" class="help-block text-center has-error" style="display: none"></span>

								
								<div class="form-group">
									<button id="btncreatealert" disabled class="btn btn-coke btn-block disabled">
										<i class="fa fa-check-circle"></i> Criar alerta
									</button>
								</div>
								
								<div class="form-group">
									<button role="button" class="btn btn-coke btn-block">
										<i class="fa fa-times-circle"></i> Cancelar
									</button>
								</div>
							</div>
						</div>

						
						<div id="panelgroupconf" class="panel panel-default" style="display: none">
							<div class="panel-heading">
								Configurações
							</div>
							<div id="panelgroupconfs" class="panel-body">
								
								<div class="form-group">
									<div class="input-group">
										<div class="btn-group" role="group" aria-label="...">
											<button type="button" class="btn btn-default"><i class="fa fa-phone"></i></button>
											<div class="btn-group" role="group">
												<button id="ddownnumber" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Selecione um número <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['numbers']->value, 'number');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['number']->value) {
?>
														<li><a href="#" data-idnumber="<?php echo $_smarty_tpl->tpl_vars['number']->value['id_number'];?>
" data-nnumber="<?php echo $_smarty_tpl->tpl_vars['number']->value['number'];?>
" class="tagnumber">
															<?php echo $_smarty_tpl->tpl_vars['number']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['number']->value['number'];?>

														</a></li>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="input-group">
										<div class="btn-group" role="group" aria-label="...">
											<button type="button" class="btn btn-default" data-toggle="tooltip" title="Prioridade do alerta"><i class="fa fa-exclamation-circle"></i></button>

											<div class="btn-group" role="group">
												<button id="ddownpriority" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													5 <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#" class="tagpriority">1</a></li>
													<li><a href="#" class="tagpriority">2</a></li>
													<li><a href="#" class="tagpriority">3</a></li>
													<li><a href="#" class="tagpriority">4</a></li>
													<li><a href="#" class="tagpriority">5</a></li>
												</ul>
											</div>
										</div>
										<h6 class="text-muted">Quanto menor o número, maior a prioridade.</h6>
									</div>
								</div>
								
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><span class="fa fa-address-card"></span></div>
										<select id="selempresas" class="form-control">
											<option id="empselected" class="disabled" disabled selected>Selecione um cliente</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
												<option data-idclient="<?php echo $_smarty_tpl->tpl_vars['client']->value['Id'];?>
" class="tagclient"><?php echo $_smarty_tpl->tpl_vars['client']->value['Nome'];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<span id="responsemsg" class="help-block hidden text-center"></span>
					<div class="form-group">
						<button id="nextbtnsub" disabled class="btn btn-coke btn-block disabled" data-step="user" type="button">
							<i class="fa fa-arrow-circle-right"></i> Próximo
						</button>
					</div>
					<div class="form-group">
						<button id="formbtnsub" disabled class="btn btn-coke btn-block disabled" type="button" style="display: none">
							<i class="fa fa-check-circle"></i> Adicionar
						</button>
					</div>
					<div class="form-group">
						<a href="/groups" class="btn btn-coke btn-block">
							<i class="fa fa-arrow-circle-left"></i> Voltar
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready( function() {
		var namesuccess = false;
		var contacts = [], alerts = [];
		var creategroupalert = {
			'idgroup': null,
			'idalert': null,
			'priority': 5,
			'idnumber': null,
			'idempresa': null,
			'idkeyword': null,
			'idvlista': null,
			// 'idtipoveiculo': null,
			// 'tier': null
		};

		function enable_el(idelement) {
			$(idelement).fadeOut(100, function() {
				$(this).removeAttr('disabled');
				$(this).removeClass('disabled');
				$(this).fadeIn(100);
			});
		};

		function disable_el(idelement) {
			$(idelement).fadeOut(100, function() {
				$(this).attr('disabled', true);
				$(this).addClass('disabled');
				$(this).fadeIn(100);
			});
		};

		function hide_el(idelement) {
			$(idelement).fadeOut(100);
		};

		function show_el(idelement) {
			$(idelement).fadeIn(100);
		};

		$('[data-toggle="tooltip"]').tooltip({'container': 'body'});

		$(".phonei").intlTelInput({
			autoHideDialCode: false,
			placeholderNumberType: "MOBILE",
			initialCountry: "br",
			separateDialCode: true,
			loadUtils: "asset/int-tel-input/build/js/utils.js"
		});

		var maskBehavior = function(val) {
			return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
		},
		options = {
			onKeyPress: function(val, e, field, options) {
				field.mask(maskBehavior.apply({}, arguments), options);
			}
		};

		$('.phonei').mask(maskBehavior, options);

		$('#username').on('blur', function() {
			namei = $('#username').val();
			if (namei.length > 0 && namei.length < 3) {
				$('#nameerr').html('O nome não pode ser muito curto!');
				$('#nameerr').removeClass('hidden');
				$('#username').addClass('has-error');
				$('#username').focus();
			} else if (namei.length == 0) {
				$('#nameerr').html('O nome não pode está em branco!');
				$('#nameerr').removeClass('hidden');
				$('#username').addClass('has-error');
				$('#username').focus();
			} else {
				$('#nameerr').addClass('hidden');
				$('#username').addClass('has-success');
				namesuccess = 1;
			}
		});

		$('#usersurname').on('blur', function(){
			surnamei = $('#usersurname').val();
			if (surnamei.length > 0 && surnamei.length < 4) {
				$('#usersurname').addClass('has-error');
				$('#usersurnameerr').html('O sobrenome não pode ser muito curto!');
				$('#usersurnameerr').removeClass('hidden');
				$('#formname').removeClass('has-error');
				$('#usersurname').focus();
			} else if (surnamei.length = 0) {
				$('#usersurnameerr').html('O sobrenome não pode está em branco!');
				$('#usersurnameerr').removeClass('hidden');
				$('#name').addClass('has-success');
				$('#usersurname').focus();
			} else {
				$('#usersurnameerr').addClass('hidden');
				$('#usersurnname').addClass('has-success');
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
					if (typeof file !== 'undefined') {
						$('#btncreateuser').removeClass('disabled');
						$('#btncreateuser').attr('disabled', false);
					}
					phonenum = phonen01;
					phonesuccess = 1;
				}else {
					$('#phoneerr').removeClass('hidden');
					$('#phoneerr').text('Os números de telefone não conferem!');
					$('#btncreateuser').addClass('disabled');
					$('#btncreateuser').attr('disabled', true);
					$('#phone01').focus();
				}
			}
		});

		$('#searchusers').on('keyup click input', function () {
			if (this.value.length > 0) {
				$('#ulusers .list-group-item').hide().filter(function () {
					return $(this).text().toLowerCase().indexOf($('#searchusers').val().toLowerCase()) != -1;
				}).show();
			} else {
				$('#ulusers .list-group-item').show();
			}
		});

		$('#searchalerts').on('keyup click input', function () {
			if (this.value.length > 0) {
				$('#ulalerts .list-group-item').hide().filter(function () {
					return $(this).text().toLowerCase().indexOf($('#searchalerts').val().toLowerCase()) != -1;
				}).show();
			} else {
				$('#ulalerts .list-group-item').show();
			}
		});

		$('#btnadduser').click(function(event) {
			$('#ulusers').slideUp(400, function(e) {
				$('#uladduser').slideDown(400, function(e) {
					$('#btnadduser').tooltip('hide');
					$('#btnadduser').attr('disabled', 'value');
					$('#username').focus();
				});
			});
		});

		$('#alertname').keyup(function(event) {
			namei = $('#alertname').val();
			if (namei.length > 0 && namei.length < 5) {
				$('#alertname').removeClass('has-success');
				$('#alertname').addClass('has-error');
				$('#alertnameerr').html('O nome não pode ser muito curto!');
				$('#alertnameerr').fadeIn(100);
				disable_el('#btncreatealert');
			} else if (namei.length == 0) {
				$('#alertname').removeClass('has-success');
				$('#alertname').addClass('has-error');
				$('#alertnameerr').html('O nome não pode está em branco!');
				$('#alertnameerr').fadeIn(100);
				disable_el('#btncreatealert');
			} else {
				$('#alertname').removeClass('has-error');
				$('#alertname').addClass('has-success');
				$('#alertnameerr').fadeOut(100);
				enable_el('#btncreatealert');
				alertnamesuccess = 1;
			}
		});

		$('.btntgl').click(function(event) {
			// console.log($(this));
			cid = $(this).attr('id');
			if (cid == 'btntgvlista') {
				$('.btntgl').removeClass('active');
				$('#'+cid).addClass('active');
				$('#divfrmgtveicu').slideUp('fast');
				$('#divfrmgvlista').slideDown('slow', function() {
					console.log('shown lista veiculo');
				});
			} else {
				$('.btntgl').removeClass('active');
				$('#'+cid).addClass('active');
				$('#divfrmgvlista').slideUp('fast');
				$('#divfrmgtveicu').slideDown('slow', function() {
					console.log('shown tipo veiculo');
				});
			}
		});

		$('#btnaddalert').click(function(event) {
			$('#ulalerts').slideUp(400, function(e) {
				$('#uladdalert').slideDown(400, function(e) {
					$('#btnaddalert').attr('disabled', true);
					$('#btnaddalert').addClass('disabled');
					$('#searchalerts').attr('disabled', true);
					$('#searchalerts').addClass('disabled');
					$('#btnaddalert').tooltip('hide');
					$('#alertname').focus();
				});
			});
		});

		$('.tagnumber').click(function(event) {
			event.preventDefault();
			idnumber = parseInt($(this).attr('data-idnumber'));
			nnumber = $(this).attr('data-nnumber');
			creategroupalert.idnumber = idnumber;
			$('#ddownnumber').text(nnumber+' ').append('<span class="caret"></span>');
		});

		$('.tagpriority').click(function(event) {
			event.preventDefault();
			prior = parseInt($(this).text());
			creategroupalert.priority = prior;
			$('#ddownpriority').text(prior+' ').append('<span class="caret"></span>');
		});

		$('#selempresas').change(function(event) {
			optionSelected = $('option:selected', this);
			idclient = parseInt($(optionSelected).attr('data-idclient'));
			creategroupalert.idempresa = idclient;

			$('#selkeywords').html('<option class="disabled" disabled selected>Carregando...</option>');
			$.get('/alerts/get_empresa_keywords/'+idclient, function(data) {
				$('#selkeywords').html('<option class="disabled" disabled selected>Escolha uma palavra-chave</option>');
				$.each(data, function(index, val) {
					$('#selkeywords').append(
						'<option data-idkeyword="'+val.Id+
						'" data-idvlista="'+val.Idvlista+
						'" class="tagkeyword">'+val.Nome+
						'</option>'
					);
				});
				$('#selkeywords').removeAttr('disabled');
				$('#selkeywords').removeClass('disabled');
			});
		});

		$('#selkeywords').change(function(event) {
			optionSelected = $('option:selected', this);
			idvlista = parseInt($(optionSelected).attr('data-idvlista'));
			creategroupalert.idvlista = idvlista
			idkeyword = parseInt($(optionSelected).attr('data-idkeyword'));
			creategroupalert.idkeyword = idkeyword

			$('#selvlistas').html('<option class="disabled" disabled selected>Carregando...</option>');
			if (idvlista == null) {
				$('#selvlistas').html('<option data-idvlista="'+idvlista+'" class="taglistav" selected>Todos os veículos</option>');
				enable_el('#selvlistas');
				enable_el('#formbtnsub');
			} else {
				$('#selvlistas').html('<option class="disabled" disabled selected>Carregando...</option>');
				$.get('/alerts/get_keyword_vlista/'+idvlista, function(data) {
					$('#selvlistas').html('<option class="disabled" disabled selected>Escolha uma lista de veículos</option>');
					$.each(data, function(index, val) {
						$('#selvlistas').append('<option data-idvlista="'+val.Id+'" class="taglistav">'+val.Nome+'</option>');
					});
						enable_el('#selvlistas');
				});
			}
		});

		$('#selvlistas').change(function(event) {
			enable_el('#formbtnsub');
		});

		$('#btncreatealert').click(function(event) {
			curralertname = $('#alertname').val();
			$.post('/alerts/add',
				{'alertname': curralertname},
				function(data, textStatus, xhr) {
					// alerts = [];
					alertadded = data.responsedata.idalert;
					alerts.push(parseString(alertadded));

					if (data.responsedata.exist) {
						$('#alertresponsemsg').removeClass('hidden');
						$('#alertresponsemsg').text(data.responsedata.message);
						$('#btncreatealert').addClass('disabled');
						$('#btncreatealert').attr('disabled', true);
						$('#alertname').focus();
					} else {
						$('#alertresponsemsg').removeClass('hidden');
						$('#alertresponsemsg').text(data.responsedata.message);
						$('#alertname').val(null);
						$('#searchalerts').val(null);

						$.get('/alerts/get_alerts', function(data) {
							$('#uladdalert').slideUp(400, function() {
								$('#ulalerts').slideDown(400, function() {
									$('#searchalerts').focus();

									$('#ulalerts').html(null);
									$.each(data, function(index, val) {
										if (alertadded == val.idalert) {
											$('#ulalerts').append(
												'<li class="list-group-item">'+
													'<div class="checkbox">'+
														'<label>'+
															'<input data-alertid="'+val.id_alert+'" class="alertckbx" type="checkbox" aria-label="..." checked> '+val.name+
														'</label>'+
													'</div>'+
												'</li>'
											);
										} else {
											$('#ulalerts').append(
												'<li class="list-group-item">'+
													'<div class="checkbox">'+
														'<label>'+
															'<input data-alertid="'+val.id_alert+'" class="alertckbx" type="checkbox" aria-label="..."> '+val.name+
														'</label>'+
													'</div>'+
												'</li>'
											);
										}
									});
								});
							});
						});
					}
			});
		});

		$('#formbtncan').click(function(event) {
			$('#uladduser').slideUp(400, function(e) {
				$('#ulusers').slideDown(400, function(e) {
					$('#btnadduser').removeAttr('disabled');
					$('#btnadduser').removeClass('disabled');
					$('#searchusers').focus();
				});
			});
		});

		$('#groupname').keyup(function(event) {
			namei = $('#groupname').val();
			if (namei.length > 0 && namei.length < 4) {
				$('#groupnameerr').html('O nome não pode ser muito curto!');
				$('#groupnameerr').removeClass('hidden');
				$('#groupname').addClass('has-error');
				$('#groupname').focus();
			} else if (namei.length == 0) {
				$('#groupnameerr').html('O nome não pode ficar em branco!');
				$('#groupnameerr').removeClass('hidden');
				$('#groupname').addClass('has-error');
				$('#groupname').focus();
			} else {
				$('#groupnameerr').addClass('hidden');
				$('#groupname').addClass('has-success');
				namesuccess = true;
			}
		});

		$(document).on('click', 'input[type=checkbox]', function(event) {
			if ($(this).hasClass('userckbx')) {
				selectedid = $(this).attr('data-userid');
				if ($(this).is(':checked')) {
					contacts.push(selectedid);
				} else {
					contacts.splice(contacts.indexOf(selectedid),1);
				}

				if (contacts.length >= 1 || namesuccess) {
					enable_el('#nextbtnsub');
				} else {
					disable_el('#nextbtnsub');
				}
				console.log('contacts:');
				console.log(contacts);
				console.log('');
			} else if ($(this).hasClass('alertckbx')) {
				selectedid = $(this).attr('data-alertid');
				if ($(this).is(':checked')) {
					alerts.push(selectedid);
				} else {
					alerts.splice(alerts.indexOf(selectedid),1);
				}

				if (alerts.length >= 1 || namesuccess) {
					enable_el('#nextbtnsub');
				} else {
					disable_el('#nextbtnsub');
				}
				console.log('alerts:')
				console.log(alerts);
				console.log('');
			}
		});

		$('#nextbtnsub').click(function(event) {
			nstep = $(this).attr('data-step');
			if (nstep == 'user') {
				$('#panelusers').slideUp(400, function(e) {
					$('#panelalerts').slideDown(400, function() {
					$('#nextbtnsub').fadeOut(150, function() {
						$(this).attr({
							'disabled': true,
							'data-step': 'alert'
						});
						$(this).addClass('disabled');
						$(this).fadeIn(150);
						$('#groupname').fadeOut(150, function() {
							$(this).attr('disabled', true);
							$(this).addClass('disabled');
							$(this).fadeIn(150);
						});
					});
					});
				});
			} else if (nstep == 'alert') {
				$('#panelalerts').slideUp(400, function(e) {
					$('#panelgroupconf').slideDown(400, function() {
						$('#nextbtnsub').fadeOut(150, function() {
							$('#formbtnsub').fadeIn(150);
						});
					});
				});
			}
		});

		$('#formbtnsub').click(function(evtbtn) {
			groupname = $('#groupname').val();
			$.post('add', {
				'groupname': groupname,
				'id_contacts': contacts,
				'id_alerts': alerts,
				'id_empresa': creategroupalert.idempresa,
				'id_palavrachave': creategroupalert.idkeyword,
				'id_number': creategroupalert.idnumber,
				'priority': creategroupalert.priority,
				'id_listaveiculo': creategroupalert.idvlista
			},
			function(data, textStatus, xhr) {
				console.log(data);

				if (jdata.responsedata.exist) {
					$('#responsemsg').removeClass('hidden');
					$('#responsemsg').text(jdata.responsedata.message);
					$('#formbtnsub').addClass('disabled');
					$('#formbtnsub').attr('disabled', true);
				} else {
					$('#responsemsg').removeClass('hidden');
					$('#responsemsg').text(jdata.responsedata.message);
					$('#name').val(null);
					$('#search').val(null);
					$("input[type='checkbox']").prop('checked',false);
					$('#formbtnsub').addClass('disabled');
					$('#formbtnsub').attr('disabled', true);
				}
			});
		});
	});
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'body'} */
}
