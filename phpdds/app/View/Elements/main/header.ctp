<header class="raw-fluid">
	<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" href="#"><?php echo __('PHP Rest Data Services'); ?>
			</a>
			<?php
			
			$top_menu = array(
				array('name' => 'Home', 'controller' => 'users', 'action' => 'index', 'page' => 'home'),
				array('name' => 'Users', 'controller' => 'users', 'action' => 'index', 'page' => 'users'),
				array('name' => 'Data Apps', 'controller' => 'data_apps', 'action' => 'index', 'page' => 'data_apps'),
				array('name' => 'Data Service Types', 'controller' => 'data_service_types', 'action' => 'index', 'page' => 'data_service_types'),
			);
			
			?>
			<ul class="nav">
				<?php
					foreach($top_menu as $menu){
						if($page_for_layout === $menu['page']){
							echo  '<li class="active">' . $this->Html->link( $menu['name'] , array("controller" => $menu['controller'], "action" => $menu['action'], "full_base"=> true) ) . '</li>';
						}else{
							echo  '<li>' . $this->Html->link( $menu['name'] , array("controller" => $menu['controller'], "action" => $menu['action'], "full_base"=> true) ) . '</li>';
						}
						
						
					}

				?>				
			</ul>
		</div>
	</div>
</header>
