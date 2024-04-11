<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $trains = Train::whereDate('departure', Carbon::today())->get();

        return view('home', compact('trains'));
    }
}
