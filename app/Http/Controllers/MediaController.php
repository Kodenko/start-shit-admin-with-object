<?php

namespace App\Http\Controllers;

use App\Actions\Media\AddImageAction;
use App\Actions\Media\DeleteImageAction;
use App\Actions\Media\UpdateImageAction;
use App\Http\Requests\AddMediadRequest;
use App\Http\Requests\DeleteMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use App\Models\Dtos\MediaData;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function addMedia(AddMediadRequest $request)
    {

        (new AddImageAction())->run(MediaData::fromRequest($request));
        return redirect()->back();
    }
    public function replaceMedia(AddMediadRequest $request)
    {
        (new AddImageAction())->run(MediaData::fromRequest($request));
        return redirect()->back();
    }
    public function updateMedia(UpdateMediaRequest $request)
    {
        (new UpdateImageAction())->run(MediaData::fromRequest($request));
        return redirect()->back();
    }

    public function deleteMedia(DeleteMediaRequest $request)
    {
        (new DeleteImageAction())->run(MediaData::fromRequest($request));
        return redirect()->back();
    }
}
