<?php

namespace App\Http\Controllers;

use App\Actions\Buildings\BuildingCreateAction;
use App\Actions\Buildings\BuildingGetAllAction;
use App\Actions\Buildings\BuildingUpdateAction;
use App\Actions\Buildings\GetAllRelationsInfoAction;
use App\Actions\Users\UserCreateAction;
use App\Actions\Users\UserGetAllAction;
use App\Actions\Users\UserUpdateAction;
use App\Core\Parents\Controllers\WebController;
use App\Http\Requests\BuildingUpdateRequest;
use App\Http\Resources\BuildingResource;
use App\Models\Building;
use App\Models\Dtos\BuildingData;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use const Cerbero\Dto\MUTABLE;
use const Cerbero\Dto\NONE;
use const Cerbero\Dto\PARTIAL;

class AdminBuildingController extends WebController
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return  view('admin.pages.buildings-index', ['buildings' => (new BuildingGetAllAction())->run()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request): View
    {
        $data = (new GetAllRelationsInfoAction())->run('building',BuildingData::fromRequest($request));
        return view('admin.pages.building-edit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BuildingUpdateRequest $request
     * @return RedirectResponse
     */
    public function store(BuildingUpdateRequest $request): RedirectResponse
    {
        new BuildingResource((new BuildingCreateAction())->run(BuildingData::fromRequest($request)));

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Building $building
     * @return View
     */
    public function edit(Building $building): View
    {
        $data = (new GetAllRelationsInfoAction())->run('building',$building);
        return view('admin.pages.building-edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BuildingUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(BuildingUpdateRequest $request, $id)
    {
       new BuildingResource((new BuildingUpdateAction())->run($id,BuildingData::fromRequest($request)));

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
