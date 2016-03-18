<?php

namespace App\Http\Controllers;


use App\Article;
use App\Testimonial;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    /**
     * retrieve home page
     */
    public function index()
    {
        return view('front.index');
    }

    /**
     * retrieve offer page
     */
    public function showOffer()
    {
        return view('front.offer');
    }

    /**
     * retrieve agency page
     */
    public function showAgency()
    {
        return view('front.agency');
    }

    /**
     * retrieve the last article and the six previous articles
     */
    public function showOurweddings()
    {
        $toparticle = Article::orderBy('created_at', 'desc')->first();
        $articles = Article::where('id', '!=', $toparticle->id)->orderBy('created_at', 'desc')->take(6)->get();

        return view('front.ourweddings', compact('toparticle', 'articles'));
    }

    /**
     * retrieve an article and its review
     * @param $id
     * @param $title
     */
    public function showArticle($id, $title)
    {
        $article = Article::find($id);
        $others = Article::where('id', '!=', $id)->orderBy('created_at', 'desc')->take(2)->get();

        return view('front.article', compact('article', 'others'));
    }

    /**
     * retrieve guadeloupe page
     */
    public function showGuadeloupe()
    {
        return view('front.guadeloupe');
    }

    /**
     * retrieve contact form page
     */
    public function showContact()
    {
        return view('front.contact');
    }

    /**
     * send the contact form to admin mail
     * @param Request $request
     */
    public function storeContact(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|max:50',
            'email'         => 'required|email',
            'telephone'     => 'required|max:20',
            'event'         => 'required|max:50',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $telephone = $request->input('telephone');
        $period = $request->input('period');
        $event = $request->input('event');
        $content = $request->input('content');

        Mail::send('emails.contact', compact('name', 'email', 'telephone', 'period', 'event', 'content'), function($m) use($request){
            $m->from($request->input('email'), 'Client');
            $m->to(env('EMAIL_TECH'), 'admin')->subject('Contact e-boutique');
        });

        return back()->with([
            'message' => trans('app.contactSuccess'),
            'alert'   => 'success'
        ]);
    }
}
