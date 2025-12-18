<?php

namespace App\Http\Controllers;

use App\Models\Cards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['cards'] = Cards::all();
        return view('home_settings.cards.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home_settings.cards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Cards::create([
                'type' => $request->type,
                'text' => $request->text,
                'title' => $request->title,
                'status' => $request->status,
                'link' => $request->link,
            ]);
            DB::commit();
            flash('Card stored successfully')->success();
            return redirect()->route('cards.index');
        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong')->error();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['card'] = Cards::find($id);
        return view('home_settings.cards.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $card = Cards::find($id);
            $card->type = $request->type;
            $card->title = $request->title;
            $card->text = $request->text;
            $card->status = $request->status;
            $card->link = $request->link;
            $card->save();
            DB::commit();
            flash('Card updated successfully')->success();
            return redirect()->route('cards.index');

        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong')->error();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $card = Cards::find($id);
            $card->delete();
            DB::commit();
            flash('Card deleted successfully')->success();
            return redirect()->route('cards.index');
        } catch (\Exception $e) {
            DB::rollBack();
            flash('Something goes wrong')->error();
            return redirect()->back();
        }
    }
}
