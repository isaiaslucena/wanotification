{extends file="head.tpl"}
{block name=body}
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-md-12 col-center">
 			{include file="body-banner.tpl"}
			<div class="row">
				<div class="col-xs-12 col-md-3 col-center">
					<div class="form-group">
						<div id="formname" class="input-group">
							<div class="input-group-addon"><span class="fa fa-group"></span></div>
							<input class="form-control" type="text" id="name" name="name" placeholder="Nome do grupo" maxlength="25" autocomplete="off"/>
						</div>
						<span id="nameerr" class="help-block hidden text-center"></span>
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
								{foreach from=$contacts item=contact}
								<li class="list-group-item">
									<input id="user_{$contact.id_contact}" type="checkbox" class="userckbx" aria-label="...">
									{$contact.name} {$contact.surname}
								</li>
								{/foreach}
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
									<button id="formbtnsub" disabled class="btn btn-coke btn-block disabled" type="submit">
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

						<div id="panelalerts" class="panel panel-default">
							<div class="panel-heading">
								<div class="input-group">
									<div class="input-group-btn">
										<button type="button" class="btn btn-default" data-toggle="tooltip" title="Criar novo alerta">
											<i class="fa fa-plus-circle"></i>
										</button>
									</div>
									<input id="searchalerts" type="text" class="form-control search-input" aria-label="..." placeholder="&#xf002; Pesquisar alerta" autocomplete="off">
								</div>
							</div>
							<ul id="ulalerts" class="list-group" style="height: 300px; overflow-y: auto; overflow-x: hidden">
								{foreach from=$alerts item=alert}
								<li class="list-group-item">
									<input id="alert_{$alert.id_alert}" type="checkbox" class="alertckbx" aria-label="...">
									{$alert.name}
								</li>
								{/foreach}
							</ul>
							<div id="uladdalerts" class="panel-body">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><span class="fa fa-bell"></span></div>
										<input class="form-control" type="text" id="alertname" placeholder="Nome do alerta" maxlength="25" autocomplete="off"/>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="btn-group" role="group" aria-label="...">
											<button type="button" class="btn btn-default"><i class="fa fa-phone"></i></button>
											<div class="btn-group" role="group">
												<button id="ddownnumber" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Selecione um número <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													{foreach from=$numbers item=number}
														<li><a href="#" data-idnumber="{$number.id_number}" data-nnumber="{$number.number}" class="tagnumber">
															{$number.name} - {$number.number}
														</a></li>
													{/foreach}
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
										<select class="form-control">
											<option id="empselected" class="disabled" disabled selected>Selecione um cliente</option>
											{foreach from=$clients item=client}
												<option data-idclient="{$client.Id}" class="tagclient">{$client.Nome}</option>
											{/foreach}
										</select>
									</div>
								</div>

								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><span class="fa fa-key"></span></div>
										<select id="selkeywords" class="form-control disabled" disabled>
											<option id="keywselected" class="disabled" disabled selected>Selecione primeiro um cliente</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><span class="fa fa-bullseye"></span></div>
										<select class="form-control disabled" disabled>
											<option id="listavselected" class="disabled" disabled selected>Selecione uma lista de veículos</option>}
											<option data-idlistav="{$veiculo.Id}" class="taglistav">{$veiculo.Nome}</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<button id="formbtnsub" disabled class="btn btn-coke btn-block disabled">
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
					</div>
					<span id="responsemsg" class="help-block hidden text-center"></span>
					<div class="form-group">
						<button id="nextbtnsub" disabled class="btn btn-coke btn-block disabled" type="submit">
							<i class="fa fa-arrow-circle-right"></i> Próximo
						</button>
					</div>
					<div class="form-group">
						<button id="formbtnsub" disabled class="btn btn-coke btn-block disabled" type="submit" style="display: none">
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
{literal}
<script type="text/javascript">
	$(document).ready( function() {
		var namesuccess = false;
		var contacts = [];

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
					$('#btnadduser').attr('disabled', 'value');
					$('#username').focus();
				});
			});
		});

		$('#btnaddalert').click(function(event) {
			$('#ulalerts').slideUp(400, function(e) {
				$('#uladdalert').slideDown(400, function(e) {
					$('#btnadduser').attr('disabled', 'value');
					$('#username').focus();
				});
			});
		});

		$('.tagnumber').click(function(event) {
			event.preventDefault();
			nnumber = $(this).attr('data-nnumber');
			$('#ddownnumber').text(nnumber+' ').append('<span class="caret"></span>');
		});

		$('.tagpriority').click(function(event) {
			event.preventDefault();
			prior = $(this).text();
			$('#ddownpriority').text(prior+' ').append('<span class="caret"></span>');
		});

		$('.tagclient').click(function(event) {
			event.preventDefault();
			idclient = $(this).attr('data-idclient');

			// $('#ddownpriority').text(prior+' ').append('<span class="caret"></span>');

			$.get('/alerts/get_empresa_keywords/'+idclient, function(data) {
				console.log(data);
				$.each(data, function(index, val) {
					$('#selkeywords').append('<option data-idkeyword="'+data.Id+'" class="taglistav">'+data.Nome+'</option>')
				});
			});
		});

		$('.tagclient__').click(function(event) {
			event.preventDefault();
			idclient = $(this).attr('data-idclient');

			$('#ddownpriority').text(prior+' ').append('<span class="caret"></span>');

			$.get('/alerts/get_empresa_keywords/'+idclient, function(data) {
				/*optional stuff to do after success */
			});
		});

		$('#formbtncan').click(function(event) {
			$('#uladduser').slideUp(400, function(e) {
				$('#ulusers').slideDown(400, function(e) {
					$('#searchusers').focus();
				});
			});
		});

		$('#name').on('blur', function() {
			namei = $('#name').val();
			if (namei.length > 0 && namei.length < 3) {
				$('#nameerr').html('O nome não pode ser muito curto!');
				$('#nameerr').removeClass('hidden');
				$('#name').addClass('has-error');
				$('#name').focus();
			} else if (namei.length == 0) {
				$('#nameerr').html('O nome não pode ficar em branco!');
				$('#nameerr').removeClass('hidden');
				$('#name').addClass('has-error');
				$('#name').focus();
			} else {
				$('#nameerr').addClass('hidden');
				$('#name').addClass('has-success');
				namesuccess = true;
			}
		});

		$(".userckbx").click(function(event) {
			selectedid = event.target.id;
			selectedid = selectedid.replace('user_', '');
			cbchecked = event.currentTarget.attributes[1].ownerElement.checked;
			if (cbchecked) {
				contacts.push(selectedid);
			} else {
				contacts.splice(contacts.indexOf(selectedid),1);
			}
			if (contacts.length >= 1 || namesuccess) {
				$('#nextbtnsub').removeAttr('disabled');
				$('#nextbtnsub').removeClass('disabled');
			}
		});

		$(".alertckbx").click(function(event) {
			selectedid = event.target.id;
			selectedid = selectedid.replace('alert_', '');
			cbchecked = event.currentTarget.attributes[1].ownerElement.checked;
			if (cbchecked) {
				contacts.push(selectedid);
			} else {
				contacts.splice(contacts.indexOf(selectedid),1);
			}
			if (contacts.length >= 1 || namesuccess) {
				$('#nextbtnsub').removeAttr('disabled');
				$('#nextbtnsub').removeClass('disabled');
			}
		});

		$('#nextbtnsub').click(function(event) {
			$('#panelusers').slideUp(400, function(e){
				$('#panelalerts').slideDown(400, function() {
					$('#nextbtnsub').fadeOut('fast', function() {
						$('#formbtnsub').fadeIn('fast');
					});
				});
			});
		});

		$('#formbtnsub').click(function(evtbtn) {
			setTimeout(function(){
				name = $('#name').val();
				$.post('add', {
					name: name,
					id_contacts: contacts
				},
				function(data, textStatus, xhr) {
					jdata = $.parseJSON(data);
					if (jdata.responsedata.exist) {
						$('#responsemsg').removeClass('hidden');
						$('#responsemsg').text(jdata.responsedata.message);
						$('#formbtnsub').addClass('disabled');
						$('#formbtnsub').attr('disabled', true);
						$('#name').focus();
					} else {
						$('#responsemsg').removeClass('hidden');
						$('#responsemsg').text(jdata.responsedata.message);
						$('#name').val(null);
						$('#search').val(null);
						$("input[type='checkbox']").prop('checked',false);
						$('#formbtnsub').addClass('disabled');
						$('#formbtnsub').attr('disabled', true);
						$('#name').focus();
					}
				});
			},150);
		});
	});
</script>
{/literal}
{/block}