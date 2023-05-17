<?php

namespace Thapelo\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Thapelo\Contact\Models\Contact;
use Thapelo\Contact\Models\Blog;
use Thapelo\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
       }
    public function test(){
        return view('contact::testview');
       }
    
       public function submitform(Request $request){


        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect(route('contact'));
       }

       public function get(){
        $contacts = Contact::all();
        return view('contact::testview', compact('contacts'));
       }

       public function add_blog(){
        return view('contact::admin/add_blog');
       }

       public function saveblog(Request $request){


        $request->validate([
            'icon' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = time() . '_' . $request->name . '.' . $request->icon->extension();

        $request->icon->move(public_path('images'), $newImageName);
        

        $blog = new Blog;
        $blog->icon = $newImageName;
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->content = $request->content;
        $blog->save();

        return redirect()->back();
       }

       public function blogs(){
        $blog = Blog::all();
        return view('contact::blogs', compact('blog'));
       }
}