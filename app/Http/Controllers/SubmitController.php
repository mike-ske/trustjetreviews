<?php

namespace App\Http\Controllers;
use Mail;
use Options;
use App\User;
use App\Sites;

use App\Category;
use Illuminate\Http\Request;
use App\Mail\EmailNotification;


class SubmitController extends Controller
{

    // construct
    public function __construct() {
        $this->middleware(['auth']);
        
    }


    // submit company form
    public function submitCompanyForm(  ) {
        
        $categories = Category::all();
        $seo_title = __( 'Submit Company' ) . ' - ' . env( 'APP_NAME' );

        return view('submit-company', compact( 'categories', 'seo_title' ));

    }


    // process new entry
    public function submitStore ( Request $r )
    {

        $this->validate( $r, [ 'url' => 'required|url' ]);

        // does this url exist?
        if( !urlExists( $r->url ) ) {
            alert()->error(__('This URL could not be reached. Please check for errors'), __('URL Error'));
            return back();
        }

        // parse only domain name
        $uri = parse_url($r->url, PHP_URL_HOST);

        // check for duplicates
        if( Sites::whereUrl( $uri )->exists() ) {
            alert()->error(__('We already have this company listed'), __('Already Exists'));
            return back();
        }

        // save this site
        $site = new Sites;
        $site->url = $uri;
        $site->business_name = $r->name;
        $site->lati = $r->lati;
        $site->longi = $r->longi;
        $site->location = $r->city_region;
        $site->submittedBy = auth()->user()->id;
        $site->category_id = $r->category_id;
        $site->save();

        // notify admin by email
        $data[ 'message' ] = sprintf(__('New business added on the website called %s
                              Location: %s
                              Site URL: %s'), 
                                '<strong>'.$r->name.'</strong><br>', 
                                '' . $r->city_region . '<br>', 
                                '<a href="'.$r->url.'">' . $uri . '</a>'
                                );

        $data[ 'intromessage' ] = __('New business added');
        $data[ 'url' ] = route( 'reviewsForSite', [ 'site' => $site->url ]);
        $data[ 'buttonText' ] = __('See Listing');


        try{
            Mail::to(Options::get_option( 'adminEmail' ))->send( new EmailNotification( $data ) );
        } catch (\Exception $e) {
            alert()->error(__('Error sending email notification'), __('Error'));
            return back();
        }

        // set success message
        alert()->success(__('This company has been added and will be reviewed before publishing to our site.'), __('Company Added'));

        // redirect to the new listing
        return redirect()->route( 'home' );


    }

}
