<?php
/* Smarty version 3.1.30, created on 2017-09-01 14:47:15
  from "/app/application/views/templates/body-contacts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a99d232fdea7_16959790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3be5182e323bbcd3b804bc320eaae12841a108f1' => 
    array (
      0 => '/app/application/views/templates/body-contacts.tpl',
      1 => 1500909246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:body-banner.tpl' => 1,
  ),
),false)) {
function content_59a99d232fdea7_16959790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102855513459a99d232f2b71_45194846', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_102855513459a99d232f2b71_45194846 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-md-12 col-center">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-center">
 					<?php $_smarty_tpl->_subTemplateRender("file:body-banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 				</div>
 			</div>
 			<div class="row">
				<div class="col-xs-12 col-md-6 col-center">
					<a href="/home" id="bthome" class="btn btn-coke pull-left"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
					<div class="col-xs-4 col-md-8">
						<div class="form-group">
							<input class="form-control search-input" type="text" id="search" name="search" placeholder="&#xf002;" autocomplete="off"/>
						</div>
					</div>
					<a href="/contacts/add" id="btnadd" class="btn btn-coke pull-right"><i class="fa fa-plus-circle"></i> Adicionar</a>
				</div>
 			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6 col-center" style="height: 400px; overflow-y: auto; overflow-x: hidden">
					<div id="list" class="list-group">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
							<button id="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id_contact'];?>
" type="button" class="list-group-item">
								<span id="lname"><?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
</span>
								<span id="lsurname"><?php echo $_smarty_tpl->tpl_vars['contact']->value['surname'];?>
</span>
							</button>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</div>
					<div id="contact" class="panel panel-default" style="display: none;">
					<div class="panel-body">
					<div class="media">
						<div class="media-left media-middle">
							<a href="#">
								<img id="mediai" class="media-object" style="width: 50px" src="/asset/img/user-circle.png" alt="...">
							</a>
						</div>
						<div class="media-body">
							<h4 id="mediah" class="media-heading	">
								<input class="form-control-textonly hide" disabled id="idcontact" name="idcontact"></input>
								<input class="form-control-textonly" disabled id="mname" name="mname"></input>
								<input class="form-control-textonly" disabled id="msurname" name="msurname"></input>
							</h4>
							<button id="btndel" class="btn btn-sm btn-coke" data-toggle="tooltip" data-placement="bottom" title="Apagar"><span class="fa fa-trash"></span></button>
							<button id="btnedit" class="btn btn-sm btn-coke" data-toggle="tooltip" data-placement="bottom" title="Editar"><span class="fa fa-pencil"></span></button>
							<button id="btncheck" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="bottom" title="Confirmar" style="display: none;"><span class="fa fa-check-circle"></span></button>
							<button id="btnback" class="btn btn-sm btn-coke" data-toggle="tooltip" data-placement="bottom" title="Voltar"><span class="fa fa-chevron-circle-left"></span></button>
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


<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function () {
		var id, txtname, txtsurname;
		// $('[data-toggle="tooltip"]').tooltip({container: 'body'});

		$('#search').on('keyup click input', function () {
			if (this.value.length > 0) {
				$('.list-group-item').hide().filter(function () {
					return $(this).text().toLowerCase().indexOf($('#search').val().toLowerCase()) != -1;
				}).show();
			} else {
				$('.list-group-item').show();
			}
		});

		$('.list-group-item').click(function(event) {
			id = event.target.id;
			txtname = event.target.firstElementChild.innerText;
			txtsurname = event.target.lastElementChild.innerText;
			$('#idcontact').val(id);
			$('#mname').val(txtname);
			$('#msurname').val(txtsurname);
			mnamew = ((txtname.length + 1) * 8) + 'px';
			msurnamew = ((txtsurname.length + 1) * 8) + 'px';
			$('#mname').css('width', mnamew);
			$('#msurname').css('width', msurnamew);
			$('#list').hide();
			$('#contact').fadeIn('fast');
		});

		$('#btndel').click(function() {
			$('#delmodal').modal('show');
		});

		$('#delcheck').click(function() {
			idval = $('#idcontact').val();
			$.post('/contacts/del', {
				id_contact: idval
			},
			function(data, textStatus, xhr) {
				console.log(data);
				$('#'+idval).remove();
				$('#delmodal').modal('toggle');
				$('#contact').hide();
				$('#list').fadeIn('fast');
			});
		});

		// $('#delmodal').on('shown.bs.modal', function () {
			// $('#myInput').focus()
			// console.log('shown');
		// })

		$("#btnedit").click(function() {
			$('#mname').removeClass('form-control-textonly');
			$('#msurname').removeClass('form-control-textonly');
			$('#mname').removeAttr('disabled');
			$('#msurname').removeAttr('disabled');
			$('#mname').addClass('form-control-text');
			$('#msurname').addClass('form-control-text');
			$('#btnedit').hide();
			$('#btncheck').fadeIn('fast');
			$('#mname').focus();
		});

		$("#btncheck").click(function() {
			idval = $('#idcontact').val();
			nameval = $('#mname').val();
			surnameval = $('#msurname').val();
			$('#mname').removeClass('form-control-text');
			$('#msurname').removeClass('form-control-text');
			$('#mname').attr('disabled', 'true');
			$('#msurname').attr('disabled', 'true');
			$('#mname').addClass('form-control-textonly');
			$('#msurname').addClass('form-control-textonly');
			$('#iconedit').removeClass('fa-check-circle');
			$.post('/contacts/edit', {
				id_contact: idval,
				name: nameval,
				surname: surnameval
			},
			function(data, textStatus, xhr) {
				console.log(data);
			});
			$('#'+idval).children('#lname').text(nameval);
			$('#'+idval).children('#lsurname').text(surnameval);
			$('#iconedit').addClass('fa-pencil');
			$('#btncheck').hide();
			$('#btnedit').fadeIn('fast');
		});

		$('#btnback').click(function() {
			$('#mname').removeClass('form-control-text');
			$('#msurname').removeClass('form-control-text');
			$('#mname').attr('disabled', 'true');
			$('#msurname').attr('disabled', 'true');
			$('#mname').addClass('form-control-textonly');
			$('#msurname').addClass('form-control-textonly');
			$('#iconedit').removeClass('fa-check-circle');
			$('#iconedit').addClass('fa-pencil');
			$('#contact').hide();
			$('#list').fadeIn('fast');
		});
	});
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'body'} */
}
