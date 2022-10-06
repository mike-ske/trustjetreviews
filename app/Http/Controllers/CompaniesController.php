<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sites;
use App\Mail\EmailNotification;
use App\Verify;

use Mail;
use Hash;

class CompaniesController extends Controller
{
    // plans
    public function plans(  ) {

    	$seo_title = __( 'For Companies - Plans' );
    	return view( 'companies-plans', compact('seo_title') );
    }

    // claim
    public function claim( Sites $site, String $plan ) {
        
            $company=$site;
        if( !is_null($company->claimedBy )) {
            alert()->error( __( 'This company is already claimed' ), __( 'OOPS' ) );
            return redirect(route( 'home' ));
        }
    	
    	// verify ownership
    	return view( 'verify-ownership', compact( 'company', 'plan' ) );


    }

    // verify ownership
    public function verifyOwnershipForm( Sites $site, Request $r ) {
	    $c=$site;
		// validate    	
    	$this->validate( $r, [ 'username' => 'required', 'plan' => 'in:6months,yearly,monthly' ] );


    	// create hash
    	$code = Hash::make(md5(rand( 1,99999999 )));

    	// create entry hash
    	$verify = new Verify;
    	$verify->plan = $r->plan;
    	$verify->site_id = $c->id;
    	$verify->hash = $code;
    	$verify->save();

        // compute email destination
        $sendToEmail = $r->username . '@' . str_ireplace('www.', '', $c->url);

    	// send verification email
        $data[ 'message' ] = sprintf(__('Hey there,%s 
                                      someone requested an ownership verification of your company %s on our platform.
                                      Follow the link to verify ownership'), '<br>', '<strong>'.$c->business_name.'</strong>' );

        $data[ 'intromessage' ] = __( 'Company Ownership Verification' );
        $data[ 'url' ] = 'https://trustjetreviews.com/ownership-verify?code=' . $code;

        $data[ 'buttonText' ] = __('Validate Ownership');

		try{
	        Mail::to( $sendToEmail )->send( new EmailNotification( $data ) );
			// auth()->user()->notify(new EmailNotification($data));
		} catch(\Exception $e) {
			dd($e->getMessage());
		}

        return view( 'verify-ownership-message', compact( 'sendToEmail' ) );


    }

    // ownership verification
    public function ownershipVerify( Request $r ) {
    	
    	// check site by code
    	if( !$r->has( 'code' ) )
    		return redirect( '/' );

    	// check hash exists
    	$verify = Verify::where( 'hash', $r->code )->first();

    	if( !$verify ) {
			alert()->warning(__( 'Invalid verification code.'), __( 'OOPS' ));
    		return redirect( '/' );
    	}

    	// all good now
    	$verify->verified = 'yes';
    	$verify->save();

    	// redirect to payment plan page
    	session([ 'ownershipVerified' => $r->code ]);

    	// set plan 
    	session(['ownershipPlan' => $verify->plan]);

    	// set site
    	session(['ownershipSite' => $verify->site]);

		// update user claims field
		$user = auth()->user();
	
		$user->claims = $verify->site_id;
		$user->save();

    	// alert
    	alert()->success( __( sprintf('You have successfully validated ownership of %s', $verify->site->url )), 
    	                 __( 'Hurray' ) );


    	return redirect("/billing");

    }
}
