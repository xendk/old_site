<?php
  if (!$content || $node_type == 'forum') {
    echo '<div id="comments">'. $content . '</div>';
  }
  else {
    echo '<div id="comments"><h2 class="comments">'. t('Comments') .'</h2>'. $content .'</div>';
  }
?>