<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @package	   Pages Module
 * @author     Sam Soffes
 * @author     Josh Turmel
 * @author     Ben Haan
 */

return array(
/**
 * Default title for the each page. This will ususally be your site name.
 */
'title' => 'Untitled Page',

/**
 * Reverse order of title sections
 */
'title_reverse' => FALSE,

/**
 * Title seperator
 */
'title_seperator' => ' - ',

/**
 * Default template to use. This is a view in your views folder that the module will load
 * by default. You will probably override this later in your controllers. See the docs for
 * how to make a template.
 */
'template' => '_templates/blank',

/**
 * Format output. none, compress, indent
 * The indent method uses DOMDocument which required valid XHTML to work. If you have a malformed
 * document, it will give you a PHP error, so beware.
 */
'format_output' => 'none',

/**
 * Default cache behavior when adding a script. If this is set to ture, all scripts you add, will
 * automatically be minified together and cached as one file. You can override this at any time by
 * passing true or false as the second parameter when adding a script.
 */
'cache_externals' => FALSE,

/**
 * If cache_externals is enabled, do you want to prepend a number to front of externals domain
 * to enable browsers to asynchronously download many resources at once.
 */
'subdomain_roundrobin' => FALSE,

/**
 * If cache_externals is enabled and subdomain roundrobin for resources is enabled, what is the prefix
 */
'subdomain_roundrobin_prefix' => '',

/**
 * Base externals URL and server path
 */

'ext_url' => 'http://ext.example.com/',
'ext_path' => '../../ext/html/',

/**
 * Name of folder containing your css files with trailing slash
 */
'css_dir' => 'css/',


/**
 * Name of folder containing your js files with trailing slash
 */
'js_dir' => 'js/',

/**
 * Version number to append to end of JS and CSS files to combat caching
 */
'version' => 1
);
