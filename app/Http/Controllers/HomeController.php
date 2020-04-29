<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * The image from the firebase.
     *
     * @var array|string
     */
    protected $array_img_firebase;

    public function show(){
        $this->firebase();
        return view('home');
    }

    public function changeLang($locale){
        App::setLocale($locale);
        return view('home');
    }

    public function firebase(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/coincoininsolite-1cf37-firebase-adminsdk-cmjw0-7e4e9cceb0.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->create();

        $database = $firebase->getDatabase();
        
        // Get a reference to the storage service, which is used to create references in your storage bucket
        $newPost = $database
        ->getReference('Images')
        ->getValue();

        //$storage = $firebase->createStorage();

        //$storageRef = $storage.storage().ref();


        // Create a reference to the file we want to download
        //$starsRef = $storageRef.child('images/stars.jpg');

        // Get the download URL
        // $storageRef.child('images/stars.jpg').getDownloadURL()
        // .then(
        //     function($url) {
        //         $img = $url;
        //     }
        // );


        // var_dump($img); die();
        //var_dump($newPost); die();


        
    }
}
