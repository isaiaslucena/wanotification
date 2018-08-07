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
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="input-group">
									<div class="input-group-addon"><span class="fa fa-user-plus"></span></div>
									<input class="form-control  search-input" type="text" id="search" name="search" placeholder="&#xf002; Pesquisar usuário" autocomplete="off"/>
								</div>
							</div>
							<ul class="list-group" style="height: 300px; overflow-y: auto; overflow-x: hidden">
								{foreach from=$contacts item=contact}
								<li class="list-group-item">
									<input id="{$contact.id_contact}" type="checkbox" aria-label="...">
									{$contact.name} {$contact.surname}
								</li>
								{/foreach}
							</ul>
						</div>
					</div>
					<span id="responsemsg" class="help-block hidden text-center"></span>
					<div class="form-group">
						<button id="nextbtnsub" disabled class="btn btn-coke btn-block disabled" type="submit"><i class="fa fa-arrow-circle-right"></i> Próximo</button>
					</div>
					<div class="form-group">
						<button id="formbtnsub" disabled class="btn btn-coke btn-block disabled" type="submit" style="display: none"><i class="fa fa-plus-circle"></i> Adicionar</button>
					</div>
					<div class="form-group">
						<a href="/groups" class="btn btn-coke btn-block"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{literal}
<script type="text/javascript">
	$(document).ready( function() {
		var namesuccess;
		var contacts = [];

		$('#search').on('keyup click input', function () {
			if (this.value.length > 0) {
				$('.list-group-item').hide().filter(function () {
					return $(this).text().toLowerCase().indexOf($('#search').val().toLowerCase()) != -1;
				}).show();
			} else {
				$('.list-group-item').show();
			}
		});

		$("input[type='checkbox']").click(function(event) {
			selectedid = event.target.id;
			cbchecked = event.currentTarget.attributes[1].ownerElement.checked;
			if (cbchecked) {
				contacts.push(selectedid);
			} else {
				contacts.splice(contacts.indexOf(selectedid),1);
			}
			if (contacts.length >= 1) {
				$('#nextbtnsub').removeAttr('disabled');
				$('#nextbtnsub').removeClass('disabled');
			}
		});

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
				$('#formbtnsub').removeClass('disabled');
				$('#formbtnsub').attr('disabled', false);
				namesuccess = 1;
			}
		});

		$('#nextbtnsub').click(function(event) {
			console.log('teste');
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