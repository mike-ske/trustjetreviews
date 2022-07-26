<?php

namespace App;

use Twitter;
use App\Sites;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use shweshi\OpenGraph\OpenGraph as OpenGraphClass;

class SeoGen {

    
    public static function seoSitePosting(Sites $slug)
    {
        $seo_url = Sites::where('url', $slug->url)->first();
          // GET META TAGS FROM WEBSITE FOR SOCIALMEDIA POSTING
        $opg = new OpenGraphClass();
        $data = $opg->fetch($slug->url, true); 
          
        SEOMeta::setTitle($title=$seo_url->business_name ?? $data['title']);
        SEOMeta::setDescription(isset($data['description'])? $data['description'] : $desc=$seo_url->metadata);
        SEOMeta::addMeta('article:published_time', $seo_url->created_at->toW3CString(), 'property');
        // SEOMeta::addKeyword($keywords=$seo_url->keywords ?? $data['keywords']);

        OpenGraph::setDescription(isset($data['description'])? $data['description'] : $desc=$seo_url->metadata);
        OpenGraph::setTitle($title=$seo_url->business_name ?? $data['title']);
        OpenGraph::setUrl('https://localhost:8000/reviews/'.$seo_url->slug);
        OpenGraph::addProperty('type', "website");
        OpenGraph::addProperty('locale', 'en-US');
        OpenGraph::addImage($img='no image' ?? $data['image']);

        Twitter::setTitle($title=$seo_url->business_name ?? $data['title']);
        Twitter::setSite('@Trustjetreviews');
        
        JsonLd::setDescription(isset($data['description'])? $data['description'] : $desc=$seo_url->metadata);
        JsonLd::setType('website');
        JsonLd::addImage($img='no image' ?? $data['image']);

        return $seo_url;
    
    }
}