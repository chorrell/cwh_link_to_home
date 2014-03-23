<?php
$plugin['name'] = 'cwh_link_to_home';
$plugin['version'] = '0.1';
$plugin['author'] = 'Christopher Horrell';
$plugin['author_uri'] = 'http://horrell.ca/';
$plugin['description'] = 'A replacement tag for <txp:link_to_home /> that includes the ability to set the output format as a <link> tag.';


$plugin['type'] = 0; 


@include_once('zem_tpl.php');

if (0) {
?>
# --- BEGIN PLUGIN HELP ---
h1. cwh_link_to_home

This is a replacement tag for @<txp:link_to_home />@ that includes a new @format@ attribute which provides the ability to set the link format as a @<link>@ tag suitable for placing in the @<head>@ of any page on your site. You can do this by setting the attribute @format@ to _link_, like so:

@<txp:cwh_link_to_home title="Home" format="link" />@

which will produce something similar to:

@<link rel="home" title="Home" href="http://yourdomain.tld/" />@

This tag also shares all of the same attributes as @<txp:link_to_home />@. For a complete list of applicable attributes, see "this Textbook entry":http://textbook.textpattern.net/wiki/index.php?title=Txp:link_to_home.

For a further explanation of the benefits of using @<link>@ tags for your site's navigation, please see "Day 9: Providing additional navigation aids":http://diveintoaccessibility.org/day_9_providing_additional_navigation_aids.html from Mark Pilgrim's "
Dive Into Accessibility":http://diveintoaccessibility.org/.


# --- END PLUGIN HELP ---
<?php
}

# --- BEGIN PLUGIN CODE ---

// Plugin code goes here.  No need to escape quotes.


function cwh_link_to_home($atts, $thing) 
{
	extract(lAtts(array(
		'class' => false,
		'format'   => 'a', // new format attribute
		'title'    => '',
		'wraptag'  => '',
	), $atts));

    if ($format == 'a')
    {
	$class = ($class) ? ' class="'.$class.'"' : '';
	return '<a rel="home" title="'.$title.'" href="'.hu.'"'.$class.'>'.parse($thing).'</a>';
    }
	
	else
	{
		return '<link rel="home" title="'.$title.'" href="'.hu.'" />';
	}

	return ($wraptag) ? tag($out, $wraptag) : $out;
}


# --- END PLUGIN CODE ---

?>
