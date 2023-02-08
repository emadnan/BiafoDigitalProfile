<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FeatureRequest;
use Illuminate\Http\Request;

class FeatureRequestController extends Controller
{
    function add_featureRequest(Request $request)
    {
        // print_r($request->all());
        // die;
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'request' => 'required'

        ]);

        $featureRequest = new FeatureRequest();
        $featureRequest->name = $validatedData['name'];
        $featureRequest->email = $validatedData['email'];
        $featureRequest->phone = $validatedData['phone'];
        $featureRequest->request = $validatedData['request'];

        $featureRequest->save();

        return redirect('/');
    }

    public function index()
    {
        $list_feature_requests = FeatureRequest::all();
        return view('list_feature_request', compact('list_feature_requests'));
    }

    public function deleteRow($id)
    {
        $row = FeatureRequest::find($id);
        $row->delete();

        return redirect()->back()->with('success', 'Reqeust has been successfully deleted.');
    }
}