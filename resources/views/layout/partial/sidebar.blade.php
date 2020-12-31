<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
		<!-- BEGIN menu -->
		<div class="menu">
			<div class="menu-header">Navigation</div>
			<div class="menu-item">
				<a href="{{ route('home') }}" class="menu-link">
					<span class="menu-icon"><i class="fa fa-laptop"></i></span>
					<span class="menu-text">Dashboard</span>
				</a>
			</div>

			<div class="menu-divider"></div>
			<div class="menu-header">Project</div>
			<div class="menu-item">
				<a href="{{ route('projects.index') }}" class="menu-link">
					<span class="menu-icon"><i class="fas fa-project-diagram"></i></span>
					<span class="menu-text">Projects</span>
				</a>
			</div>

			<div class="menu-divider"></div>
			<div class="menu-header">Checklist</div>
			<div class="menu-item">
				<a href="{{ route('checklists.index') }}" class="menu-link">
					<span class="menu-icon"><i class="fas fa-clipboard-list"></i></span>
					<span class="menu-text">Checklists</span>
				</a>
			</div>

			<div class="menu-divider"></div>
			<div class="menu-header">Management</div>
			<div class="menu-item">
				<a href="#" class="menu-link">
					<span class="menu-icon"><i class="fa fa-user"></i></span>
					<span class="menu-text">Users</span>
				</a>
			</div>
			<div class="menu-item">
				<a href="#" class="menu-link">
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
