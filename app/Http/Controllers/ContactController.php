<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use App\MyModules\MyModule;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //
    public function getContactPage()
    {
        return view('contact');
    }
    // --------------- submit contact form -------------------
    public function contactFormSubmit(Request $request)
    {
        if ($request->ajax()) {
            $message = [];
            $status = 400;
            $error_message = [
                'required' => ':attribute is required field  !',
                'email' => ':attribute is email type  !',
            ];
            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required',
                    'email' => 'required|email',
                    'subject' => 'required',
                    'message' => 'required'
                ],
                $error_message
            );
            if ($validator->fails()) {
                $message = $validator->errors()->all();
            } else {
                $check = false;
                try {
                    $email_details = MyModule::getEmailDetails('contact', $request->email);
                    $check = true;
                } catch (Exception $err) {
                    $message = 'Server error please try later ';
                    $status = 500;
                }
                if ($check) {
                    DB::beginTransaction();
                    try {
                        $update_data = [
                            'subject' => $request->subject,
                            'message' => $request->message
                        ];
                        if (count($email_details) == 0) {
                            $new_data = [
                                'name' => $request->name,
                                'email' => $request->email
                            ];
                            $save_contact = ContactModel::create(
                                $new_data
                            );
                            $update_data['contact_id'] = $save_contact->id;
                            MyModule::insertData('contact_message', $update_data);
                        } else {
                            $update_data['contact_id'] = $email_details[0]->id;
                            MyModule::insertData('contact_message', $update_data);
                        }
                        DB::commit();
                        $message = 'Successfully send your query !';
                        $status = 200;
                    } catch (Exception $err) {
                        DB::rollBack();
                        $message = 'Server error please try later ';
                        $status = 500;
                    }
                }
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }
}
