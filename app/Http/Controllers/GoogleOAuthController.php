<?php
namespace App\Http\Controllers;

use App\Services\GoogleClientService;
use Illuminate\Http\Request;

class GoogleOAuthController extends Controller
{
    protected $googleClientService;

    public function __construct(GoogleClientService $googleClientService)
    {
        $this->googleClientService = $googleClientService;
    }

    public function handleCallback(Request $request)
    {
        return $this->googleClientService->handleCallback();
    }
}
