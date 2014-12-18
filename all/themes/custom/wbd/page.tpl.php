<div class="grid-container">
  <div class="grid-40">
    <a href="<?php print $base_path;?>" class="nobg" title="">
	<img src="<?php print $base_path.path_to_theme()?>/images/logo_wbd.gif" alt="Go to World Buildings Directory homepage" class="main">
	</a>
	<?php print render($page['sidebar'])?>
  </div>
  <div class="grid-60">
    <div class="wbd_container">
	<?php print $breadcrumb; ?>
	  <div class="grid-100 mobile-grid-100">
	  <?php if ($title): ?>
	   <div class="clearfix"><?php print $title; ?></div>
	   <?php endif; ?>
	  <?php if ($messages): ?>
        <div class="clearfix"><?php print $messages; ?></div>
      <?php endif; ?>
	 
      <?php if ($page['help']): ?>
        <div id="help">
          <?php print render($page['help']); ?>
        </div>
      <?php endif; ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
	  </div>		
	</div>	
	<div id="footer1">
  <?php print render($page['footer']);?>  
</div>
  </div>
</div>