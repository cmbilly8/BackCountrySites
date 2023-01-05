<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Get all sites
    public function index() {
        return view('sites.index', [
            'sites' => Site::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    // Get one site
    public function show(Site $site) {
        return view('sites.show', [
            'site' => $site
        ]);
    }

    // Show create site form
    public function create() {
        return view('sites.create');
    }

    // Store user-generated site posting
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'area' => 'required',
            'state' => 'required',
            'directions' => 'required',
            'description' => 'required',
            'tags' => 'regex:/[a-zA-Z0-9,]*/'
        ]);

        Site::create($formFields);

        return redirect('/')->with('message', 'Post sucessful!');
    }
}
