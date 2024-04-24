<?php

namespace App\Http\Controllers;

use App\MyModules\MyModule;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NewsLetterController extends Controller
{
    // -------- submit newsletter -------------
    public function postNewsLetter(Request $request)
    {
        if ($request->ajax()) {
            $error_message = [
                'required' => ':attribute is required field !',
                'email' => ':attribute is required field !'
            ];
            $validator = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email',
                    'news_type' => 'required|integer'
                ],
                $error_message
            );
            $message = [];
            $status = 400;
            if ($validator->fails()) {
                $message = $validator->errors()->all();
            } else {
                try {
                    if (MyModule::checkIsEmailExists('newsletter', $request->email)) {
                        DB::table('newsletter')
                            ->insert([
                                'email' => $request->email,
                                'newsletter_type' => $request->news_type
                            ]);
                        $status = 200;
                        $message = 'Thank you for submit';
                    } else {
                        array_push($message, 'Your email-id already exists !');
                    }
                } catch (Exception $err) {
                    array_push($message, 'Server error please try later !');
                }
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }
}
