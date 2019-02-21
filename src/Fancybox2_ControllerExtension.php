<?php

namespace EurSylvain\Gallery;

use SilverStripe\ORM\DataExtension;
use SilverStripe\View\Requirements;

class Fancybox2_ControllerExtension extends DataExtension {

	public function onAfterInit() {
//		Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.js'); 

		Requirements::combine_files('fancebox2.js', array(
			'resources/gallery/javascript/fancybox2/jquery.fancybox.js',
			'resources/gallery/javascript/fancybox2/GalleryPage.js',
		));
		Requirements::combine_files('fancybox2.css', array(
			'resources/gallery/css/fancybox2/jquery.fancybox.css',
		));

	}
	
}
