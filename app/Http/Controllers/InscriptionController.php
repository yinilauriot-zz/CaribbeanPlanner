<?php

namespace App\Http\Controllers;

use App\User;
use App\Event;
use App\Customer;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class InscriptionController extends Controller
{
    /**
     * retrieve the path storage/uploads/docs
     * @return string $path
     */
    private function getPath()
    {
        $path = storage_path('uploads').DIRECTORY_SEPARATOR.'docs';

        return $path;
    }

    /**
     * retrieve the account inscription form
     */
    public function getUser()
    {
        $user = null;
        if(session()->has('user')) $user = session()->get('user');

        return view('admin.inscription', compact('user'));
    }

    /**
     * save the account form in the DB and create the related folder and subfolders
     * @param Request $request
     */
    public function postUser(Request $request)
    {
        $id='';
        $userExist = session()->has('user');
        if($userExist)
        {
            $user = session()->get('user');
            $id = $user->id;
        }

        $this->validate($request, [
            'name'                  => 'required|max:100',
            'email'                 => 'required|email|unique:users,email,'.$id,
            'password'              => 'required|confirmed|min:4',
            'password_confirmation' => 'required',
        ]);

        if($userExist)
        {
            $user = User::findOrFail($user->id);
            $user->update([
                'name'     => $request->input('name'),
                'email'    => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role'     => 'visitor'
            ]);
        }else
        {
            $user = [
                'name'     => $request->input('name'),
                'email'    => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role'     => 'visitor'
            ];
            $user = User::create($user);
        }

        $folders = ['CEREMONIE', 'CONTACTS-CLIENTS', 'CONTRATS', 'DECORATION', 'PLANNING', 'DOCUMENTS-CLIENTS', 'PRESTATAIRES'];
        $path = $this->getPath();
        $folderPath = $path.DIRECTORY_SEPARATOR.$user['name'];
        if(!File::exists($folderPath))
        {
            foreach ($folders as $folder)
            {
                File::makeDirectory($folderPath.DIRECTORY_SEPARATOR.$folder, 0777, true);
            }
        }

        session()->put('user', $user);

        return redirect('inscription/customer');
    }

    /**
     * retrieve the customer inscription form
     */
    public function getCustomer()
    {
        $user = session()->get('user');
        $customer = null;
        if(session()->has('customer')) $customer = session()->get('customer');

        return view('admin.customer', compact('user', 'customer'));
    }

    /**
     * save the customer form in the DB
     * @param Request $request
     */
    public function postCustomer(Request $request)
    {
        $this->validate($request, [
            'bride_name'        => 'required|max:50',
            'bridegroom_name'   => 'required|max:50',
            'address'           => 'required|max:200',
            'postal_code'       => 'required|max:10',
            'city'              => 'required|max:50',
            'country'           => 'required|max:50',
            'telephone'         => 'required|max:20',
        ]);

        if(session()->has('customer'))
        {
            $customer = session()->get('customer');
            $customer = Customer::findOrFail($customer->id);
            $customer->update($request->all());
        }else
        {
            $customer = [
                'user_id'           => $request->input('user_id'),
                'bride_name'        => $request->input('bride_name'),
                'bridegroom_name'   => $request->input('bridegroom_name'),
                'address'           => $request->input('address'),
                'postal_code'       => $request->input('postal_code'),
                'city'              => $request->input('city'),
                'country'           => $request->input('country'),
                'telephone'         => $request->input('telephone'),
            ];
            $customer = Customer::create($customer);
        }

        session()->put('customer', $customer);

        return redirect('inscription/event');
    }

    /**
     * retrieve the event form
     */
    public function getEvent()
    {
        $customer = session()->get('customer');

        return view('admin.event', compact('customer'));
    }

    /**
     * save the event form in the DB
     * @param Request $request
     */
    public function postEvent(Request $request)
    {
        $this->validate($request, ([
            'event_name'   => 'required|max:50',
            'event_date'   => 'required|max:10',
            'event_place'  => 'required|max:50',
            'status'       => 'in:ongoing,done',
        ]));

        $event = [
            'customer_id'     => $request->input('customer_id'),
            'event_name'      => $request->input('event_name'),
            'event_date'      => $request->input('event_date'),
            'event_place'     => $request->input('event_place'),
            'status'          => $request->input('status'),
        ];
        Event::create($event);

        session()->forget('user');
        session()->forget('customer');

        return redirect('dashboard')->with([
            'message' => 'Un nouveau compte a été créé',
            'alert'   => 'success'
        ]);
    }
}
