<?php

use Freekattema\Wp\Components\ComponentData;

$data    = ComponentData::data();
$post_id = $data->get( 'post_id' );
?>
<div class="content-component">
	<?php
	ContentComponent::renderContent( $post_id );
	?>
</div>
