  <ul id="mainNav" class="nav navbar-nav">
  <?php
    foreach ($links as $link) {
      echo '<li class="primary">';
      $below = !empty($link['below']) ? $link['below'] : array();
      $link_options = $link['link'];
      $link_options['html'] = TRUE;
      $dropdown = '';
      $caret = '';
      $attributes = array();
      if(!empty($below)){
        $link['link']['attributes']['class'][] = 'dropdown-toggle';
        $link['link']['attributes']['data-toggle'][] = 'dropdown';
        $caret = '<span class="caret"></span>';

        $dropdown = '<ul class="dropdown-menu">';
        foreach($below as $sublink){
          $dropdown .= '<li class="primary">'.l($sublink['link']['title'], $sublink['link']['href'], $sublink['link']).'</li>';
        }
        $dropdown .= '</ul>';
      }
      echo l($link['link']['title'] . $caret, $link['link']['href'], array_merge($link['link'], array('html' => TRUE)));
      echo $dropdown;
      echo '</li><li class="sep"></li>';
    }
  ?>
  </ul>
