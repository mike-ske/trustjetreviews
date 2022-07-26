<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use shweshi\OpenGraph\OpenGraph;
use shweshi\OpenGraph\Exceptions\FetchException;
use OpenGraph;

class SocialMediaPostingController extends Controller
{
    // get meta date
    public function getmetadata($url){

        try{
            $data = OpenGraph::fetch($url, true);

            echo "<pre>";
            return $data;
            echo "</pre>";

        }catch(FetchException $e){

            return  $e->getMessage();
        }
    }
}
