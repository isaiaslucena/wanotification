{extends file="head.tpl"}
{block name=body}
{literal}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"/>
{/literal}
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-md-12 col-center">
 			{include file="body-banner.tpl"}
			<div class="row">
				<div class="col-xs-12 col-md-3 col-center">
					<div class="form-group text-center">
						<button id="btnc" class="btn btn-coke"><i class="fa fa-user"></i> Contato</button>
						<button id="btng" class="btn btn-coke"><i class="fa fa-users"></i> Grupo</button>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-phone"></i></div>
							{* <div class="form-control" type="text" id="sendto" name="sendto" placeholder="Para" autocomplete="off">
								<span class="badge">Isaias Neto &times;</span>
								<span class="badge">Teste Nome &times;</span>
							</div> *}
							<input class="form-control" type="text" id="sendto" name="sendto" placeholder="Para" autocomplete="off"/>
						</div>
						<span id="nameerr" class="help-block hidden text-center"></span>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
							<textarea class="form-control" rows="8" type="text" id="msg" name="msg" placeholder="Mensagem" autocomplete="off"></textarea>
						</div>
					</div>
					<div class="form-group">
						<button id="btnsend" disabled class="btn btn-coke btn-block"><i class="fa fa-send"></i> Enviar</button>
					</div>
					<div class="form-group">
						<a href="/home" class="btn btn-coke btn-block"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="cmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cmodal">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="input-group">
							<div class="input-group-addon"><span class="fa fa-user-plus"></span></div>
							<input class="form-control  search-input" type="text" id="searchc" name="searchc" placeholder="&#xf002;" autocomplete="off"/>
						</div>
					</div>
					<div id="listgroupc" class="list-group" style="max-height: 300px; overflow-y: auto; overflow-x: hidden">
						{foreach from=$contacts item=contact}
							<button id="{$contact.id_contact}" type="button" class="list-group-item">{$contact.name} {$contact.surname}</button>
						{/foreach}
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button id="btnaddcmodal" type="button" class="btn btn-primary">Adicionar</button>
			</div>
		</div>
	</div>
</div>

<div id="gmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gmodal">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="input-group">
							<div class="input-group-addon"><span class="fa fa-user-plus"></span></div>
							<input class="form-control  search-input" type="text" id="searchg" name="searchg" placeholder="&#xf002;" autocomplete="off"/>
						</div>
					</div>
					<div id="listgroupg" class="list-group" style="max-height: 300px; overflow-y: auto; overflow-x: hidden">
						{foreach from=$groups item=group}
							<button id="{$group.id_group}" type="button" class="list-group-item">{$group.name}</button>
						{/foreach}
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button id="btnaddgmodal" type="button" class="btn btn-primary">Adicionar</button>
			</div>
		</div>
	</div>
</div>

{literal}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
		$('#sendto').tagsinput({
			tagClass: 'tag-coke',
			focusClass: 'form-control',
			maxTags: 1
		});

		$('#searchc').on('keyup click input', function () {
			if (this.value.length > 0) {
				$('.list-group-item').hide().filter(function () {
					return $(this).text().toLowerCase().indexOf($('#searchc').val().toLowerCase()) != -1;
				}).show();
			} else {
				$('.list-group-item').show();
			}
		});

		$('#searchg').on('keyup click input', function () {
			if (this.value.length > 0) {
				$('.list-group-item').hide().filter(function () {
					return $(this).text().toLowerCase().indexOf($('#searchg').val().toLowerCase()) != -1;
				}).show();
			} else {
				$('.list-group-item').show();
			}
		});

		$('#btnc').click(function(event) {
			$('#cmodal').modal('show');
			$('#listgroupc').children('button').removeClass('active');
		});

		$('#btng').click(function(event) {
			$('#gmodal').modal('show');
			$('#listgroupg').children('button').removeClass('active');
		});

		$('#listgroupg').children('button').click(function(event) {
			$(this).toggleClass('active');
		});

		$('#listgroupc').children('button').click(function(event) {
			$(this).toggleClass('active');
		});

		// $('#cmodal').on('shown.bs.modal', function () {
		// 	// $.get('/contacts/', function(data) {
		// 	// 	optional stuff to do after success 
		// 	// });
		// 	$('#listgroupc').children('button').removeClass('active');
		// });

		// $('#gmodal').on('shown.bs.modal', function () {
		// 	// $.get('/contacts/', function(data) {
		// 	// 	optional stuff to do after success 
		// 	// });
		// 	$('#listgroupg').children('button').removeClass('active');
		// });
	});
</script>
{/literal}
{/block}