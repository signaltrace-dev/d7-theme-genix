  <?php
    $count = 0;
    foreach ($links as $link) {
      $count++;
      $class = $count < count($links) ? 'right-border' : '';
      echo '<li class="' . $class . '">';
      echo l('<span class="ugaLink">' . $link['link']['title'] . '</span>', $link['link']['href'], array_merge($link['link'], array('html' => TRUE, 'attributes' => array('class' => array('tips')))));
      echo '</li>';
    }
  ?>
