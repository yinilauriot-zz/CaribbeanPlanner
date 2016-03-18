<?php

namespace App\Http\Controllers;

use App\User;
use App\Customer;
use App\Testimonial;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
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
     * retrieve the folder
     * @param $name
     * @return string $folderPath
     */
    private function getFolderPath($name)
    {
        $path = $this->getPath();
        $folderPath = $path.DIRECTORY_SEPARATOR.$name;

        return $folderPath;
    }

    /**
     * retrieve the subfolder
     * @param $name
     * @param $subfolder
     * @return string $subfolderPath
     */
    private function getSubfolderPath($name, $subfolder)
    {
        $foldersPath = $this->getFolderPath($name);
        $subfolderPath = $foldersPath.DIRECTORY_SEPARATOR.$subfolder;

        return $subfolderPath;
    }

    /**
     * retrieve an account info, its event info and its subfolders
     * @param $id
     * @param $name
     */
    public function index($id, $name)
    {
        $user = User::findOrFail($id);
        $folderPath = $this->getFolderPath($name);
        $subfolders = array_map('basename', File::Directories($folderPath));

        return view('user.user', compact('user', 'subfolders'));
    }

    /**
     * retrieve an account's files in a subfolder
     * @param $id
     * @param $name
     * @param $subfolder
     */
    public function showFile($id, $name, $subfolder)
    {
        $user = User::findOrFail($id);
        $folderPath = $this->getFolderPath($name);
        $subfolders = array_map('basename', File::Directories($folderPath));

        $filePath = $this->getSubfolderPath($name, $subfolder);
        $files = array_map('basename', File::allFiles($filePath));

        return view('user.userFile', compact('user', 'subfolders', 'subfolder', 'files'));
    }

    /**
     * download a file from an account's subfolder
     * @param $id
     * @param $name
     * @param $subfolder
     * @param $file
     */
    public function downloadFile($id, $name, $subfolder, $file)
    {
        $filePath = $this->getSubfolderPath($name, $subfolder);
        $file = $filePath.DIRECTORY_SEPARATOR.$file;

        return response()->download($file);
    }

    /**
     * retrieve an account's personal info form
     * @param $id
     * @param $name
     */
    public function editPersoInfo($id, $name)
    {
        $user = User::findOrFail($id);

        return view('user.userPersoInfo', compact('user'));
    }

    public function updatePersoInfo(Request $request, $id, $name)
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

        $customer = Customer::where('user_id', $id)->get()->first();
        $customer->update($request->all());

        return redirect()->action('UserController@index', [$id, $name])->with([
            'message' => 'Les modifications ont été enregistrées',
            'alert'   => 'success'
        ]);
    }

    /**
     * save the testimonials in the DB
     * @param Request $request
     * @param $id
     * @param $name
     */
    public function storeComment(Request $request, $id, $name)
    {
        $this->validate($request, [
            'user_id'       => 'required|integer',
            'comment'       => 'required|max:255',
        ]);

        $testimonial = [
            'user_id'       => $request->input('user_id'),
            'comment'       => $request->input('comment'),
            'status'        => 'unpublished',
        ];

        Testimonial::create($testimonial);

        return redirect()->action('UserController@index', [$id, $name])->with([
            'message' => 'Votre avis a été ajouté',
            'alert'   => 'success'
        ]);
    }
}
