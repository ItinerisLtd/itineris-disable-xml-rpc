# Itineris Disable XML-RPC

[![Packagist Version](https://img.shields.io/packagist/v/itinerisltd/itineris-disable-xml-rpc.svg)](https://packagist.org/packages/itinerisltd/itineris-disable-xml-rpc)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/itinerisltd/itineris-disable-xml-rpc.svg)](https://packagist.org/packages/itinerisltd/itineris-disable-xml-rpc)
[![Packagist Downloads](https://img.shields.io/packagist/dt/itinerisltd/itineris-disable-xml-rpc.svg)](https://packagist.org/packages/itinerisltd/itineris-disable-xml-rpc)
[![GitHub License](https://img.shields.io/github/license/itinerisltd/itineris-disable-xml-rpc.svg)](https://github.com/ItinerisLtd/itineris-disable-xml-rpc/blob/master/LICENSE)
[![Hire Itineris](https://img.shields.io/badge/Hire-Itineris-ff69b4.svg)](https://www.itineris.co.uk/contact/)

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->


- [Goal](#goal)
- [Why disable WordPress XML-RPC?](#why-disable-wordpress-xml-rpc)
- [How?](#how)
- [Requirements](#requirements)
- [Installation](#installation)
  - [Alternative Installation](#alternative-installation)
- [Known Issues](#known-issues)
  - [Incompatible Plugins](#incompatible-plugins)
- [FAQs](#faqs)
  - [Can I use this with Trellis?](#can-i-use-this-with-trellis)
  - [Will you add support for older PHP versions?](#will-you-add-support-for-older-php-versions)
  - [It looks awesome. Where can I find some more goodies like this?](#it-looks-awesome-where-can-i-find-some-more-goodies-like-this)
  - [This isn't on wp.org. Where can I give a ⭐️⭐️⭐️⭐️⭐️ review?](#this-isnt-on-wporg-where-can-i-give-a-%EF%B8%8F%EF%B8%8F%EF%B8%8F%EF%B8%8F%EF%B8%8F-review)
- [Feedback](#feedback)
- [Change Log](#change-log)
- [Security](#security)
- [Credits](#credits)
- [License](#license)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Goal

Disable [WordPress XML-RPC](https://codex.wordpress.org/XML-RPC_Support) (i.e: `/wp/xmlrpc.php`) via actions and filters.
Especially for those who can't control their servers, for example: [Kinsta](http://bit.ly/kinsta-com), [WP Engine](https://typist.tech/go/wp-engine) or other managed hosting.

## Why disable WordPress XML-RPC?

- [Kinsta: What is WordPress XML-RPC and How To Stop an Attack](http://bit.ly/kinsta-xml-rpc)
- [WPMU DEV: XML-RPC and Why It’s Time to Remove it for WordPress Security](http://bit.ly/2C8TYtt)
- [Sucuri: New Brute Force Attacks Exploiting XMLRPC in WordPress](http://bit.ly/2NwgQnX)
- [Incapsula: WordPress Default Leaves Millions of Sites Exploitable for DDoS Attacks](http://bit.ly/2wtbpP6)
- [LittleBizzy: How (And Why) To Disable WordPress XML-RPC](http://bit.ly/2LARmUr)

## How?

Using actions and filters:

- [xmlrpc_enabled](https://developer.wordpress.org/reference/hooks/xmlrpc_enabled/) 

Disable all XML-RPC methods which require authentication.

Note: The name is [misleading](https://developer.wordpress.org/reference/hooks/xmlrpc_enabled/#description)!

- [xmlrpc_methods](https://developer.wordpress.org/reference/hooks/xmlrpc_methods/)

Remove all built-in/third-party XML-RPC methods.

- [xmlrpc_element_limit](https://developer.wordpress.org/reference/hooks/xmlrpc_element_limit/)

Limit the number of elements to parse in an XML-RPC response. Thus, make most XML-RPC requests fail.  

## Requirements

- WordPress 4.9.8 or later
- PHP 7.0 or later

## Installation

```bash
$ composer require itinerisltd/itineris-disable-xml-rpc
```

### Alternative Installation

Upload [itineris-disable-xml-rpc.php](./itineris-disable-xml-rpc.php) to `wp-content/plugins`.

## Known Issues

### Incompatible Plugins

Unfortunately, some plugins still relying [WordPress XML-RPC](https://codex.wordpress.org/XML-RPC_Support):

- [Jetpack](https://jetpack.com/support/getting-started-with-jetpack/troubleshooting-tips/)

## FAQs

### Can I use this with Trellis?

Yes, but you have a better choice - [trellis-disable-xml-rpc](https://github.com/ItinerisLtd/trellis-disable-xml-rpc)

This plugin is for those who can't control their servers, for example: [Kinsta](http://bit.ly/kinsta-com), [WP Engine](https://typist.tech/go/wp-engine) or other managed hosting.

### Will you add support for older PHP versions?

Never! This plugin will only works on [actively supported PHP versions](https://secure.php.net/supported-versions.php).

Don't use it on **end of life** or **security fixes only** PHP versions.

### It looks awesome. Where can I find some more goodies like this?

- Articles on [Itineris' blog](https://www.itineris.co.uk/blog/)
- More projects on [Itineris' GitHub profile](https://github.com/itinerisltd)
- Follow [@itineris_ltd](https://twitter.com/itineris_ltd) and [@TangRufus](https://twitter.com/tangrufus) on Twitter
- Hire [Itineris](https://www.itineris.co.uk/services/) to build your next awesome site

### This isn't on wp.org. Where can I give a ⭐️⭐️⭐️⭐️⭐️ review?

Thanks! Glad you like it. It's important to make my boss know somebody is using this project. Instead of giving reviews on wp.org, consider:

- tweet something good with mentioning [@itineris_ltd](https://twitter.com/itineris_ltd)
- star this Github repo
- watch this Github repo
- write blog posts
- submit pull requests
- [hire Itineris](https://www.itineris.co.uk/services/)

## Feedback

**Please provide feedback!** We want to make this library useful in as many projects as possible.
Please submit an [issue](https://github.com/ItinerisLtd/itineris-disable-xml-rpc/issues/new) and point out what you do and don't like, or fork the project and make suggestions.
**No issue is too small.**

## Change Log

Please see [CHANGELOG](./CHANGELOG.md) for more information on what has changed recently.

## Security

If you discover any security related issues, please email hello@itineris.co.uk instead of using the issue tracker.

## Credits

[Itineris Disable XML-RPC](https://github.com/ItinerisLtd/itineris-disable-xml-rpc) is a [Itineris Limited](https://www.itineris.co.uk/) project created by [Tang Rufus](https://typist.tech).

Full list of contributors can be found [here](https://github.com/ItinerisLtd/itineris-disable-xml-rpc/graphs/contributors).

## License

[Itineris Disable XML-RPC](https://github.com/ItinerisLtd/itineris-disable-xml-rpc) is licensed under the GPLv2 (or later) from the [Free Software Foundation](http://www.fsf.org/).
Please see [License File](LICENSE) for more information.
