<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\API\V1\BaseController;
use App\Models\Isp;
use Illuminate\Http\Request;
use Exception;

class IspController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('role:superadministrator|administrator|user')->only(['index', 'create']);
        $this->middleware('role:superadministrator|administrator')->only(['store', 'update', 'destroy']);
    }

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isp = Isp::all();
        return $this->sendResponse($isp, trans('actions.get.success'));
        try {
        } catch (Exception $ex) {
            return $this->sendError([], trans('actions.get.failed'));
        }
    }

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $isp = Isp::create([
                'isp' => $request->input('isp'),
                'isps_color' => $request->input('isps_color'),
                'isps_map_icon' => $request->input('isps_map_icon'),
            ]);
            return $this->sendResponse($isp, trans('actions.created.success'));
        } catch (Exception $ex) {
            return $this->sendError([], trans('actions.created.failed'));
        }
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
        try {
            $isp = Isp::find($id);
            $isp->update($request->all());
            return $this->sendResponse($isp, trans('actions.updated.success'));
        } catch (Exception $ex) {
            return $this->sendError([], trans('actions.updated.failed'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $isp = Isp::find($id);
            $isp->delete();
            return $this->sendResponse($isp, trans('actions.destroy.success'));
        } catch (Exception $ex) {
            return $this->sendError([], trans('actions.destroy.failed'));
        }
    }
}