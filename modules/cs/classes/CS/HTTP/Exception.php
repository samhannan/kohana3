<?php defined('SYSPATH') OR die('No direct script access.');

class CS_HTTP_Exception extends Kohana_HTTP_Exception {

    /**
     * Generate a Response for all Exceptions without a more specific override
     *
     * The user should see a nice error page, however, if we are in development
     * mode we should show the normal Kohana error page.
     *
     * @return Response
     */

	protected $page_title = 'Sorry, something has gone wrong';
	protected $page_description = 'Sorry, something has gone wrong';

    public function get_response()
    {
    	// Lets log the Exception, Just in case it's important!
        Kohana_Exception::log($this);

        if (Kohana::$config->load('settings.debug'))
        {
            // Show the normal Kohana error page.
            return parent::get_response();
        }
        else
        {
        	if(Kohana::find_file('views/pages/errors', $this->_code)) {
        		$page = $this->_code;
        	} else {
        		$page = '404';
        	}
        	$template = View::factory('template/master', array(
        		'content' => View::factory('pages/errors/'.$page),
        		'header' => View::factory('component/header', array(
        			'page_title' => $this->page_title,
        			'page_desc' => $this->page_description,
        			'page_keywords' => Kohana::$config->load('page.defaults.meta.page_keywords'),
        			'linked_js' => false,
        			'linked_css' => false
        		)),
        		'footer' => View::factory('component/footer')
        	));

        	 $response = Response::factory()
                ->status($this->getCode())
                ->body($template->render());

        	return $response;
        }
    }
}