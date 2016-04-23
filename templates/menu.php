
<?php
use Roots\Sage\Nav\NavWalker;
$menu_name = 'primary_navigation';
?>
 <nav class="ui inverted sidebar menu vertical slide out" id="m_menu">
  <!--<a href="index.php" class="item">
    <i class="home icon"></i>Home
  </a>-->

 <?php  
			
			if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
				$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
				$menu_items = wp_get_nav_menu_items($menu->term_id);
				foreach ( (array) $menu_items as $key => $menu_item ) :
					$class = $menu_item->classes; ?>
						<a 	href="<?php echo $menu_item->url; ?>" 
							class="item <?php if(get_the_ID() == $menu_item->object_id){echo 'active';} ?>" >
							<?php echo $menu_item->title; ?>
						</a>
					<?php
				endforeach;
			}
		?>
</nav>


<div id="menuDiv">
	<nav id="menu" class="ui borderless nav" style="height: 78px;" >
		<div class="ui stackable menu grid sticky borderless" style="height: 70px !important;"  >    	
			<a class="item" href="<?php echo site_url(); ?>" >
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-isma-test.png"  class="ui small middle aligned image"/>
			</a>
		<?php  
			
			if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
				$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
				$menu_items = wp_get_nav_menu_items($menu->term_id);
				foreach ( (array) $menu_items as $key => $menu_item ) :
					$class = $menu_item->classes; ?>
						<a 	href="<?php echo $menu_item->url; ?>" 
							class="item <?php if(get_the_ID() == $menu_item->object_id){echo 'active';} ?>" >
							<?php echo $menu_item->title; ?>
						</a>
					<?php
				endforeach;
			}
		?>
		</div>
	</nav> 
	<div class="ui borderless fluid one item pointing menu sticky" id="m_btn">
		<i class="icon list layout"></i> Menu
	</div>
</div>

<!--<div class="ui segment borderless" style="height: 70px !important;">-->
<!--
<div id="main-menu" class="ui borderless nav" style="height: 78px;" >
	<div class="ui stackable menu grid sticky borderless" style="height: 70px !important;"  >
		<div class="item">
			<span href="" id="m_btn" class="mobile only ">
				<i class="sidebar icon"></i>
			</span>
			<a class="" href="<?php echo site_url(); ?>" >
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-isma-test.png"  class="ui small middle aligned image"/>
			</a>
		</div>
		<span id="m_menu">
			<?php  
			if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
				$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
				$menu_items = wp_get_nav_menu_items($menu->term_id);
				foreach ( (array) $menu_items as $key => $menu_item ) :
					$class = $menu_item->classes; ?>
						<a 	href="<?php echo $menu_item->url; ?>" 
							class="computer only item <?php if(get_the_ID() == $menu_item->object_id){echo 'active';} ?>" >
							<?php echo $menu_item->title; ?>
						</a>
					<?php
				endforeach;
			}
			?>
		</span>
		<div class="item">
			<?php 
				//languages_list_footer(); 
			?>
		</div>
	</div>
</div>
-->