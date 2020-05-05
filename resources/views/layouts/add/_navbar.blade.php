<nav class="navbar navbar-default navbar-fixed-top" style="background: #0076E5; color: white;">
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth" style="background: #0076E5; color: white;"><i class="lnr lnr-menu"></i></button>
				</div>
				<div class="brand" style="background: #0076E5; color: white;">
				<a href="/"><img src="{{asset('admin/assets/img/manatek-white.png')}}" alt="Manatek Logo" class="img-responsive logo" ></a>
			</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" style="background: #0076E5; color: white;">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background: #0076E5; color: white;"><span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>