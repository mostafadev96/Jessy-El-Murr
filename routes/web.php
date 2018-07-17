<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $items=array(
        [
            'photo'=>'imgs/home/part3/firstcarousel.png',
            'title'=>'Innovative young Arabs',
            'duration'=>'02:00',
            'link'=>'#'
        ],
        [
            'photo'=>'imgs/home/part3/firstcarousel.png',
            'title'=>'Innovative young Arabs',
            'duration'=>'02:00',
            'link'=>'#'
        ],
        [
            'photo'=>'imgs/home/part3/firstcarousel.png',
            'title'=>'Innovative young Arabs',
            'duration'=>'02:00',
            'link'=>'#'
        ],
        [
            'photo'=>'imgs/home/part3/firstcarousel.png',
            'title'=>'Innovative young Arabs',
            'duration'=>'02:00',
            'link'=>'#'
        ],
    );
    $guests=array(
        [
            'name'=>'Rose Leslie',
            'job'=>'Movie actor',
            'photo'=>'imgs/home/part4/fourthpartphoto.png'

        ],
        [
            'name'=>'Rose Leslie',
            'job'=>'Movie actor',
            'photo'=>'imgs/home/part4/fourthpartphoto.png'
        ],
        [
            'name'=>'Rose Leslie',
            'job'=>'Movie actor',
            'photo'=>'imgs/home/part4/fourthpartphoto.png'
        ],

    );
    $episodes=array(
        [
            'photo'=>'imgs/home/part5/fifthpartphoto.png',
            'title'=>'Episodes one',
            'link'=>'#'
        ],
        [
            'photo'=>'imgs/home/part5/fifthpartphoto.png',
            'title'=>'Episodes one',
            'link'=>'#'
        ],
        [
            'photo'=>'imgs/home/part5/fifthpartphoto.png',
            'title'=>'Episodes one',
            'link'=>'#'
        ],
        [
            'photo'=>'imgs/home/part5/fifthpartphoto.png',
            'title'=>'Episodes one',
            'link'=>'#'
        ],
        [
            'photo'=>'imgs/home/part5/fifthpartphoto.png',
            'title'=>'Episodes one',
            'link'=>'#'
        ],
        [
            'photo'=>'imgs/home/part5/fifthpartphoto.png',
            'title'=>'Episodes one',
            'link'=>'#'
        ],

    );
    $gallery=array(
        [
            'title'=>'Innovative young arabs',
            'size'=>'8',
            'photo'=>'imgs/home/part6/sixthpartphoto.png',
            'link'=>'#',

        ],
        [
            'title'=>'Innovative young arabs',
            'size'=>'8',
            'photo'=>'imgs/home/part6/sixthpartphoto.png',
            'link'=>'#',
        ]

    );
    $testimonials=array(
        [
            'photo'=>'imgs/home/part7/emma_stone_11.png',
            'name'=>'Emma Stone',
            'description'=>'Jessy El Murr is a multimedia journalist, speaker and moderator with a special interest in social media and Arab youth.',
        ],
        [
            'photo'=>'imgs/home/part7/emma_stone_11.png',
            'name'=>'Emma Stone',
            'description'=>'Jessy El Murr is a multimedia journalist, speaker and moderator with a special interest in social media and Arab youth.',
        ],
        [
            'photo'=>'imgs/home/part7/emma_stone_11.png',
            'name'=>'Emma Stone',
            'description'=>'Jessy El Murr is a multimedia journalist, speaker and moderator with a special interest in social media and Arab youth.',
        ],
        [
            'photo'=>'imgs/home/part7/emma_stone_11.png',
            'name'=>'Emma Stone',
            'description'=>'Jessy El Murr is a multimedia journalist, speaker and moderator with a special interest in social media and Arab youth.',
        ],

    );
    $data=array('shortBreaf' =>
        'Jessy El Murr is a multimedia journalist, speaker and moderator with a special interest in social media and Arab youth',
        'jobTitle'=>'International Journalist & Speaker',
        'name'=>'JESSY El-MURR',
        'phrases'=>['is a multimedia journalist, speaker and moderator with a special interest in social media and Arab youth.','El Murr currently produces and presents Sky News Arabia’s daily segment Taghreedat Al Sabah  which highlights portraits of inspirational young Arabs who have succeeded in making an impact in our digital world.','With over 15 years of media experience, El Murr is a Lebanese-American journalist who has reported for several international TV networks including BBC and Al Jazeera before moving to UAE in 2012.'],
        'items'=>$items,
        'guests'=>$guests,
        'episodes'=>$episodes,
        'gallery'=>$gallery,
        'lsidegallery'=>[
            'title'=>'Innovative young arabs',
            'size'=>'8',
            'photo'=>'imgs/home/part6/sixthphoto.png',
            'link'=>'#',
        ],
        'rsidegallery'=>[
            'title'=>'Innovative young arabs',
            'size'=>'8',
            'photo'=>'imgs/home/part6/sixthphoto.png',
            'link'=>'#',
        ],
        'testimonials'=>$testimonials,
    );
    $data = json_encode($data);
    return view('index')->with('data',$data);

});
