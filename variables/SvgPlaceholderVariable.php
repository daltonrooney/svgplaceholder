<?php
namespace Craft;

class SvgPlaceholderVariable {
  
	public function generate($dimensions) {
		$src = '<svg width="'.$dimensions['width'].'" height="'.$dimensions['height'].'" viewBox="0 0 '.$dimensions['width'].' '.$dimensions['height'].'" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h108v100H0z" fill="none"/></svg>';
    return 'data:image/svg+xml;base64,'.base64_encode($src); 
	}
}
