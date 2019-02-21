<?php

namespace EurSylvain\Gallery;

use SilverStripe\ORM\DataObject;

class GalleryPage_Images extends DataObject {

        private static $table_name = 'GalleryPage_Images';
	
	private static $db = [
		'PageID' => 'Int',
		'ImageID' => 'Int'
	];
}
