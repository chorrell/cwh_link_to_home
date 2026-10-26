cwh_link_to_home
================

> **Deprecated:** this plugin doesn't work on Textpattern 4.9 (its tag isn't
> registered, so Textpattern reports "cwh_link_to_home tag does not exist"
> and outputs nothing), and it's no longer maintained. Core Textpattern tags
> do the same job:
>
> ```html
> <!-- Instead of <txp:cwh_link_to_home title="Home" format="link" /> -->
> <link rel="home" title="Home" href="<txp:site_url />">
>
> <!-- Instead of <txp:cwh_link_to_home title="Home">Home</txp:cwh_link_to_home> -->
> <a rel="home" title="Home" href="<txp:site_url />">Home</a>
> ```
>
> The core `<txp:link_to_home>Home</txp:link_to_home>` tag also outputs a
> `rel="home"` link and accepts `class`. The releases stay available for
> older Textpattern versions.

cwh_link_to_home is a [Textpattern](http://textpattern.com) plugin that provides replacement tag for `<txp:link_to_home />` that includes a new `format` attribute which provides the ability to set the link format as a `<link>` tag suitable for placing in the `<head>` of any page on your site. You can do this by setting the attribute `format` to _link_, like so:

```html
<txp:cwh_link_to_home title="Home" format="link" />
```

which will produce something similar to:

```html
<link rel="home" title="Home" href="http://yourdomain.tld/" />
```

This tag also shares all of the same attributes as `<txp:link_to_home />`. For a complete list of applicable attributes, see [this Textbook entry](http://textbook.textpattern.net/wiki/index.php?title=Txp:link_to_home).

For a further explanation of the benefits of using `<link>` tags for your site's navigation, please see [Day 9: Providing additional navigation aids](http://diveintoaccessibility.org/day_9_providing_additional_navigation_aids.html )from Mark Pilgrim's [Dive Into Accessibility](http://diveintoaccessibility.org/).

Installation
------------

Download `cwh_link_to_home.txt` from the
[latest release](https://github.com/chorrell/cwh_link_to_home/releases/latest),
then paste its contents into the _Install plugin_ box under Admin → Plugins in
Textpattern.

Releases
--------

Releases are automated with
[release-please](https://github.com/googleapis/release-please). PR titles use
[conventional commits](https://www.conventionalcommits.org/) (`feat:`, `fix:`,
`docs:`, etc.; add `!` for breaking changes). After a releasable merge,
release-please opens a release PR that bumps the version and updates
`CHANGELOG.md`. Merging it tags the release, and the workflow attaches
`cwh_link_to_home.txt` and a zip to the GitHub release.

To build the installer yourself, run `php cwh_link_to_home.php > cwh_link_to_home.txt`.

Pre-commit hooks
----------------

This repo uses [pre-commit](https://pre-commit.com/) to catch issues (syntax
errors, secrets, markdown lint failures, etc.) before they're committed. Some
hooks (markdownlint, the PHP syntax check) run in Docker, so Docker must be
running, but PHP doesn't need to be installed locally:

```bash
pip install pre-commit   # or: brew install pre-commit
pre-commit install
pre-commit run --all-files
```
