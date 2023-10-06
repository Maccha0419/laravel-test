<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Rules\ZipCodeRule;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(ContactRequest $request)
    {
        // $request->merge(['fullname'=>$request['last_name']."\t" .$request['first_name']]);
        // $contact = $request->only(['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        // return view('confirm', compact('contact'));
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        return view('confirm', compact('contact'));
    }
    public function store(ContactRequest $request)
    {
        // if ($request->has('back')) {
        //     $request->merge(['last_name'=>mb_strstr($request['fullname'],"\t",true)]);
        //     $request->merge(['first_name'=>mb_strstr($request['fullname'],"\t",false)]);
        //     $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        //     return redirect('/')->withInput($contact);
        // }
        // $contact = $request->only(['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        // Contact::create($contact);
        // return view('thanks');

        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        if ($request->has('back')) {
            $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
            return redirect('/')->withInput($contact);
        }
        Contact::create($contact);
        return view('thanks');
    }

    public function management()
    {
        $contact = Contact::Paginate(4);
        return view('management', compact('contact'));
    }
    public function search()
    {
        $contact = Contact::with('contact')->KeywordSearch($request->fullname)->KeywordSearch($request->gender)->KeywordSearch($request->date_start)->KeywordSearch($request->date_finish)->KeywordSearch($request->email)->get();
        return view('management', compact('contact'));
    }
}
