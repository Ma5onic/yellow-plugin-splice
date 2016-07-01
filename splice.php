<?php
// Copyright (c) 2013-2015 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.
// Modified by SAMY 2K for Splice

// Splice plugin
class YellowSplice
{
	const Version = "1.0";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("spliceStyle", "splice");
	}
	
	// Handle page content parsing of custom block
	function onParseContentBlock($page, $name, $text, $shortcut)
	{
		$output = NULL;
		if($name=="splice" && $shortcut)
		{
			list($id, $style, $width, $height) = $this->yellow->toolbox->getTextArgs($text);
			if(empty($style)) $style = $this->yellow->config->get("spliceStyle");
			if(empty($width)) $width = "100%";
			if(empty($height)) $height = "400";
			$output = "<div class=\"".htmlspecialchars($style)."\">";
			$output .= "<iframe src=\"https://splice.com/release/?id=".rawurlencode($id)."\" frameborder=\"0\"";
			$output .= " width=\"".htmlspecialchars($width)."\" height=\"".htmlspecialchars($height)."\"";
			$output .= "scrolling='no'></iframe></div>";
		}
		return $output;
	}
}

$yellow->plugins->register("splice", "YellowSplice", YellowSplice::Version);
?>