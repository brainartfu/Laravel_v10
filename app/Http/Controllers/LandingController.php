<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FunctionController;
use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    use Illuminate\Support\Facades\Log;
    use Illuminate\Support\Facades\Validator;

    class LandingController extends FunctionController{
        public function __construct() {
            // $this->apiURL = env('API_URL');
            // $this->middleware('guest')->except('logout');
        }

        public function index() {
            return view('index');
        }
    }
?>
