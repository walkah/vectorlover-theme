<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">			
				
		<h1 id="logo-text"><a href="<?php print check_url($front_page); ?>" title=""><?php print $site_name; ?></a></h1>		
		<p id="slogan"><?php print $site_slogan; ?></p>	
		
		<div id="top-menu">
			<p><a href="index.html">rss feed</a> | <a href="index.html">contact</a> | <a href="index.html">login</a></p>
		</div>			
				
	<!--header ends-->					
	</div>
		
	<!-- navigation starts-->	
	<div  id="nav">
        <?php if (isset($primary_links)) : ?>
          <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
        <?php endif; ?>
	<!-- navigation ends-->	
	</div>					
			
	<!-- content starts -->
	<div id="content">
	
		<div id="main">
				
      <?php print $breadcrumb; ?>
      <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
      <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
      <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
      <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
      <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
      <?php if ($show_messages && $messages): print $messages; endif; ?>
      <?php print $help; ?>
      <div class="clear-block">
        <?php print $content ?>
      </div>
      <?php print $feed_icons ?>

		<!-- main ends -->	
		</div>
				
		<div id="sidebar">
      <?php print $left; ?>
		  <?php print $right; ?>
		<!-- sidebar ends -->		
		</div>		
		
	<!-- content ends-->	
	</div>
		
	<!-- footer starts -->		
	<div id="footer">
						
			<p><?php print $footer_message;?></p>			
	
	<!-- footer ends-->
	</div>

<!-- wrap ends here -->
</div>

</body>
</html>
