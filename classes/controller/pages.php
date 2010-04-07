<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Page Controller - simple controller subclass that loades the
 * pages library.
 *
 * @package	   Pages Module
 * @author     Sam Soffes
 * @author     Ben Haan
 */
abstract class Controller_Pages extends Controller {

	public function __construct(Request $request)
	{
		$this->request = $request;
		parent::__construct($request);

		// Load the page class
		$this->page = Pages::instance();
	}
}
