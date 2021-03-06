<?php
/**
 * Generate the Metatags
 * @package addthis
 */
class Tx_Addthis_Metatags {
	/**
	 * @param string $key
	 * @param string $value
	 */
	public function addTag($key,$value){
		$tag = '<meta property="'.$key.'" content="'.$value.'"/>';
		if(isset($GLOBALS['TSFE'])){
			$GLOBALS['TSFE']->getPageRenderer()->addMetaTag( $tag );
		}
	}
	/**
	 * @param string $image
	 * @param string $baseUri
	 * @param string $path
	 */
	public function addThumbnail($image,$baseUri,$path='uploads/tx_addthis/'){
		$path = $baseUri . $path . $image;
		$this->addTag('og:image',$path);
	}

	/**
	 * @param string $title
	 */
	public function addTitle($title) {
		$this->addTag('og:title',$title);
	}

	/**
	 * @param string $description
	 */
	public function addDescription($description) {
		$this->addTag('og:description', $description);
	}
}
