<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Get all sites
    public function index() {
        return view('sites.index', [
            'sites' => Site::latest()->filter(request(['tag']))->get()
        ]);
    }

    // Get one site
    public function show(Site $site) {
        return view('sites.show', [
            'site' => $site
        ]);
    }
}
