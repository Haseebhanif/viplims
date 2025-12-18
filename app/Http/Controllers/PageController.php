<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }


    public function create()
    {
        $data['pages'] = Page::select('title', 'id')->where('is_heading', 1)->distinct()->get();
        return view('pages.create', $data);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $pages = Page::select('title', 'id')->where('is_heading', 1)->distinct()->get();
            if ($pages->isEmpty() && !isset($request->is_parent)) {
                flash('Please make parent page first')->warning();
                return back();
            }
            $validator = Validator::make($request->all(), [
                'slug' => 'required_unless:is_parent,==,1',
                'page_content' => 'required_unless:is_parent,==,1',
                'title' => 'required',
                'meta_title' => 'required_unless:is_parent,==,1',
                'priority' => 'required',
                'parent_page' => 'required_unless:is_parent,==,1',
            ], [
                'slug.required_if' => 'Slug field is required',
                'page_content.required_unless' => 'Page content is required',
                'parent_page.required_unless' => 'Please select parent page',
                'meta_image.required_unless' => 'Meta image field is required',
                'meta_title.required_unless' => 'Meta title field is required'
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $page = new Page;
            $page->title = $request->title;
            if($request->slug !=null) {
                $old_page = Page::where('slug', $request->slug)->first();
            }else
            {
                $old_page = null;
            }
            if (!isset($old_page) && $old_page==null) {
                $page->slug = $request->slug;
                $page->content = $request->page_content;
                $page->meta_title = $request->meta_title;
                $page->parent_page = $request->parent_page;
                $page->priority = $request->priority;
                $page->show_bottom = $request->show_bottom;
                $page->is_heading = $request->is_parent;
                $page->meta_description = $request->meta_description;
                $page->save();
                DB::commit();
                flash('New page has been created successfully')->success();
                return redirect()->route('pages.index');
            }
            flash('Slug has been used already')->warning();
            return back();
        } catch (\Exception $e) {
            flash('Something goes wrong')->error();
            return back();
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $page = Page::find($id);
        $headings = Page::select('title', 'id')->where('is_heading', 1)->distinct()->get();

        if ($page != null) {
            return view('pages.edit', compact('page', 'headings'));
        }
        abort(404);
    }


    public function update(Request $request, $id)
    {
//        $validator = Validator::make($request->all(), [
//            'slug' => 'unique:pages,slug,' . $id,
//        ]);
//        if ($validator->fails()) {
//            return redirect()->back()
//                ->withErrors($validator)
//                ->withInput();
//        }
        $page = Page::findOrFail($id);
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->content = $request->page_content;
        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->parent_page = $request->parent_page;
        $page->priority = $request->priority;
        $page->show_bottom = $request->show_bottom;
        $page->is_heading = $request->is_parent;
        $page->save();
        flash($page->title . 'has been updated successfully')->success();
        return redirect()->route('pages.index');
    }


    public function destroy($id)
    {
        if (Page::destroy($id)) {
            flash('Page has been deleted successfully')->success();
            return redirect()->back();
        }
        return back();
    }

    public function show_custom_page($slug)
    {
        $page = Page::where('slug', $slug)->first();
        if ($page != null) {
            return view('frontend.custom_page', compact('page'));
        }
        abort(404);
    }
}
