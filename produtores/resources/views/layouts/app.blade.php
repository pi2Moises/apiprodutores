<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Creditares - Credito para Produtores</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="https://creditares.com.br/wp-content/uploads/2020/05/cropped-icon_color-32x32.png" sizes="32x32" />

	<!-- Fonts and icons -->
	<script type="text/javascript" src="{{ url('assets/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('/assets/css/fonts.min.css') }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/assets/css/atlantis.min.css') }}" rel="stylesheet">
	
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('/assets/css/demo.css') }}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index.html" class="logo">
					<img style="width: 150px" src="https://creditares.com.br/wp-content/uploads/2020/05/Logo_creditares-1024x236.png" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="https://media-exp1.licdn.com/dms/image/C4E03AQEWXTV7CVzfdg/profile-displayphoto-shrink_100_100/0/1598383201547?e=1646265600&v=beta&t=dHo-SLDt9V2Agl6TTzWJ9aF0gGaQ0IC5ARJV13AxHhY" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Moisés Souza
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">Meu Cadastro</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Editar Cadastro</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Configurações</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="{{url('/')}}">
								<i class="fas fa-home"></i>
								<p>Início</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Cadastro de Produtores</h2>
								<h5 class="text-white op-7 mb-2">Consulte aqui a lista de produtores e suas atividades</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">@yield('content')</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<b style="color: #12792b">Creditares</b> - <b style="color: #FFAE00">Crédito para Produtores</b>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						@php echo date('Y') @endphp, <a href="https://creditares.com.br/" target="_blank">Creditares</a> - Todos os direitos reservados
					</div>				
				</div>
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="{{ url('assets/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ url('assets/js/core/popper.min.js') }}"></script>
	<script src="{{ url('assets/js/core/bootstrap.min.js') }}"></script>
	
	<!-- jQuery UI -->
	<script src="{{ url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="{{ url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
	
	
	<!-- Chart JS -->
	<script src="{{ url('assets/js/plugin/chart.js/chart.min.js') }}"></script>
	
	<!-- jQuery Sparkline -->
	<script src="{{ url('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
	
	<!-- Chart Circle -->
	<script src="{{ url('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
	
	<!-- Datatables -->
	<script src="{{ url('assets/js/plugin/datatables/datatables.min.js') }}"></script>
	
	<!-- Bootstrap Notify -->
	<script src="{{ url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
	
	<!-- jQuery Vector Maps -->
	<script src="{{ url('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ url('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>
	
	<!-- Sweet Alert -->
	<script src="{{ url('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

	<!-- Atlantis JS -->
	<script src="{{ url('assets/js/atlantis.min.js') }}"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{{ url('assets/js/setting-demo.js') }}"></script>
	{{-- <script src="{{ url('assets/js/demo.js') }}"></script> --}}
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('.busca-atividades').on('click',function(){
				var id = $(this).data('id');
				var id_produtor = $('#id_produtor').val()
				var table = ''
				$.ajax({
					type: "post",
					url: "{{url('/busca-atividades')}}",
					data: {
						"_token": "{{ csrf_token() }}",
						"id_imovel": id,
						"id_produtor": id_produtor
					},
					dataType: "json",
					success: function (response) {
						if(response.length > 0){
							table += '<table class="table table-hover">'
								table += '<thead>'
									table += '<th>ANO</th>'
									table += '<th>ÁREA DE PLANTIO</th>'
									table += '<th>CULTURA</th>'
									table += '<th>CUSTO</th>'
									table += '<th>PREÇO</th>'
									table += '<th>PRODUTIVIDADE</th>'
								table += '</thead>'
								table += '<tbody>'
							
							$.each(response, function (indice, elemento) { 
								table += '<tr>'
									table += '<td>'+elemento.ano+'</td>'
									table += '<td>'+elemento.area_plantio+'</td>'
									table += '<td>'+elemento.cultura+'</td>'
									table += '<td>'+elemento.custo+'</td>'
									table += '<td>'+elemento.preco+'</td>'
									table += '<td>'+elemento.produtividade+'</td>'
								table += '</tr>'
								
							});
								table += '</tbody>'
							table += '</table>'
						}else{

							table += 'Nenhum registro encontrado.'
						}
						$('.lista-atividades').html(table)
						console.log(response)
					},
					error: function(){
						alert('Não foi possível realizar esta ação.')
					}
				});
        });
		});
	</script>
</body>
</html>