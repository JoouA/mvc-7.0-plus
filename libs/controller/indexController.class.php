<?php
class indexController
{
	public function index(){
		$news = M('news');

		$data = $news->get_news_list();

		VIEW::assign(['data'=>$data]);

		$this->showAbout();

		VIEW::display('index/index.html');
	}

	public function showAbout(){
		$about = M('about');
		$data =  $about->get_about_news();

		VIEW::assign(['about'=>$data]);
	}

	public function newsshow(){
		$news = M('news');
		$data = $news->get_one_news();
		VIEW::assign(['data'=>$data]);
		$this->showAbout();
		VIEW::display('index/show.html');
	} 


} 
 ?>