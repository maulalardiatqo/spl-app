<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingsPostRequest;
use App\Repositories\SPLrepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SPLcontroller extends Controller
{
    private SPLrepository $splrepository;
    public function __construct(SPLrepository $splrepository)
    {
        $this->splrepository = $splrepository;
    }

    public function savesettings(SettingsPostRequest $request)
    {
        $orderDetails = $request->only([
            'key',
            'value'
        ]);

        $validated = $request->validated();
        return response()->json([
            'data' => $this->splrepository->saveSettings($orderDetails)
        ], Response::HTTP_CREATED);
    }
}
