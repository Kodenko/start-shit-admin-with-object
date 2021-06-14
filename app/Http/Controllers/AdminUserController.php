<?php

namespace App\Http\Controllers;

use App\Actions\Buildings\GetAllRelationsInfoAction;
use App\Actions\Users\UserCreateAction;
use App\Actions\Users\UserGetAllAction;
use App\Actions\Users\UserUpdateAction;
use App\Http\Resources\UserResource;
use App\Models\Dtos\UserData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return  view('admin.pages.users-index', ['buildings' => (new UserGetAllAction())->run()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Request $request)
    {
        $data = (new GetAllRelationsInfoAction())->run(UserData::fromRequest($request));
        return view('admin.pages.user-edit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        new UserResource((new UserCreateAction())->run(UserData::fromRequest($request)));

        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $user)
    {
        $data = (new GetAllRelationsInfoAction())->run($user);
        return view('admin.pages.user-edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        new UserResource((new UserUpdateAction())->run($id,UserData::fromRequest($request)));

        return redirect()->back();
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
    }
}
