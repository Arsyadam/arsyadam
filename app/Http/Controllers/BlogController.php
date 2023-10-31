<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://v1.nocodeapi.com/arsyadam/medium/ZrwJYBOKDVPRtBDz",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_POSTFIELDS =>'{}',
    CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);
$data = json_decode($response);

curl_close($curl);



$post = new Blog();
foreach ($data as $key => $value) {
    $post->$key = $value;
}
$post->save();


class BlogController extends Controller
{
    
    public function index()
    {
        $blog = Blog::All();
        return view('blog', $blog);

    }

    public function show(Book $book)
    {
        return new BookResource($book);
    }
}
