<?php
///////////////////// Url Functions /////////////
if(!function_exists('AdminUrl')){
    function AdminUrl($link = null){
        return url('adminPanel/'.$link);
    }
}///////////////////// Url Functions /////////////

//////////////////////Models Functions ////////////////
if(!function_exists('settings')){
    function settings(){
        return App\Models\Settings::orderBy('id','desc')->first();
    }
}
//////////////////////Models Functions ////////////////


///////////////// Image Validation Function //////////////////

 if(!function_exists('imageValidation')){
	function imageValidation($ext = null){
		if($ext === null){
			return 'image|mimes:jpeg,jpg,bmp,gif,png';
		}else{
			return 'image|mimes:'.$ext;
		}
	}
}
///////////////// Image Validation Function //////////////////
///
///////////////// Upload Image Image  //////////////////
if(!function_exists('up')){
    function up(){
        return new \App\Http\Controllers\Upload;
    }
}
///////////////// Upload Image Image  //////////////////
