<?php

class Home extends Controller {
	
	function index()
	{
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info_attributes = $api->getdomainattributes();
		$info = $api->getdomaininfo();
		$projecttypes = $api->getprojecttypes();
		$template = $this->loadView('handyman/home');
		$template->set('info', $info);
		$template->set('info_attributes',$info_attributes);
		$template->set('projecttypes',$projecttypes);
		$template->render();
	}
	
	function terms(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$template = $this->loadView('handyman/terms');
		$template->set('info', $info);
		$template->render();
	
	}
	
	function about(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$template = $this->loadView('handyman/about');
		$template->set('title', $title);
		$template->set('info', $info);
		$template->render();
	
	}
	
	function sitemap(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$template = $this->loadView('handyman/sitemap');
		$template->render();
	
	}
    
}

?>