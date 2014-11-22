<?php

class ProjectController extends BaseController{
	public function showProjects(){
		return View::make('project');
	}
}