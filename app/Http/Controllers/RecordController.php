<?php

namespace App\Http\Controllers;

use App\Http\Requests\FindRequest;
use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Find the resource from storage by parameters.
     */
    public function find(FindRequest $request)
    {
        return response()->json(Record::keyValue((object)$request->input('data'))->get());
    }
}
