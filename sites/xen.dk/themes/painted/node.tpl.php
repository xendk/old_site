<?php if ($teaser): ?>

	<div <?php if ($node->nid) { echo 'id="node-' . $node->nid .'"' ; } ?> class="teaser node<?php if ($sticky) { echo " sticky"; } ?><?php if (!$status) { echo " node-unpublished"; } ?><?php if (!$node->nid) { echo " no-nid" ; } ?>">

		<?php if ($submitted): ?>
			<div class="submitted"><?php echo format_date($node->created, 'medium'); ?></div>
		<?php endif; ?>

    <?php if ($page == 0): ?>
    	<h2 class="title node-title"> <a href="<?php echo $node_url ?>"><?php echo $title ?></a> </h2>
    <?php endif; ?>

    <div class="content">
      <?php echo $content?>
    </div>

    <?php if ($links): ?> <div class="links"> <?php echo $links ?> </div> <?php endif; ?>

	</div>

<?php else : ?>

	<div <?php if ($node->nid) { echo 'id="node-' . $node->nid .'"' ; } ?> class="clearfix full node<?php if (!$status) { echo " node-unpublished"; } ?><?php if (!$node->nid) { echo " no-nid" ; } ?>">

		<?php if ($page == 0): ?>
			<h2 class="title node-title"> <a href="<?php echo $node_url ?>"><?php echo $title ?></a> </h2>
		<?php endif; ?>

		<div class="content clearfix">
		  <?php echo $content?>
		</div>

		<?php if ($picture || $submitted || $terms): ?>
			<div class="meta">
  			<?php if ($picture) { echo $picture ;}?>
			  <?php if ($submitted): ?>
  			 	<div class="submitted">
            <?php print $submitted ?>
  			  </div>
		    <?php endif; ?>
 			 <?php if ($terms): ?>
 			 	<div class="taxonomy"><strong><?php echo t('Tagged in: ') ;?></strong><?php echo $terms ?></div>
 			 <?php endif; ?>
			</div>
	  <?php endif; ?>

		<?php if ($links): ?> <div class="links"> <?php echo $links ?> </div> <?php endif; ?>

  </div>

<?php endif; ?>