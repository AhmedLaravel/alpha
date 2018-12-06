<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Models\Settings;
use \App\Models\Language;
use \App\Models\Settings_description;

class AdminSettings extends Controller
{
    public function viewSettings(){ /////////////// Start Settings Get Function //////////
        $title = trans('admin.settingsTitle');
        $titleSummary = trans('admin.settingsTitleSummary');
        $settings = Settings::orderBy('id','desc')->first();
        $settingsDescription = Settings_description::orderBy('settings_description_id','desc')->get();
        return view('Admin.adminSettings',['settings'=> $settings, 'settingsDesc'=>$settingsDescription, 'title'=> $title, 'titleSummary'=>$titleSummary]);
    } /////////////// Start Settings Get Function //////////


    public function updateSettings(Request $request){ /////////////// Start Settings Get Function //////////
        $this->validate(request(),[
            'site_name' =>'sometimes|nullable|array|min:2',
            'site_name.*' =>'sometimes|nullable|string|distinct|min:2',
            'address' =>'required|array|min:2',
            'address.*' =>'required|string|distinct|min:2',
            'work_time' =>'sometimes|nullable|array|min:2',
            'work_time.*' =>'sometimes|nullable|string|distinct|min:2',
            'about_our_work' =>'sometimes|nullable|array|min:2',
            'about_our_work.*' =>'sometimes|nullable|string|distinct|min:2',
            'maintenance_message' =>'sometimes|nullable|array|min:2',
            'maintenance_message.*' =>'sometimes|nullable|string|distinct|min:2',
        ],[],[
            'site_name' =>trans('admin.siteName'),
            'address' =>trans('admin.address'),
            'work_time' =>trans('admin.workTime'),
            'about_our_work' =>trans('admin.about_our_work'),
            'maintenance_message' =>trans('admin.maintenance'),
        ]);
        $rules = [
           'logo' =>'sometimes|nullable|'.imageValidation(),
           'icon' =>'sometimes|nullable|'.imageValidation(),
           'status' =>'required',
           'mobile_number' =>'required',
           'main_language' =>'required',
           'mail' =>'required|email',
           'facebook' =>'required|url',
           'twitter' =>'required|url',
           'insta' =>'required|url',
           'youtube' =>'required|url',

        ];
        $niceNames = [
            'logo' =>trans('admin.logo'),
           'icon' =>trans('admin.icon'),
           'status' =>trans('admin.status'),
           'mobile_number' =>trans('admin.mobileNumber'),
           'main_language' =>trans('admin.mainLanguage'),
           'mail' =>trans('admin.mail'),
           'facebook' =>trans('admin.facebook'),
           'twitter' =>trans('admin.twitter'),
           'insta' =>trans('admin.insta'),
           'youtube' =>trans('admin.youtube'),

        ];
        $settings1 = $this->validate(request(),$rules,[],$niceNames);
        if(request()->hasfile('logo')){
            $settings1['logo'] = up()->upload(
                [
                    'new_name'=>'',
                    'file'=>'logo',
                    'upload_type'=>'single',
                    'path'=>'settings',
                    'delete_file'=>settings()->logo,
                ]
            );
        }
        if(request()->hasfile('icon')){
            $settings1['icon'] = up()->upload(
                [
                    'new_name'=>'',
                    'file'=>'icon',
                    'upload_type'=>'single',
                    'path'=>'settings',
                    'delete_file'=>settings()->icon,
                ]
            );
        }
        Settings::orderBy('id','desc')->update($settings1);
        for($i = 1; $i <=2; $i++ ){
            Settings_description::where('language_id',$i)->update(["address"=>$request['address'][$i],"site_name"=>$request['site_name'][$i],"about_our_work"=>$request['about_our_work'][$i],"maintenance_message"=>$request['maintenance_message'][$i],"work_time"=>$request['work_time'][$i]]);
        }
        $message = trans('admin.settingsUpdatedSuccess');
        return redirect()->back()->with('success',$message);
    } /////////////// Start Settings Get Function //////////

}