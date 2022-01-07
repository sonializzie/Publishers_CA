<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publishers = Publisher::all();
        return view('admin.publishers.index', [
            'publishers' => $publishers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.publishers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // when user clicks submit on the create view above
        // the publisher will be stored in the DB
        $request->validate([
            'pub_name' => 'required',
            'manager_name' => 'required',
            'email' => 'required',
            'country' => 'required'
        ]);

        // if validation passes create the new book from the database
        $publisher = new Publisher();
        $publisher->pub_name = $request->input('pub_name');
        $publisher->manager_name = $request->input('manager_name');
        $publisher->phone = $request->input('phone');
        $publisher->email = $request->input('email');
        $publisher->city = $request->input('city');
        $publisher->state = $request->input('state');
        $publisher->country = $request->input('country');
        $publisher->save();

        return redirect()->route('admin.publishers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $publisher = Publisher::findOrFail($id);
        return view('admin.publishers.show', [
            'publisher' => $publisher
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the publisher by ID from the Database
        $publisher = Publisher::findOrFail($id);

        // Load the edit view and pass the publisher to
        // that view
        return view('admin.publishers.edit', [
            'publisher' => $publisher
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // first get the existing publisher that the user is update
        $publisher = Publisher::findOrFail($id);
        $request->validate([
            'pub_name' => 'required',
            'manager_name' => 'required',
            'email' => 'required',
            'country' => 'required'
        ]);

        // if validation passes then update existing publisher
        $publisher->pub_name = $request->input('pub_name');
        $publisher->manager_name = $request->input('manager_name');
        $publisher->phone = $request->input('phone');
        $publisher->email = $request->input('email');
        $publisher->city = $request->input('city');
        $publisher->state = $request->input('state');
        $publisher->country = $request->input('country');
        $publisher->save();

        return redirect()->route('admin.publishers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $publisher = Publisher::findOrFail($id);
        $publisher->delete();

        return redirect()->route('admin.publishers.index');
    }
}
