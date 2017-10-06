{extends file="head.tpl"}
{block name=body}
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-md-6 col-center">
			{include file="body-banner.tpl"}
			<div class="row">
				<div class="col-xs-10 col-md-4 col-center">
					<a href="/contacts/add" class="btn btn-coke btn-full">
						<span class="fa fa-plus-circle fa-fw fa-2x btn-home"></span> Adicionar
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-md-4 col-center">
					<a href="/contacts/delete" class="btn btn-coke btn-full">
						<span class="fa fa-trash fa-fw fa-2x btn-home"></span> Remover
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-md-4 col-center">
					<a href="/contacts/edit" class="btn btn-coke btn-full">
						<span class="fa fa-pencil fa-fw fa-2x btn-home" style></span> Editar
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-md-4 col-center">
					<a href="/home" class="btn btn-coke btn-full">
						<span class="fa fa-arrow-circle-left fa-fw fa-2x btn-home"></span> Voltar
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
{/block}