<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This is used for all routed static pages (/config/routes)
 * which do not need a dedicated controller
 */
class CS_Controller_Static extends CS_Controller_Frontend {

	public function action_index()
	{
		$page = $this->request->param('page');

		/**
		 * Throw 404 if view does not exist
		 */
		if(!$page OR !Kohana::find_file('views', 'pages/'.$page)) {
			throw HTTP_Exception::factory(404);
		}

		$view = View::factory('pages/'.$page);
		$this->content = $view->render();
	}

}
