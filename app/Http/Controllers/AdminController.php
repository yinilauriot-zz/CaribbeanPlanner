<?php

namespace App\Http\Controllers;


use App\User;
use App\Event;
use App\Review;
use App\Article;
use App\Picture;
use App\Customer;
use App\Testimonial;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Routing\Tests\Loader\DirectoryLoaderTest;

class AdminController extends Controller
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
     * delete the pictures in public/uploads/pictures
     * @param $article
     */
    private function deletePicture($article)
    {
        $path = public_path('uploads').DIRECTORY_SEPARATOR.'pictures';

        foreach($article->pictures as $picture)
        {
            if (!is_null($picture->uri))
                File::delete($path.DIRECTORY_SEPARATOR.$picture->uri);
        }
    }

    /**
     * rename a file
     * @param $fileName
     * @return mixed $fileName
     */
    private function renameFile($fileName)
    {
        $interdit = [">", "<",  ":", "*", "/", "|", "?", '"', '<', '>', "'", " ", "-"];
        $fileName = str_replace($interdit, "_", $fileName);
        $search   = ['â', 'à', 'ä', 'æ', 'ç', 'é', 'è', 'ê', 'ë', 'ï', 'î', 'ô', 'ö', 'ù', 'ü', 'û'];
        $replace  = ['a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u', 'u'];
        $fileName = str_replace($search, $replace, $fileName);

        return $fileName;
    }

    public function __construct()
    {
        View::composer('admin.dashboard', function($viewDashboard)
        {
            $events = Event::orderBy('status', 'asc')->orderBy('created_at', 'desc')->get();
            $viewDashboard->with(compact('events'));
        });

        View::composer('admin.admin', function($viewAdmin)
        {
            $customers = Customer::orderBy('created_at', 'desc')->get();
            $viewAdmin->with(compact('customers'));
        });
    }

    /**
     * retrieve event info and customer info related to the user account
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * change the event status ongoing/done on the dashboard page
     * @param $id
     */
    public function changeEventStatus(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $customer_id = $user->customer->event->id;
        $event = Event::findOrFail($customer_id);
        $event->status = ($event->status == 'ongoing') ? 'done' : 'ongoing';
        $event->save();

        return back()->with([
            'message' => 'Le status de l\'évènement a été mis à jour',
            'alert'   => 'success'
        ]);
    }

    /**
     * update the filled customer info form
     * @param $id
     * @param $name
     */
    public function editCustomer($id, $name)
    {
        $user = User::findOrFail($id);
        $folderPath = $this->getFolderPath($name);
        $subfolders = array_map('basename', File::Directories($folderPath));

        return view('admin.editCustomer', compact('user', 'subfolders'));
    }

    /**
     * save the updated customer info form in the DB
     * @param Request $request
     */
    public function updateCustomer(Request $request)
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

        $customer = Customer::where('user_id', $request->input('user_id'))->get()->first();
        $customer->update($request->all());

        return redirect('dashboard')->with([
            'message' => 'Les modifications ont été enregistrées',
            'alert'   => 'success'
        ]);
    }

    /**
     * update the filled event info form
     * @param $id
     * @param $name
     */
    public function editEvent($id, $name)
    {
        $user = User::findOrFail($id);
        $folderPath = $this->getFolderPath($name);
        $subfolders = array_map('basename', File::Directories($folderPath));

        return view('admin.editEvent', compact('user', 'subfolders'));
    }

    /**
     * save the updated event info form in the DB
     * @param Request $request
     */
    public function updateEvent(Request $request)
    {
        $this->validate($request, ([
            'event_name'   => 'required|max:50',
            'event_date'   => 'required|max:10',
            'event_place'  => 'required|max:50',
            'status'       => 'in:ongoing,done',
        ]));

        $event = Event::where('customer_id', $request->input('customer_id'))->get()->first();
        $event->update($request->all());

        return redirect('dashboard')->with([
            'message' => 'Les modifications ont été enregistrées',
            'alert'   => 'success'
        ]);
    }

    /**
     * retrieve all customers folders
     */
    public function admin()
    {
        return view('admin.admin');
    }

    /**
     * retrieve a customer's subfolders
     * @param $id
     * @param $name
     */
    public function showFolder($id, $name)
    {
        $folderPath = $this->getFolderPath($name);
        $subfolders = array_map('basename', File::Directories($folderPath));

        return view('admin.adminFolder', compact('id', 'name', 'subfolders'));
    }

    /**
     * retrieve a customer's files in a subfolder
     * @param $id
     * @param $name
     * @param $subfolder
     */
    public function showFile($id, $name, $subfolder)
    {
        $folderPath = $this->getFolderPath($name);
        $subfolders = array_map('basename', File::Directories($folderPath));

        $filePath = $this->getSubfolderPath($name, $subfolder);
        $files = array_map('basename', File::allFiles($filePath));

        return view('admin.adminFile', compact('id', 'name', 'subfolders', 'subfolder', 'files'));
    }

    /**
     * upload a file to a customer's subfolder
     * @param Request $request
     * @param $id
     * @param $name
     * @param $subfolder
     */
    public function uploadFile(Request $request, $id, $name, $subfolder)
    {
        $filePath = $this->getSubfolderPath($name, $subfolder);
        $file = $request->file('file');

        if (!is_null($file))
        {
            $fileName = $file->getClientOriginalName();
            $fileName = $this->renameFile($fileName);
            $file->move($filePath, $fileName);

            return back()->with([
                'message' => 'Le document a été ajouté',
                'alert'   => 'success'
            ]);
        } else
        {
            return back()->with([
                'message' => 'Merci de choisir un document à ajouter dans le répertoire',
                'alert'   => 'error'
            ]);
        }
    }

    /**
     * download a file from a customer's subfolder
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
     * delete a file from a customer's subfolder
     * @param $id
     * @param $name
     * @param $subfolder
     * @param $file
     */
    public function deleteFile($id, $name, $subfolder, $file)
    {
        $filePath = $this->getSubfolderPath($name, $subfolder);
        $file = $filePath.DIRECTORY_SEPARATOR.$file;
        File::delete($file);

        return back()->with([
            'message' => 'Le document a été supprimé',
            'alert'   => 'success'
        ]);
    }

    /**
     * retrieve all articles related to events
     */
    public function showArticle()
    {
        $articles = Article::orderBy('status', 'asc')->orderBy('created_at', 'desc')->get();

        return view('admin.allArticles', compact('articles'));
    }

    /**
     * retrieve the article creation form
     */
    public function createArticle()
    {
        $events = Event::orderBy('created_at', 'desc')->get();

        return view('admin.createArticle', compact('events'));
    }

    /**
     * save the article related to an event
     * @param Request $request
     */
    public function storeArticle(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required',
            'title'       => 'required|max:50',
            'status'      => 'in:published,unpublished',
        ]);

        $user = User::where('name', $request->input('name'))->first();
        $event_id = $user->customer->event->id;

        $article = [
            'event_id'    => $event_id,
            'title'       => $request->input('title'),
            'content_1'   => $request->input('content_1'),
            'content_2'   => $request->input('content_2'),
            'content_3'   => $request->input('content_3'),
            'content_4'   => $request->input('content_4'),
            'status'      => $request->input('status'),
        ];
        Article::create($article);

        return redirect('article')->with([
                'message' => 'Un nouvel article a été créé',
                'alert'   => 'success',
            ]
        );
    }

    /**
     * update an article info
     * @param $id
     * @param $title
     */
    public function editArticle($id, $title)
    {
        $article = Article::findOrFail($id);

        return view('admin.editArticle', compact('article'));
    }

    /**
     * save an article info in the DB
     * @param Request $request
     * @param $id
     * @param $title
     */
    public function updateArticle(Request $request, $id, $title)
    {
        $article = Article::findOrFail($id);

        if($article->pictures)
        {
            foreach($article->pictures as $picture)
            {
                if ($request->input('remove_'.$picture->title)=='true')
                {
                    $path = public_path('uploads').DIRECTORY_SEPARATOR.'pictures';
                    File::delete($path.DIRECTORY_SEPARATOR.$picture->uri);

                    Picture::where('title', $picture->title)->delete();
                }
            }
        }

        $this->validate($request, [
            'id'        => 'required|integer',
            'event_id'  => 'required|integer',
            'title'     => 'required|max:50',
            'status'    => 'in:published,unpublished',
        ]);

        $article->update($request->all());

        return redirect('article')->with([
            'message' => 'La modification de l\'article a été enregistrée' ,
            'alert'   => 'success',
        ]);
    }

    /**
     * delete an article from the DB
     * @param $id
     * @param $title
     */
    public function deleteArticle($id, $title)
    {
        $article = Article::findOrFail($id);
        $this->deletePicture($article);
        $article->delete();

        return redirect('article')->with([
            'message' => 'L\'article a été supprimée' ,
            'alert'   => 'success',
        ]);
    }

    /**
     * change the article status published/unpublished on the article list page
     * @param $id
     */
    public function changeArticleStatus($id)
    {
        $article = Article::findOrFail($id);
        $article->status = ($article->status == 'published') ? 'unpublished' : 'published';
        $article->save();

        return back()->with([
            'message' => 'Le status de l\'article a été mis à jour',
            'alert'   => 'success'
        ]);
    }

    /**
     * add the pictures into an article
     */
    public function addPicture()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();

        return view('admin.addPicture', compact('articles'));
    }

    /**
     * save the pictures in the DB and also in public/uploads/pictures
     * @param Request $request
     */
    public function storePicture(Request $request)
    {
        $title = $request->input('title');
        $article = Article::where('title', $title)->first();

        for($i=1; $i<=10; $i++) {
            if (!is_null($request->file('thumbnail_' . $i))) {
                /*return back()->with([
                    'message' => 'Merci de choisir des photos à ajouter dans l\'article',
                    'alert' => 'error'
                ]);
            } else {*/

                $img = $request->file('thumbnail_' . $i);
                $uri = $img->getClientOriginalName();
                $uri = $this->renameFile($uri);
                $title = str_replace('.', '_', $uri);
                $ext = $img->getClientOriginalExtension();

                $path = public_path('uploads') . DIRECTORY_SEPARATOR . 'pictures';
                $img->move($path, $uri);

                $picture = [
                    'article_id' => $article->id,
                    'title' => $title,
                    'uri' => $uri,
                    'size' => $img->getClientSize(),
                    'type' => $ext,
                ];

                Picture::create($picture);
            }
        }

        return redirect('article')->with([
            'message' => 'Les photos ont été ajoutées',
            'alert' => 'success',
        ]);
    }

    /**
     * retrieve all customers testimonials
     */
    public function testimonial()
    {
        $testimonials = Testimonial::with('user')->get();

        return view('admin.testimonial', compact('testimonials'));
    }

    /**
     * add a review to the customer's article
     */
    public function addTestimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $articles = Article::orderBy('created_at', 'desc')->get();

        return view('admin.addTestimonial', compact('articles', 'testimonial'));
    }

    /**
     * save a review in the DB
     * @param Request $request
     */
    public function storeTestimonial(Request $request)
    {
        $this->validate($request, [
            'article_id'     => 'required|integer',
            'comment'        => 'required|max:255',
            'status'         => 'in:published,unpublished',
        ]);

        $id = $request->input('article_id');
        $content = $request->input('comment');

        $article = Article::findOrfail($id);
        $user_id = $article->event->customer->user->id;
        $testimonial = Testimonial::where('user_id', $user_id)->where('comment', 'like', '%'.$content.'%')->first();
        $testimonial->status = $request->input('status');
        $testimonial->save();

        if($testimonial->status == 'published')
        {
            Review::create([
                'article_id'      => $id,
                'content'         => $content,
            ]);
        } else
        {
            $review_id = $article->review->id;
            Review::where('id', $review_id)->delete();
        }

        return redirect('testimonial')->with([
            'message' => 'L\'avis a été ajouté',
            'alert'   => 'success',
        ]);
    }
}
