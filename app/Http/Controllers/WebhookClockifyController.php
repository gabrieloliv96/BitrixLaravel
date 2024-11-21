<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogsClockfy;

class WebhookClockifyController extends Controller
{
    //
    public function webhookClockify(Request $request)
    {
        // Recebe todos os dados da requisição
        $data = $request->all();

        LogsClockfy::create([
            'description_payload' => json_encode($data),
            'processed_at' => 0,
        ]);

        // Retorna uma resposta JSON
        return response()->json(['status' => 'success'], 200);
    }
}
