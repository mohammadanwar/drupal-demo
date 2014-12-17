<div class="grid-container">
  <div class="grid-40">
    <a href="./World Buildings Directory - Home_files/World Buildings Directory - Home.html" class="nobg" title="">
	<img src="./World Buildings Directory - Home_files/logo_wbd.gif" alt="Go to World Buildings Directory homepage" class="main">
	</a>
	<?php print render($page['sidebar'])?>
  </div>
  <div class="grid-60">
    <div class="wbd_container">
	<?php print $breadcrumb; ?>
	  <div class="grid-100 mobile-grid-100">
	  <?php if ($title): ?>
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
  <br clear="all">
  <p>© 2008 - 2014 World Buildings Directory. All rights reserved. Site by <a href="http://www.frontmedia.co.uk/" target="_blank">Frontmedia</a></p>
</div>
  </div>
</div>