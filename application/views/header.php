
<header id="header" role="banner" class="clearfix">
                
<div class="section-1 clearfix">
	
	<div class="col1"><?echo anchor(base_url(), img(base_url().'assets/logo.png'));?></div>
                
<div class="col2">
<div class="region region-menu">
<div id="block-superfish-1" class="block block-superfish block-odd">      
  <div class="content">
    <ul id="superfish-1" class="menu sf-menu sf-main-menu sf-horizontal sf-style-none sf-total-items-4 sf-parent-items-1 sf-single-items-3">
    	<? 
    	$links = count($menu);
    	$i = 0;
    	$classes = array(
    		'main'   => 'first odd sf-item-1 sf-depth-1 sf-no-children',
    		'even'   => 'middle even sf-depth-1 sf-no-children',
    		'odd'    => 'middle odd sf-depth-1 sf-no-children',
    		'last'   => 'last even sf-item-4 sf-depth-1 sf-no-children'
    	);
    	foreach($menu as $link){
    		switch ($link->enabled) {
				case (1 && $i==0):
					//Main
					echo '<li classes="'.$classes['even'].'">'.anchor(base_url().$link->address, $link->title, 'class="sf-depth-1"').'</li>'; 
					break;
				case (1 && $i%2!=0 && $i !=$links):
					//ODD
					echo '<li classes="'.$classes['even'].'">'.anchor(base_url().$link->address, $link->title, 'class="sf-depth-1"').'</li>';
					break;
				case (1 && $i%2==0 && $i !=$links):
					//EVEN
					echo '<li classes="'.$classes['even'].'">'.anchor(base_url().$link->address, $link->title, 'class="sf-depth-1"').'</li>';
					break;
				case (1 && $i%2==0 && $i==$links):
					//LAST
					echo '<li classes="'.$classes['even'].'">'.anchor(base_url().$link->address, $link->title, 'class="sf-depth-1"').'</li>';
					break;
			}   			
    		$i++;  		
		} ?>
    	<!-- 
    		ORIGINAL HTML for MENU
    	<li id="menu-201-1" class="active-trail first odd sf-item-1 sf-depth-1 sf-no-children"><a href="/" title="" class="sf-depth-1 active">Main</a></li>
    	<li id="menu-739-1" class="middle even sf-item-2 sf-depth-1 sf-total-children-3 sf-parent-children-0 sf-single-children-3 menuparent"><a href="/?q=portfolio" title="" class="sf-depth-1 menuparent">About us</a>
    			<ul>
    				<li id="menu-1145-1" class="first odd sf-item-1 sf-depth-2 sf-no-children"><a href="/?q=portfolio-1-col" title="" class="sf-depth-2">About us 1 col</a></li>
    				<li id="menu-1446-1" class="middle even sf-item-2 sf-depth-2 sf-no-children"><a href="/?q=portfolio-2-cols" title="" class="sf-depth-2">About us 2 cols</a></li>
    				<li id="menu-1447-1" class="last odd sf-item-3 sf-depth-2 sf-no-children"><a href="/?q=portfolio-3-cols" title="" class="sf-depth-2">About us 3 cols</a></li>
    			</ul>
    	</li>
    	<li id="menu-2491-1" class="middle odd sf-item-3 sf-depth-1 sf-no-children"><a href="/?q=our-staff" title="" class="sf-depth-1">Our staff</a></li>
    	<li id="menu-442-1" class="last even sf-item-4 sf-depth-1 sf-no-children"><a href="/?q=contacts" title="" class="sf-depth-1">Contacts</a></li>
    	-->
    </ul>  
   </div><!-- /.content -->
</div><!-- /.block -->  
</div>
</div>
</div>
               


        </header><!-- /#header -->