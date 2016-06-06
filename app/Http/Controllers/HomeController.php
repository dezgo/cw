<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;
use App\ComponentCategory;
use App\SystemComponent;
use App\System;
use App\Component;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/home');
    }

    public function home()
    {
      return view('content.home');
    }

    public function about()
    {
      return view('content.about');
    }

    public function services()
    {
      return view('services.index');
    }

    public function services_email()
    {
      return view('services.email');
    }

    public function services_systems()
    {
      $component_categories = ComponentCategory::all();
      return view('services.systems', compact('component_categories'));
    }

    public function system_order_send(Request $request)
    {
      $system = System::find($request->id);

      $message = trans('content.system_order_success', ['name' => $request->name]);
      try {
        Mail::send('emails.system_order', ['system' => $system], function ($m) use ($system) {
            $m->from('mail@computerwhiz.com.au', 'Computer Whiz Mail');
            $m->to('derek@computerwhiz.com.au', 'Derek Gillett')
              ->subject(trans('system-order-subject', ['name' => $request->name]));
        });
      }
      catch (\Exception $e) {
        return back()->withInput()->with('message_error', trans('content.contact_error', ['name' => $request->name]));
      }
      return redirect('/contact')->with('message_success', $message);
    }

    public function system_order(Request $request)
    {
        $system = new System;
        $system->save();
        foreach($request->all() as $key=>$value) {
            if (substr($key,0,3) == 'opt') {
                $component = Component::find($value);
                $system_component = new SystemComponent;
                $system_component->system()->associate($system);
                $system_component->component()->associate($component);
                $system_component->save();
            }
        }
        return view('services.system_view', compact('system'));
    }

    public function solutions()
    {
      return view('solutions.index');
    }

    public function contact()
    {
      return view('content.contact');
    }

    public function contact_send(Request $request)
    {
      $this->validate($request, [
              'name' => 'required',
              'email' => 'email|required_without:phone',
              'phone' => 'required_without:email|regex:/^\\(?[01][23478]\\)? ?[0-9\\s]{4,10}$/',
          ]);

      $message = trans('content.contact_success', ['name' => $request->name]);
      try {
        Mail::send('emails.contact', ['request' => $request], function ($m) use ($request) {
            $m->from('mail@computerwhiz.com.au', 'Computer Whiz Mail');
            $m->to(['1min-sms@fut.io'], 'Derek Gillett')
              ->subject(trans('content.email-subject', ['name' => $request->name]));
        });
      }
      catch (\Exception $e) {
        return back()->withInput()->with('message_error', trans('content.contact_error', ['name' => $request->name]));
      }
      return redirect('/contact')->with('message_success', $message);
    }

    public function reading_list()
    {
        return view('content.reading_list');
    }

    public function remote()
    {
        return view('content.remote');
    }
}
