<?php

namespace App\Http\Controllers;

use App\Models\LogsBitrix;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;

class LogsBitrixController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logs = LogsBitrix::all();

        foreach ($logs as $log) {
            $decoded = json_decode($log->description_payload, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                $log->description_payload_pretty = json_encode($decoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            } else {
                $doubleDecoded = json_decode(stripslashes($log->description_payload), true);

                if (json_last_error() === JSON_ERROR_NONE) {
                    $log->description_payload_pretty = json_encode($doubleDecoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                } else {
                    $log->description_payload_pretty = $log->description_payload;
                }
            }
        }

        return view('logsBitrix.index', compact('logs'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LogsBitrix $logsBitrix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LogsBitrix $logsBitrix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LogsBitrix $logsBitrix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LogsBitrix $logsBitrix)
    {
        //
    }
}
