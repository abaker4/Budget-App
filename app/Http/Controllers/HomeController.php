<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactNewsletter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\Newsletter;

class HomeController extends Controller
{

    protected $guarded = [];


    /**
     * Show the application landing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

  
       
        return view('landing');
    }


    /**
     * Checking to see if Email exists in DB, if not it will record and pass a flash message,
     * if it does exist it will pass a different flass message and redirect '/'
     *
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function newsletterSignup(Request $request)
    {
        $data = $request->all();


        $contact_exists = DB::table('contact_newsletters')
            ->where(['email' => $data['email']])
            ->get();

        if($contact_exists->isEmpty()){

            $contact_newsletter= ContactNewsletter::firstorCreate(['email' => $data['email']]);

            $contact_newsletter->save();

            session()->flash('message', 'Thanks for signing up, we know you are going to love it!');

            Mail::to($contact_newsletter)->send(new Newsletter($contact_newsletter));

        } else {

            session()->flash('message', 'You are already signed up');
        }



        return redirect('/');


     

    }
}
