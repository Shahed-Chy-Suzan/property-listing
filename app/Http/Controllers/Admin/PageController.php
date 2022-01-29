<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $pages = Page::latest()->paginate(20);
        return view('dashboard.pages.index')->with('pages',$pages);
    }



    public function validatePage() {
        return [
            'name' => 'required',
            'slug' => 'required',
            'content' => 'required'
        ];
    }

    public function saveOrUpdate($page, $request) {
        $page->name = $request->name;
        $page->slug = $request->slug;
        $page->content = $request->slug;

        $page->save();
    }


    public function create()
    {
        return view('dashboard.pages.create');
    }


    public function store(Request $request)
    {
        $request->validate($this->validatePage());

        $page = new Page();

        $this->saveOrUpdate($page, $request);

        Flasher::addSuccess($request->name.' Page Created Successfully');

        return redirect(route('pages.index'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $page = Page::findOrFail($id);

        return view('dashboard.pages.edit', ['page' => $page]);
    }


    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        $request->validate($this->validatePage());


        $this->saveOrUpdate($page, $request);

        Flasher::addSuccess($request->name.' Page Updated Successfully');

        return redirect()->route('pages.index');
    }


    public function destroy($id)
    {
        try {
            Page::findorFail($id)->delete();

            Flasher::addSuccess('Page Removed Successfully');   // Flasher

            return redirect()->back();    // Redirect with success message

        } catch (\Throwable $th) {
            return redirect()->route('pages.index')->with(['message' => $th->getMessage()]);    // Redirect with error message
        }
    }

}
