<?php

namespace EurSylvain\Gallery;

use SilverStripe\ORM\DataObject;

class GalleryPage_Images extends DataObject {
	
	private static $db = [
		'PageID' => 'Int',
		'ImageID' => 'Int',
		'Caption' => 'Text',
		'SortOrder' => 'Int'
	];
}
