<?php

namespace App\Http\Controllers;

use App\Actions\Front\DataForListingAction;
use App\Core\Parents\Controllers\WebController;
use App\Http\Requests\FrontListingRequest;
use App\Models\Building;
use App\Models\Dtos\BuildingData;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontBuildingController extends WebController
{
    public function index(FrontListingRequest $request) : View
    {

        $data = (new DataForListingAction)->run(BuildingData::fromRequest($request));
        return view('front.pages.listing',$data);

    }

    public function show(Request $request, Building $building) : View
    {
        return view('front.pages.building',compact($building));
    }
}
