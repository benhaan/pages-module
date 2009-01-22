<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @package	   Pages Module
 * @author     Sam Soffes
 * @author     Josh Turmel
 * @copyright  (c) 2007-2009 LifeChurch.tv
 */
 
/**
 * Default title for the each page. This will ususally be your site name.
 */
$config['title'] = 'Blank Page';

/**
 * Title seperator
 */
$config['title_seperator'] = ' - ';

/**
 * Default template to use. This is a view in your views folder that the module will load
 * by default. You will probably override this later in your controllers. See the docs for
 * how to make a template.
 */
$config['template'] = '_templates/blank';

/**
 * Format output. none, compress, indent
 * The indent method uses DOMDocument which required valid XHTML to work. If you have a malformed
 * document, it will give you a PHP error, so beware.
 */
$config['format_output'] = (IN_PRODUCTION ? 'compress' : 'none');

/**
 * Default cache behavior when adding a script. If this is set to ture, all scripts you add, will
 * automatically be minified together and cached as one file. You can override this at any time by
 * passing true or false as the second parameter when adding a script.
 */
$config['cache_externals'] = TRUE;

/**
 * CSS url as you would normally use it in HTML
 */
$config['css_url'] = 'http://dev.ext.youversion.com/css/';

/**
 * File path to your css folder (relative to index.php) with a trailing slash.
 */
$config['css_path'] = '../../ext/html/css/';

/**
 * Image url as you would normally use it in HTML
 */
$config['img_url'] = 'http://dev.ext.youversion.com/img/';

/**
 * File path to your img folder (relative to index.php) with a trailing slash.
 */
$config['img_path'] = 'img/';

/**
 * Javascript url as you would normally use it in HTML
 */
$config['js_url'] = 'http://dev.ext.youversion.com/js/';

/**
 * File path to your js folder (relative to index.php) with a trailing slash.
 */
$config['js_path'] = '../../ext/html/js/';

/**
 * Version number to append to end of JS and CSS files to combat caching
 */
$config['version'] = 1;