<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function single($slug) {
        $page = Page::where('slug', $slug)->first();

        if(!empty($page)) {
            return view('pages.index')->with('page',$page);
        } else {
            return abort('404');
        }
    }

}
