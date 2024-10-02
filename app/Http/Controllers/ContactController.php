<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function save(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email|max:255|unique:contacts,email',
            'message' => 'required|string|min:10',
        ]);
        if($validation->fails()) {
            return response()->json(['errors' => $validation->errors()]);
        }
        try{
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ]);
        }catch (\Exception $exception){
            logger()->error($exception->getMessage());
            return response()->json(['error' => $exception->getMessage()]);
        }

        return response()->json(['success' => 'We have received your query, our team will get back to you.']);
    }
}
