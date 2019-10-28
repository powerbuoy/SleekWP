<?php
namespace Sleek\Modules;

class FeaturedPosts extends Module {
	public function fields () {
		return [
			[
				'name' => 'title',
				'label' => __('Title', 'sleek'),
				'type' => 'text'
			],
			[
				'name' => 'description',
				'label' => __('Description', 'sleek'),
				'type' => 'wysiwyg'
			],
			[
				'name' => 'rows',
				'label' => __('Posts', 'sleek'),
				'type' => 'relationship'
			]
		];
	}
}