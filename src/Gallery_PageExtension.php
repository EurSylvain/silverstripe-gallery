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
			'Images'
		));
	}
}
