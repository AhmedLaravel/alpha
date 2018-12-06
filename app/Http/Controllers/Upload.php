<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//.......In this Function We Are Going To Upload Date Using Storage...........\\
class Upload extends Controller
{
    public function upload($data=[]){

        if(request()->hasFile($data['file']) and $data['upload_type'] == 'single') {
            if (!empty($data['delete_file'])) {//........If There Is Updating To Delete The Last One.............\\
                \Storage::delete($data['delete_file']);
            }//........If There Is Updating To Delete The Last One.............\\
            if ($data['new_name'] == null) {
                return request()->file($data['file'])->store($data['path']);
            } else {//...........If You Want To Name The Image With Special Name.......\\
                return request()->file($data['file'])->storeAs($data['path'], $data['new_name']);
            }
        }
    }
}
