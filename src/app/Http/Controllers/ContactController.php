<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categoryAll = Category::all();
        return view('index', compact('categoryAll'));
    }

    public function confirm(Request $request)
    {
        $contactData=$request->only(['last_name','first_name','gender','email','tel1','tel2','tel3', 'address','building','category_id', 'detail']);

        $category=Category::find($request->category_id);
        $contactData['category_name'] = $category ? $category->content : '未設定';

        return view('confirm', compact('contactData'));
    }

    public function store(Request $request)
    {
        $contactData=$request->only(['last_name','first_name','gender','email','tel1','tel2','tel3', 'address','building','category_id', 'detail']);
        Contact::create($contactData);
        return view('thanks');
    }
}
