<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'text',
'image',
'login_external' ),
'supertop' => array(  ),
'top' => array(  ),
'grid' => array(  ),
'footer' => array( 'guest_login' ) ),
'formXtTags' => array( 'supertop' => array(  ),
'top' => array(  ),
'grid' => array(  ),
'footer' => array( 'guestlink_block' ) ),
'itemForms' => array( 'text' => 'above-grid',
'image' => 'above-grid',
'login_external' => 'above-grid',
'guest_login' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'guest_login' => array( 'guest_login' ),
'login_external' => array( 'login_external' ),
'image' => array( 'image' ),
'text' => array( 'text' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'login',
'type' => 'login',
'layoutId' => 'second',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'login-above-grid',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c1' ) ) ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c3' ) ) ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array(  ),
'align' => 'center' ),
'c1' => array( 'model' => 'c2',
'items' => array( 'text' ),
'align' => 'center' ),
'c' => array( 'model' => 'c2',
'items' => array( 'image' ),
'align' => 'center' ),
'c3' => array( 'model' => 'c2',
'items' => array( 'login_external' ),
'align' => 'center' ),
'c4' => array( 'model' => 'c2',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'login-header',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'login-nolabels',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'login-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c4',
'colspan' => 1 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2',
'colspan' => 1 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'guest_login' ),
'align' => 'center' ),
'c4' => array( 'model' => 'c4',
'items' => array(  ),
'align' => 'center' ),
'c' => array( 'model' => 'c2',
'items' => array(  ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'guest_login' => array( 'type' => 'guest_login' ),
'login_external' => array( 'type' => 'login_external',
'providerName' => 'google',
'icon' => array( 'fa' => 'google' ),
'buttonSize' => 'small',
'buttonStyle' => 'default',
'background' => '#7b1113' ),
'image' => array( 'type' => 'image',
'image' => array( 'image' => 'UP-Seal.png',
'source' => 2 ),
'width' => '150px',
'customCSS' => '/* Put  your custom CSS code here */

:host {
  color: red;
}
img[data-itemid="image"]{
    display:block;
    margin:0 auto;
}' ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => 'AMIS OVCAA TOOL',
'type' => 0 ),
'editedByRte' => false ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'pageCSS' => '/* Put  your custom CSS code here */

/* Put  your custom CSS code here */

:host {
  color: red;
  border-color: transparent;
}


.panel-primary > .panel-heading {
    color: #fff;
    background-color: transparent; 
    border-color: transparent; 
}

[data-page="_global_login"][data-itemid="login_external"] > .btn {
    border-color: transparent;
}

.panel-primary {
    border-color: #f3f3f3;
    border-radius: 5px;
}

body {
background-color: #f0f4f9;
    display: grid;
    place-items: center; 
    height: 100vh;
}',
'listTotals' => 1 );
		?>