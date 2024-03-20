<?php

namespace App\Http\Controllers;

use App\Http\Requests\FindRequest;
use App\Models\Record;

class RecordController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Record $record)
    {
        return response()->json($record);
    }

    /**
     * Find the resource from storage by parameters.
     */
    public function find(FindRequest $request)
    {
        return response()->json(Record::keyValue((object)$request->input('data'))->get());
    }
}
