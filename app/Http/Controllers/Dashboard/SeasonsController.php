<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\User;
use App\Location;
use Illuminate\Support\Facades\Auth;
use Validator;

class SeasonsController extends Controller
{
    public function getSeasons()
    {
        return View::make('dashboard.seasons.index')
            ->with([
                'seasons' => null,
                'active' => 'seasons'
            ]);
    }
}