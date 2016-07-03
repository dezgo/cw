<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\ComponentCategory;
use App\SystemComponent;
use App\System;
use App\Component;
use Validator;
use Session;
use App\Jobs\SendSystemOrderCWEmail;
use App\Jobs\SendSystemOrderCustomerEmail;
use Mail;

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

    public function edit_system(System $system)
    {
        Session::forget('system_id');
        $component_categories = ComponentCategory::all();
        return view('services.systems', compact('component_categories','system'));
    }

    public function services_systems()
    {
        if (Session::has('system_id')) {
            $system_id = Session::get('system_id');
            $system = System::findOrFail($system_id);
            return view('services.system_view', compact('system'));
        }
        else {
            $component_categories = ComponentCategory::all();
            return view('services.systems', compact('component_categories'));
        }
    }

    // validate system order details
    // save new details
    // email system order to CW and customer
    public function system_order_send(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'email|required',
                'phone' => 'required|regex:/^\\(?[01][23478]\\)? ?[0-9\\s]{4,10}$/',
            ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)
                        ->withInput();
        }

        $system = System::findOrFail($request->id);
        $system->name = $request->name;
        $system->phone = $request->phone;
        $system->email = $request->email;
        $system->save();

        $message = trans('content.system_order_success', ['name' => $system->name]);

        $this->dispatch(new SendSystemOrderCWEmail($system));
        $this->dispatch(new SendSystemOrderCustomerEmail($system));

        $request->session()->forget('system_id');
        return redirect('/contact')->with('message_success', $message);
    }

    public function system_order(Request $request)
    {
        if ($request->system_id <> '') {
            $system = System::findOrFail($request->system_id);
            $system->system_components()->delete();
            $system->delete();
        }
        $system = new System;
        $system->save();
        $request->session()->put('system_id', $system->id);
        foreach($request->all() as $key=>$value) {
            if (substr($key,0,3) == 'opt' && $value != 'skip') {
                $component = Component::findOrFail($value);
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

    public function test()
    {
        $system = System::findOrFail(10);
        return view('emails.system_order_customer', compact('system'));
    }

    public function blog($post = "")
    {
        switch ($post) {
            case 'spotify':
                return view('content.blog.spotify');
            default:
                return view('content.blog');
        }
    }
}
