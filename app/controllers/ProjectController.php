<?php

class ProjectController extends BaseController{
	public function showProjects(){
		$projectUrl = "http://philgeps.cloudapp.net:5000/api/action/datastore_search?resource_id=539525df-fc9a-4adf-b33d-04747e95f120";
		$str = get_object_vars(json_decode(file_get_contents($projectUrl)));
		//return View::make('project');
		return var_dump($str['result']);
	}
}