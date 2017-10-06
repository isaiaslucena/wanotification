{extends file="head.tpl"}
{block name=body}
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-md-6 col-center">
 			{include file="body-banner.tpl"}
			<div class="row">
				<div class="col-xs-12 col-md-6 col-center">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th>Nome</th>
									<th>Sobrenome</th>
								</tr>
							</thead>
							<tbody>
								{foreach from=$contacts item=contact}
								<tr>
									<td class="text-center">{$contact.id_contact}</td>
									<td>{$contact.name}</td>
									<td>{$contact.surname}</td>
								</tr>
								{/foreach}
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{/block}