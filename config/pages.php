<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @package	   Pages Module
 * @author     Sam Soffes
 * @author     Josh Turmel
 */
 
/**
 * Default title for the each page. This will ususally be your site name.
 */
$config['title'] = 'Untitled Page';

/**
 * Reverse order of title sections
 */
$config['title_reverse'] = FALSE;

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
$config['format_output'] = 'none';

/**
 * Default cache behavior when adding a script. If this is set to ture, all scripts you add, will
 * automatically be minified together and cached as one file. You can override this at any time by
 * passing true or false as the second parameter when adding a script.
 */
$config['cache_externals'] = FALSE;

/**
 * If cache_externals is enabled, do you want to prepend a number to front of externals domain
 * to enable browsers to asynchronously download many resources at once.
 */
$config['subdomain_roundrobin'] = FALSE;

/**
 * If cache_externals is enabled and subdomain roundrobin for resources is enabled, what is the prefix
 */
$config['subdomain_roundrobin_prefix'] = '';

/**
 * Base externals URL and server path
 */

$config['ext_url'] = 'http://ext.example.com';
$config['ext_path'] = '../../ext/html/';

/**
 * CSS url as you would normally use it in HTML
 */
$config['css_url'] = $config['ext_url'].'/css/';

/**
 * File path to your css folder (relative to index.php) with a trailing slash.
 */
$config['css_path'] = $config['ext_path'].'css/';

/**
 * Javascript url as you would normally use it in HTML
 */
$config['js_url'] = $config['ext_url'].'/js/';

/**
 * File path to your js folder (relative to index.php) with a trailing slash.
 */
$config['js_path'] = $config['ext_path'].'js/';

/**
 * Version number to append to end of JS and CSS files to combat caching
 */
$config['version'] = 1;
