{extends file="head.tpl"}
{block name=body}
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-md-12 col-center">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-center">
 					{include file="body-banner.tpl"}
 				</div>
 			</div>
 			<div class="row">
				<div class="col-xs-12 col-md-6 col-center">
					<a href="/home" id="bthome" class="btn btn-coke pull-left"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
					<div class="col-xs-4 col-md-8">
						<div class="form-group">
							<input class="form-control search-input" type="text" id="search" name="search" placeholder="&#xf002; Digite para pesquisar" autocomplete="off"/>
						</div>
					</div>
					<a href="/groups/add" id="btnadd" class="btn btn-coke pull-right"><i class="fa fa-plus-circle"></i> Adicionar</a>
				</div>
 			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6 col-center" style="max-height: 400px; overflow-y: auto; overflow-x: hidden">
					{* <div id="list" class="list-group">
						{foreach from=$groups item=group}
							<button id="{$group.id_group}" type="button" class="list-group-item" data-toggle="tooltip" data-placement="top" title="ID: {$group.id_group}">
								{$group.name}
							</button>
						{/foreach}
					</div> *}
					<table id="list" class="table table-bordered table-condensed table-hover table-responsive">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>Membros</th>
								<th>Última mensagem</th>
							</tr>
						</thead>
						<tbody>
							{foreach from=$groups item=group}
								<tr data-idgroup="{$group.id_group}" data-namegroup="{$group.name_group}" style="cursor: pointer;">
									<th scope="row">{$group.id_group}</th>
									<td>{$group.name_group}</td>
									<td>{$group.members_quant}</td>
									<td>
										<a tabindex="0" class="btn btn-default btn-sm apopover" role="button"
										data-toggle="popover" data-trigger="focus" data-placement="top"
										title="{$group.msg_subject}"
										data-html="true" data-content="Enviado: {$group.datetime} <br> Recebido: {$group.sent_datetime} <br><br> {$group.msg_title}">
											{$group.status}
										</a>
									</td>
								</tr>
							{/foreach}
						</tbody>
					</table>

					<div id="contact" class="panel panel-default" style="display: none;">
						<div class="panel-body">
							<div class="media">
								<div class="media-left media-heading">
									<a><img id="mediai" class="media-object" style="width: 50px" src="/asset/img/fa-users.png" alt="..."></a>
								</div>
								<div class="media-body">
									<h2 id="mediah" class="media-heading">
										<input class="form-control-textonly hide" disabled id="idgroup" name="idgroup"></input>
										<input class="form-control-textonly" disabled id="mname" name="mname" maxlength="25"></input>
									</h2>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h3 class="panel-title">Membros</h3>
											</div>
											<div class="panel-body">
												<div id="listgroup" class="list-group">
												</div>
												<h6 id="delmsg" class="text-muted help-block" style="display: none">Para remover, marque o(s) usuário(s) desejado(s).</h6>
												<button id="btndel" class="btn btn-sm btn-coke" data-toggle="tooltip" data-placement="bottom" title="Remover todos os membros">
													<i class="fa fa-trash"></i>
												</button>
												<button id="btnaddsm" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="Adicionar membro" style="display: none;">
													<i class="fa fa-plus-circle"></i>
												</button>
												<button id="btnedit" class="btn btn-sm btn-coke" data-toggle="tooltip" data-placement="bottom" title="Editar membros">
													<i class="fa fa-pencil"></i>
												</button>
												<button id="btncancel" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Cancelar" style="display: none;">
													<i class="fa fa-times-circle"></i>
												</button>
												<button id="btncheck" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="bottom" title="Confirmar alterações" style="display: none;">
													<i class="fa fa-check-circle"></i>
												</button>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h3 class="panel-title">Alertas</h3>
											</div>
											<div class="panel-body">
												<div id="listalert" class="list-group">
												</div>
												<h6 id="delamsg" class="text-muted help-block" style="display: none">Para remover, marque o(s) alerta(s) desejado(s).</h6>
												<button id="btnadel" class="btn btn-sm btn-coke" data-toggle="tooltip" data-placement="bottom" title="Apagar alertas">
													<i class="fa fa-trash"></i>
												</button>
												<button id="btnaaddsm" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="Adicionar alerta" style="display: none;">
													<i class="fa fa-plus-circle"></i>
												</button>
												<button id="btnacancel" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Cancelar" style="display: none;">
													<i class="fa fa-times-circle"></i>
												</button>
												<button id="btnaedit" class="btn btn-sm btn-coke" data-toggle="tooltip" data-placement="bottom" title="Editar alertas">
													<i class="fa fa-pencil"></i>
												</button>
												<button id="btnacheck" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="bottom" title="Confirmar alterações" style="display: none;">
													<i class="fa fa-check-circle"></i>
												</button>
											</div>
										</div>

										<button id="btnback" class="btn btn-sm btn-coke" data-toggle="tooltip" data-placement="bottom" title="Voltar">
											<span class="fa fa-chevron-circle-left"></span>
										</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="delmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delmodal">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h4>Tem certeza que deseja apagar?</h4>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
				<button id="delcheck" type="button" class="btn btn-primary">Sim</button>
			</div>
		</div>
	</div>
