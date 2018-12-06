<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Contact_us;
use Illuminate\Http\Request;

class AdminContactUs extends Controller
{ //............... Start Class Contact Us..............\\

    public function viewContacts(){//............... Start function to View The Contacts ..............\\
        $title = trans('admin.contacts');
        $titleSummary = trans('admin.contactTitleSummary');
        $contacts = Contact_us::orderBy('contact_id','desc')->get();
        return view('Admin.contactUs.adminContactUs',['title'=>$title, 'contacts'=> $contacts,'titleSummary'=> $titleSummary]);
    }//.................... End Function to View Contacts ..............\\


     public function deleteContacts(Request $request){//............... Start function to Delete The Contacts ..............\\
        $contact_id = request('contact_id');
        $delete = Contact_us::find($contact_id);
        $delete->delete();
        $message = trans('admin.contactDeletedSuccess');
        return redirect()->back()->with('success',$message);
    }//.................... End Function to Delete Contacts ..............\\

    public function deleteAll(){//............... Start function to Delete The Contacts ..............\\
        $contacts = Contact_us::inRandomOrder()->get();
        foreach( $contacts as $contact ){
            $contact->delete();
        }
        $message = trans('admin.contactDeletedAllSuccess');
        return redirect()->back()->with('success',$message);
    }//.................... End Function to Delete Contacts ..............\\

    public function viewContent($id){//............... Start function to view One Content ..............\\
        $title = trans('admin.contentView');
        $content = Contact_us::find($id);
        return view('Admin.contactUs.adminContactViewContent',['title'=>$title, 'content' => $content]);

    }//.................... End function to view One Content ..............\\

}//............... End Class Contact Us..............\\
