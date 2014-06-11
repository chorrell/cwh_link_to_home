cwh_link_to_home
================

cwh_link_to_home is a [Textpattern](http://textpattern.com) plugin that provides replacement tag for `<txp:link_to_home />` that includes a new `format` attribute which provides the ability to set the link format as a `<link>` tag suitable for placing in the `<head>` of any page on your site. You can do this by setting the attribute `format` to _link_, like so:

```
<txp:cwh_link_to_home title="Home" format="link" />
```

which will produce something similar to:

```
<link rel="home" title="Home" href="http://yourdomain.tld/" />
```

This tag also shares all of the same attributes as `<txp:link_to_home />`. For a complete list of applicable attributes, see [this Textbook entry](http://textbook.textpattern.net/wiki/index.php?title=Txp:link_to_home).

For a further explanation of the benefits of using `<link>` tags for your site's navigation, please see [Day 9: Providing additional navigation aids](http://diveintoaccessibility.org/day_9_providing_additional_navigation_aids.html )from Mark Pilgrim's [Dive Into Accessibility](http://diveintoaccessibility.org/).
