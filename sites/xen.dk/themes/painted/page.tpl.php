<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language->language ?>" lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>">

<head>
  <title><?php echo $head_title; ?></title>
  <?php echo $head; ?>
  <?php echo $styles; ?>
  <?php echo page_property($values); ?>
  <!--[if lte IE 6]><style type="text/css" media="all">@import "<?php echo $base_path . path_to_theme() ?>/css/ie6.css";</style><![endif]-->
  <!--[if IE 7]><style type="text/css" media="all">@import "<?php echo $base_path . path_to_theme() ?>/css/ie7.css";</style><![endif]-->
  <?php echo $scripts; ?>
</head>

<body class="<?php echo $body_classes; ?>">
  <div id="skip-nav"><a href="#content">Skip to Content</a></div>  
  <div id="page">
	
		<!-- ______________________ HEADER _______________________ -->
		
		<div id="header" class="clearfix">
			
			<?php if (!empty($primary_links)): ?>
        <div id="primary" class="clear-block">
          <?php echo theme('links', $primary_links, array('class' => 'links primary-links')); ?>
        </div>
      <?php endif; ?>
			
		  <?php if ($logo): ?>
		    <a href="<?php echo $base_path; ?>" title="<?php echo t('Home'); ?>">
		      <img src="<?php echo $logo; ?>" alt="<?php echo t('Home'); ?>" id="logo" />
		    </a>
		  <?php endif; ?>
      
			<div id="name-slogan">
		    <?php if (!empty($site_name)): ?>
			    <?php if ($is_front): ?>
		      	<h1 id="site-name">
		      	  <a href="<?php echo $base_path; ?>" title="<?php echo t('Home'); ?>"><?php echo $site_name; ?></a>
		      	</h1>
		    	<?php else: ?>
		      	<h2 id="site-name">
		      	  <a href="<?php echo $base_path; ?>" title="<?php echo t('Home'); ?>"><?php echo $site_name; ?></a>
		      	</h2>
	    		<?php endif; ?>
	    	<?php endif; ?>

		    <?php if (!empty($site_slogan)): ?>
		      <div id="site-slogan"><?php echo $site_slogan; ?></div>
		    <?php endif; ?>
			</div>
      
   		<div class="clear-block"></div>
      
	  </div> <!-- /header -->
				
		<!-- ______________________ MAIN _______________________ -->
    
		<div id="border" class="clearfix">
		  
		  <div id="main">
    
   	  		<div id="content" class="clearfix">
   	      	<div id="content-area" class="center column">
    
   			    <?php if (!empty($secondary_links) && empty($sidebar_left) && empty($sidebar_right)): ?>
   						<div class="block secondary">
   		    		    <?php echo theme('links', $secondary_links, array('class' => 'links secondary-links')); ?>
   					   		<div class="clear-block"></div>
   						</div>
   			    <?php endif; ?>
    
   	        	<?php echo $breadcrumb; ?>
    
   	        	<?php echo $messages; ?>				
    
   	  		  	<?php if ($content_top): ?>
   							<div id="content-top"><?php echo $content_top; ?></div>
   						<?php endif; ?>
   						
   	        	<?php if ($title): ?>
   	        	  <h1 class="title"><?php echo $title; ?></h1>
   	        	<?php endif; ?>
   	        	   				        	  
    	        <?php if ($tabs): ?>
    	          <?php echo $tabs; ?>
    	        <?php endif; ?>
    	        
    	        <?php if ((arg(1) == 'add') && (arg(0) == 'node')): ?>
    						<?php echo '<p class="form-info">' . t('Fields marked with a red star (<span title="This field is required." class="form-required">*</span>) are mandatory' . '</p>')?>
    					<?php endif; ?>
              
    	        <?php echo $help; ?>
    		  		<?php if ($mission): ?>
    						<div id="mission"><?php echo $mission; ?></div>
    					<?php endif; ?>
              
    	        <?php echo $content; ?>
              
   	  		  	<?php if ($content_bottom): ?>
   							<div id="content-bottom"><?php echo $content_bottom; ?></div>
   						<?php endif; ?>
    
   				  	<?php echo $feed_icons; ?>
    
   	      	</div><!-- /content-area -->
    
   				</div> <!-- /content -->
    
    
   	  		<?php if ($left): ?> <!-- SIDEBAR LEFT -->
   	  		  <div id="sidebar-left" class="sidebar left column"><div class="side-inner inner">
   	  			  <?php if ($left): ?>
    
   					    <?php if (!empty($secondary_links)): ?>
   								<div class="block secondary">
   									<h2 class="title block-title"><?php echo t('Secondary Links')?></h2>
   				    		    <?php echo theme('links', $secondary_links, array('class' => 'links secondary-links')); ?>
   								</div>
   					    <?php endif; ?>
    
   	  			  	<?php echo $left; ?>
   	  			  <?php endif; ?>
   	  		  </div></div> <!-- /sidebar-left -->
   	  		<?php endif; ?>
    
    
   	  		<?php if ($right): ?> <!-- SIDEBAR RIGHT -->
   	  		  <div id="sidebar-right" class="sidebar right column"><div class="side-inner inner">
   	  			  <?php if ($right): ?>
    
   					    <?php if (!empty($secondary_links) && empty($right)): ?>
   								<div class="block secondary">
   									<h2 class="title block-title"><?php echo t('Secondary Links')?></h2>
   				    		    <?php echo theme('links', $secondary_links, array('class' => 'links secondary-links')); ?>
   								</div>
   					    <?php endif; ?>
    
    
   	  		    	<?php echo $right; ?>
   	  			  <?php endif; ?>
   	  		  </div></div> <!-- /sidebar-right -->
   	  		<?php endif; ?>
    
    
       <div id="fakecenter" class="center fakecol"></div>
       <?php if ($left): ?><div id="fakeleft" class="left fakecol"></div><?php endif; ?>
       <?php if ($right): ?><div id="fakeright" class="right fakecol"></div><?php endif; ?>
		   
		  </div> <!-- /main -->
              
	 </div> <!-- /border -->
   
	 <!-- ______________________ FOOTER _______________________ -->
				

   <div id="footer">
	   <?php echo $footer_message; ?>
   </div> <!-- /footer -->
  <?php echo $closure; ?>
  </div> <!-- /page -->

</body>
</html>