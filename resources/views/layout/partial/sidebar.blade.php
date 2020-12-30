<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
		<!-- BEGIN menu -->
		<div class="menu">
			<div class="menu-header">Navigation</div>
			<div class="menu-item">
				<a href="index.html" class="menu-link">
					<span class="menu-icon"><i class="fa fa-laptop"></i></span>
					<span class="menu-text">Dashboard</span>
				</a>
			</div>
			<div class="menu-item">
				<a href="analytics.html" class="menu-link">
					<span class="menu-icon"><i class="fa fa-chart-pie"></i></span>
					<span class="menu-text">Analytics</span>
				</a>
			</div>

			<div class="menu-divider"></div>
			<div class="menu-header">Checklists</div>
			<div class="menu-item">
				<a href="{{ route('checklists.index') }}" class="menu-link">
					<span class="menu-icon"><i class="fas fa-clipboard-list"></i></span>
					<span class="menu-text">Checklists</span>
				</a>
			</div>
			<div class="menu-item">
				<a href="{{ route('controls.index') }}" class="menu-link">
					<span class="menu-icon"><i class="fas fa-certificate"></i></span>
					<span class="menu-text">Controls</span>
				</a>
			</div>

			<div class="menu-divider"></div>
			<div class="menu-header">Users</div>
			<div class="menu-item">
				<a href="settings.html" class="menu-link">
					<span class="menu-icon"><i class="fa fa-cog"></i></span>
					<span class="menu-text">Settings</span>
				</a>
			</div>
			<div class="p-3 px-4 mt-auto hide-on-minified">
				<a href="#" class="btn btn-block btn-secondary font-weight-600 rounded-pill">
					<i class="fa fa-code-branch mr-1 ml-n1 opacity-5"></i> Documentation
				</a>
			</div>
		</div>
		<!-- END menu -->
    </div>
    <!-- END scrollbar -->

    <!-- BEGIN mobile-sidebar-backdrop -->
    <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
    <!-- END mobile-sidebar-backdrop -->
</div>
<!-- END #sidebar -->
