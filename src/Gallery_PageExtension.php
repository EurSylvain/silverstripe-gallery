<?php

namespace EurSylvain\Gallery;

use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;

class Gallery_PageExtension extends DataExtension {

	private static $many_many = array(
		'Images' => Image::class
	);
	
    private static $owns = [
        'Images'
    ];
    
	public function updateCMSFields(FieldList $fields) {

		$fields->addFieldToTab('Root.Gallery', UploadField::create(
			'Images',
			'',
			$this->owner->OrderedImages()
		));
	}
	
	public function OrderedImages() {

		list($parentClass, $componentClass, $parentField, $componentField, $table) = $this->owner->many_many('Images');

		return $this->owner->getManyManyComponents(
			'Images',
			'',
			"\"{$table}\".\"SortOrder\" ASC"
		);
	}
}
