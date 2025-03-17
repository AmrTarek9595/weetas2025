<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactUsController extends Controller
{
    //

public function index(){

    $contact = ContactUs::paginate(10);
    return response()->json(['message' => 'List Contacts', 'contact' => $contact , 'status' => 'success'], 201);

}

public function createContact(ContactRequest  $request){

    try {

        $contact = ContactUs::create($request->validated());

        return response()->json(['message' => 'Contact created successfully', 'contact' => $contact , 'status' => 'success'], 201);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Something went wrong', 'error' => $e->getMessage() ,'status' => 'error'], 500);
    }

}
}
