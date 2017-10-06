{extends file='layout.tpl'}
{block name=head}
	<link rel="shortcut icon" href="/asset/img/favicon.ico" type="image/x-icon">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
	<script src="/asset/int-tel-input/build/js/intlTelInput.js"></script>
	<script src="https://cdn.datatables.net/v/bs/dt-1.10.15/af-2.2.0/b-1.3.1/cr-1.3.3/fc-3.2.2/r-2.1.1/rg-1.0.0/rr-1.2.0/sc-1.4.2/se-1.2.2/datatables.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/asset/int-tel-input/build/css/intlTelInput.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/v/bs/dt-1.10.15/af-2.2.0/b-1.3.1/cr-1.3.3/fc-3.2.2/r-2.1.1/rg-1.0.0/rr-1.2.0/sc-1.4.2/se-1.2.2/datatables.min.css"/>
	<style type="text/css">
		.form-control-textonly {
			display: inline-block;
			width: auto;
			height: auto;
			padding: 1px 1px;
			font-size: 14px;
			line-height: 1.42857143;
			color: #555555;
			background-color: transparent;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			border: none;
		}
		.form-control-text {
			display: inline-block;
			width: auto;
			height: auto;
			padding: 1px 1px;
			font-size: 14px;
			line-height: 1.42857143;
			color: #555555;
			background-color: #fff;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
			-webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
			-o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
		}
		.form-control-text:focus {
			border-color: #66afe9;
			outline: 0;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
			box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
		}
		.form-control-text::-moz-placeholder {
			color: #999;
			opacity: 1;
		}
		.form-control-text:-ms-input-placeholder {
			color: #999;
		}
		.form-control-text::-webkit-input-placeholder {
			color: #999;
		}
		.form-control-text::-ms-expand {
			border: 0;
			background-color: transparent;
		}
		.btn-coke {
			color: #fff;
			background-color: #B73333;
			border-color: #A42E2E;
		}
		.btn-coke:focus,
		.btn-coke.focus {
			color: #fff;
			background-color: #902828;
			border-color: #401212;
		}
		.btn-coke:hover {
			color: #fff;
			background-color: #902828;
			border-color: #742020;
		}
		.btn-coke:active,
		.btn-coke.active,
		.open > .dropdown-toggle.btn-coke {
			color: #fff;
			background-color: #902828;
			border-color: #742020;
		}
		.btn-coke:active:hover,
		.btn-coke.active:hover,
		.open > .dropdown-toggle.btn-coke:hover,
		.btn-coke:active:focus,
		.btn-coke.active:focus,
		.open > .dropdown-toggle.btn-coke:focus,
		.btn-coke:active.focus,
		.btn-coke.active.focus,
		.open > .dropdown-toggle.btn-coke.focus {
			color: #fff;
			background-color: #742020;
			border-color: #401212;
		}
		.btn-coke:active,
		.btn-coke.active,
		.open > .dropdown-toggle.btn-coke {
			background-image: none;
		}
		.btn-coke.disabled:hover,
		.btn-coke[disabled]:hover,
		fieldset[disabled] .btn-coke:hover,
		.btn-coke.disabled:focus,
		.btn-coke[disabled]:focus,
		fieldset[disabled] .btn-coke:focus,
		.btn-coke.disabled.focus,
		.btn-coke[disabled].focus,
		fieldset[disabled] .btn-coke.focus {
			background-color: #B73333;
			border-color: #A42E2E;
		}
		.btn-coke .badge {
			color: #337ab7;
			background-color: #fff;
		}
		.img-banner {
			margin-top: 10px;
			margin-bottom: 10px;
			border-left: 10px;
			border-right: 10px;
		}
		.btn-home {
			margin-top: 10px;
			margin-bottom: 10px;
			border-left: 10px;
			border-right: 10px;
			vertical-align: middle;
		}
		.btn-full {
			width: 100%;
			margin-top: 10px;
			margin-bottom: 10px;
			border-left: 10px;
			border-right: 10px;
			vertical-align: middle;
		}
		.col-center {
			float: none;
			margin: 0 auto;
		}
		.col-padtb {
			padding-top: 15px;
			padding-bottom: 15px;
		}
		.fa-resp {
			font-size: 4vw;
		}
		.btn-resp {
			width: 4vw;
			height: 4vw;
		}
		.text-resp {
			font-size: 4vw;
		}
		@-webkit-keyframes spin {
			0% {
				transform: rotate(0deg);
			}
			100% {
				transform: rotate(359deg);
			}
		}
		.fa-spin {
			animation: 2s linear 0s normal none infinite spin;
		}
		.search-input {
			font-family: FontAwesome, sans-serif;
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
/* 			font-style: normal;
			font-weight: normal;
			text-decoration: inherit; */
		}
		.tag-coke {
			background-color: #B73333;
			display: inline;
			padding: .2em .6em .3em;
			font-size: 75%;
			font-weight: 700;
			line-height: 1;
			color: #fff;
			text-align: center;
			white-space: nowrap;
			vertical-align: baseline;
			border-radius: .25em;
		}
	</style>
{/block}