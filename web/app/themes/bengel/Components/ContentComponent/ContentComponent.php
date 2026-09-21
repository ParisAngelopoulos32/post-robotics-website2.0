<?php

use Freekattema\Wp\Components\Component;

final class ContentComponent extends Component {
	function get_template(): string {
		return __DIR__ . '/ContentComponent.template.php';
	}

	protected function before_render() {
		$post_id = $this->props->get( 'post_id', get_the_ID() );
		if ( ! have_rows( 'content', $post_id ) ) {
			return false;
		}

		return [
			'post_id' => $post_id,
		];
	}

	public static function renderContent( $post_id ) {
		while ( have_rows( 'content', $post_id ) ) :
			the_row();
			self::render_component( get_row_layout() );
		endwhile;
	}

	private static function render_component( string $layout_name ) {
		$component = match ( $layout_name ) {
			// Example component declaration
			//'text_layout' => TextLayoutComponent::class,
			default => null,
		};

		if ( $component ) {
			$component::display();
		}
	}
}