</div>

<div id="addmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addmodal">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="input-group">
							<div class="input-group-addon"><span class="fa fa-user-plus"></span></div>
							<input class="form-control  search-input" type="text" id="searchmodal" name="search" placeholder="&#xf002;" autocomplete="off"/>
						</div>
					</div>
					<ul id="listgroupadd" class="list-group" style="height: 300px; overflow-y: auto; overflow-x: hidden">
					</ul>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button id="btnaddmodal" type="button" class="btn btn-primary">Adicionar</button>
			</div>
		</div>
	</div>
</div>

{literal}
<script type="text/javascript">
	$(document).ready(function () {
		var id, idgroup, txtname;
		var idscontacs = [];
		var idsex = [];
		var contactsadd = [];

		$('[data-toggle="tooltip"]').tooltip({'container': 'body'});

		$('[data-toggle="popover"]').popover({'container': 'body'})

		// $('#search').on('keyup click input', function () {
		// 	if (this.value.length > 0) {
		// 		$('#list').children('.list-group-item').hide().filter(function () {
		// 			return $(this).text().toLowerCase().indexOf($('#search').val().toLowerCase()) != -1;
		// 		}).show();
		// 	} else {
		// 		$('.list-group-item').show();
		// 	}
		// });

		$('#search').on('keyup click input', function() {
			if (this.value.length > 0) {
				$('#list > tbody').children('tr').hide().filter(function () {
					return $(this).text().toLowerCase().indexOf($('#search').val().toLowerCase()) != -1;
				}).show();
			} else {
				$('#list > tbody tr').show();
			}
		});

		$('#searchmodal').on('keyup click input', function () {
			if (this.value.length > 0) {
				$('#listgroupadd').children('.list-group-item').hide().filter(function () {
					return $(this).text().toLowerCase().indexOf($('#searchmodal').val().toLowerCase()) != -1;
				}).show();
			} else {
				$('.list-group-item').show();
			}
		});

		$('#list__').children('button').click(function(event) {
			id = event.target.id;
			txtname = event.target.innerText;
			$('#idgroup').val(id);
			$('#mname').val(txtname);
			mnamew = ((txtname.length + 1) * 8) + 'px';
			$('#mname').css('width', mnamew);

			$.get('/groups/group_members/'+id,
			function(data, textStatus, xhr) {
				for (var i = 0; i < data.length; i++) {
					$('#listgroup').append('<li id="li'+data[i].id_contact+'" class="list-group-item"><input id="'+data[i].id_contact+'" style="display: none" type="checkbox"/> '+data[i].name+' '+data[i].surname+'</li>');
				}
			});
			idgroup = $('#idgroup').val();
			$('#list').hide();
			$('#contact').fadeIn('fast');
		});

		$('tbody > tr > td:nth-child(1),'+
			'tbody > tr > td:nth-child(2),'+
			'tbody > tr > td:nth-child(3)'
		).click(function(e) {
			idgroup = $(this).parent().attr('data-idgroup');
			namegroup = $(this).parent().attr('data-namegroup');

			$('#idgroup').val(idgroup);
			$('#mname').val(namegroup);
			mnamew = ((namegroup.length + 1) * 8) + 'px';
			$('#mname').css('width', mnamew);

			$('#listgroup').html(null);
			$.get('/groups/group_members/'+idgroup,
			function(data, textStatus, xhr) {
				for (var i = 0; i < data.length; i++) {
					$('#listgroup').append(
						'<li id="li'+data[i].id_contact+'" class="list-group-item">'+
							'<input id="'+data[i].id_contact+'" style="display: none" type="checkbox"/> '+
							data[i].name+' '+data[i].surname+
						'</li>'
					);
				}
			});

			$('#listalert').html(null);
			$.get('/groups/group_alerts/'+idgroup,
			function(data, textStatus, xhr) {
				$.each(data, function(index, el) {
					$('#listalert').append(
						'<li id="lia'+el.id_alert+'" class="list-group-item">'+
							'<input id="a'+el.id_alert+'" style="display: none" type="checkbox"/> '+
							el.name +
						'</li>'
					);
				});

				$('#list').fadeOut('fast', function() {
					$('#contact').fadeIn('fast', function(e) {
					});
				});
			});
		})

		$('#btndel').click(function() {
			$('#delmodal').modal('show');
		});

		$('#delcheck').click(function() {
			idval = $('#idgroup').val();
			$.post('/groups/del', {
				id_group: idval
			},
			function(data, textStatus, xhr) {
				$('#'+idval).remove();
				$('#contact').hide();
				$('#list').fadeIn('fast');
				$('#delmodal').modal('toggle');
			});
		});

		$('#addmodal').on('shown.bs.modal', function () {
			$('#listgroupadd').children('li').children("input[type='checkbox']").click(function(event) {
				selectedid = event.target.id;
				cbchecked = event.currentTarget.attributes[1].ownerElement.checked;
				if (cbchecked) {
					contactsadd.push(selectedid);
				} else {
					contactsadd.splice(contactsadd.indexOf(selectedid),1);
				}
			});
			$('#btnaddmodal').click(function() {
				for (var i = 0; i < contactsadd.length; i++) {
					currid = contactsadd[i];
					fullname = $('#listgroupadd').children('li').children('#'+currid).html();
				}
				$.post('/groups/add_member', {
					id_group: idgroup,
					id_contacts: contactsadd
				},
				function(data, textStatus, xhr) {
					console.log(data);
					for (var i = 0; i < contactsadd.length; i++) {
						idil = contactsadd[i];
						console.log(idil);
						fullname = $('#listgroupadd').children('li').children('#'+idil).parent('li').text();
						$('#listgroup').append('<li id="li'+idil+'" class="list-group-item"><input id="'+idil+'" style="display: none" type="checkbox"/>'+fullname+'</li>');
					}
				});
				$('#addmodal').modal('toggle');
			});
		})

		$("#btnedit").click(function() {
			idsgroup = $("input[type='checkbox']");
			totalids = idsgroup.length;
			for (var i = 0; i < totalids; i++) {
				idsex.push(idsgroup[i].id);
			}

			$("input[type='checkbox']").click(function(event) {
				idc = event.target.id;
				cbchecked = event.currentTarget.attributes[1].ownerElement.checked;
				if (cbchecked) {
					idscontacs.push(idc);
				} else {
					idscontacs.splice(idscontacs.indexOf(idc),1);
				}
				if (idscontacs.length == totalids) {
					alert('O grupo deve contar no mínimo um membro!');
					$('#listgroup').children('li').children('#'+idc).prop('checked', false);
				}
			});

			$('#mname').removeClass('form-control-textonly');
			$('#mname').removeAttr('disabled');
			$('#mname').addClass('form-control-text');

			$('#btndel, #btnedit').fadeOut('fast',function() {
				$('#listgroup').children('li').children('input').fadeIn('fast');
				$('#delmsg, #btnaddsm, #btncheck, #btncancel').fadeIn('fast', function() {
					$('[data-toggle="tooltip"]').tooltip('hide');
					$('#mname').focus();
				});
			});
		});

		$('#btnaddsm').click(function() {
			$('#listgroupadd').html(null);
			$.get('/contacts/listex', {
				idsex: idsex
			},
			function(data, textStatus, xhr) {
				for (var i = 0; i < data.length; i++) {
					$('#listgroupadd').append('<li class="list-group-item"><input id="'+data[i].id_contact+'" type="checkbox"/> '+data[i].name+' '+data[i].surname+'</li>');
				}
			});
			$('#addmodal').modal('show');
		});

		$('#btnaaddsm').click(function() {
			$('#listgroupadd').html(null);
			$.get('/contacts/listex', {
				idsex: idsex
			},
			function(data, textStatus, xhr) {
				for (var i = 0; i < data.length; i++) {
					$('#listgroupadd').append('<li class="list-group-item"><input id="'+data[i].id_contact+'" type="checkbox"/> '+data[i].name+' '+data[i].surname+'</li>');
				}
			});
			$('#addmodal').modal('show');
		});

		$('#btncancel').click(function(event) {
			$('#mname').addClass('form-control-textonly');
			$('#mname').attr('disabled', true);
			$('#mname').removeClass('form-control-text');

			$('#delmsg, #btnaddsm, #btncheck, #btncancel').fadeOut('fast', function() {
				$('#listgroup').children('li').children('input').fadeOut('fast');
				$('#btndel, #btnedit').fadeIn('fast');
				$('[data-toggle="tooltip"]').tooltip('hide');
			});
		});

		$("#btncheck").click(function() {
			idval = $('#idgroup').val();
			nameval = $('#mname').val();
			$('#mname').removeClass('form-control-text');
			$('#mname').attr('disabled', 'true');
			$('#mname').addClass('form-control-textonly');
			$('#iconedit').removeClass('fa-check-circle');
			$.post('/groups/edit', {
				id_group: idval,
				name: nameval
			},
			function(data, textStatus, xhr) {
				console.log(data);
			});
			if (idscontacs.length >= 1) {
				$.post('/groups/del_member', {
					id_group: idval,
					id_contacts: idscontacs
				},
				function(data, textStatus, xhr) {
					console.log(data);
					for (var i = 0; i < idscontacs.length; i++) {
						idc = idscontacs[i];
						// console.log(idc);
						$('#listgroup').children('#li'+idc).remove();
					}
				});
			}

			$('#listgroup').children('li').children('input').fadeOut(100);
			$('#delmsg').fadeOut(100);
			$('#'+idval).text(nameval);
			$('#iconedit').addClass('fa-pencil');
			$('#btnaddsm').hide();
			$('#btncheck').hide();
			$('#btndel').fadeIn('fast');
			$('#btnedit').fadeIn('fast');
		});

		$('#btnback').click(function() {
			$('#contact').fadeOut('fast', function() {
				$('#list').fadeIn('fast', function() {
					$('#mname').removeClass('form-control-text');
					$('#msurname').removeClass('form-control-text');
					$('#mname').attr('disabled', 'true');
					$('#msurname').attr('disabled', 'true');
					$('#mname').addClass('form-control-textonly');
					$('#msurname').addClass('form-control-textonly');
					$('#iconedit').removeClass('fa-check-circle');
					$('#iconedit').addClass('fa-pencil');
					$('#listgroup').html(null);
				});
			});
		});
	});
</script>
{/literal}
{/block}