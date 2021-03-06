<?php
# Description: Add a list of files for users to download.

namespace Sleek\Modules;

class Attachments extends Module {
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
				'type' => 'wysiwyg',
				'toolbar' => 'simple',
				'media_upload' => false
			],
			[
				'name' => 'files',
				'label' => __('Files', 'sleek'),
				'type' => 'repeater',
				'sub_fields' => [
					[
						'name' => 'files_file',
						'type' => 'file',
						'return_format' => 'id'
					]
				]
			]
		];
	}
}
