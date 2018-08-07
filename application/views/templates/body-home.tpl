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
				<div class="col-xs-12 col-md-3 col-center">
					<div class="col-xs-6 col-md-6">
						<a href="contacts" class="btn btn-coke btn-full">
							<span class="fa fa-address-book-o fa-2x fa-fw btn-home"></span><br>
							Contatos
						</a>
					</div>
					<div class="col-xs-6 col-md-6">
						<a href="groups" class="btn btn-coke btn-full">
							<span class="fa fa-users fa-2x fa-fw btn-home"></span><br>
							Grupos
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-3 col-center">
					<div class="col-xs-6 col-md-6">
						<a href="message" class="btn btn-coke btn-full">
							<span class="fa fa-comments-o fa-2x fa-fw btn-home" style></span><br>
							Mensagem
						</a>
					</div>
					<div class="col-xs-6 col-md-6">
						<a href="alerts" class="btn btn-coke btn-full">
							<span class="fa fa-bell-o fa-2x fa-fw btn-home"></span><br>
							Alertas
						</a>
					</div>
					<div class="col-xs-6 col-md-6">
						<a href="queue" class="btn btn-coke btn-full">
							<span class="fa fa-server fa-2x fa-fw btn-home"></span><br>
							Fila
						</a>
					</div>
					<div class="col-xs-6 col-md-6">
						<a href="/login/signout" class="btn btn-coke btn-full">
							<span class="fa fa-sign-out fa-2x fa-fw btn-home"></span><br>
							Sair
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{/block}