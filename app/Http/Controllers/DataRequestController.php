<?php

namespace App\Http\Controllers;

use App\Mail\ProjectOwnerMail;
use App\Mail\ClientMail;
use App\Services\GoogleSheetService;
use App\Services\GoogleClientService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DataRequestController extends Controller
{

    // protected $googleSheetService;

    // public function __construct(GoogleClientService $googleClientService)
    // {
    //     $client = $googleClientService->getClient();
    //     $this->googleSheetService = new GoogleSheetService($client);
    // }

    public function formRequestSubmit(Request $request) {
        // dd($request->all());
        $this->validate($request,[
            'full_name' => 'required',
            'mail' => 'required|email',
            'country' => 'required',
            'phone_number' => 'required',  // "composer require propaganistas/laravel-phone" package installed
            'company_name' => 'required',
            // 'website_url' => 'required',
            'project_brief' => 'required',
            // 'fileContent' => 'required',
            // 'filename' => 'required',
            'time_zone' => 'required',
            'date' => 'required',
            'meeting' => 'required'
        ],[
            'required' => ':attribute is required',
            'email' => ':attribute format should be email',
            'phone' => ':attribute format should be phone',
        ],[
            'full_name' => 'Full Name',
            'mail' => 'Email',
            'country' => 'Country',
            'phone_number' => 'Mobile number',
            'company_name' => 'Company Name',
            'website_url' => 'Website',
            'project_brief' => 'Prject brief',
            'fileContent' => 'File Content',
            'filename' => 'File Name',
            'time_zone' => 'Time zone',
            'date' => 'Date',
            'meeting' => 'Meeting platform',
        ]);
        $fileName =null;
        if(!empty($request->filename)) {
            $fileName =str_replace(' ','',Carbon::now()->format('YmdHis').$request->input('filename'));
            $image_parts = explode(";base64,", $request->fileContent);
            // dd($image_parts);
            file_put_contents(public_path('uploaded_files/' . $fileName),base64_decode($image_parts[1]));
        }
        $request->filename = $fileName;
        Mail::to($request->input('mail'))->send(new ClientMail($request->all(),public_path('uploaded_files/' . $fileName)));
        Mail::to(env('Mail_OWNER'))->send(new ProjectOwnerMail($request->all(),public_path('uploaded_files/' . $fileName)));

        return response()->json(['type'=>'success','message'=>'Form is submitted','fileUrl'=>!empty($request->filename)?asset('uploaded_files/'.$fileName):null],200);
    }
}
