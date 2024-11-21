<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\LogsBitrix;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log as FacadesLog;

class WebhookController extends Controller
{

    public function webhookBitrix(Request $request)
    {
        // Recebe todos os dados da requisição
        $data = $request->all();

        LogsBitrix::create([
            'description_payload' => json_encode($data),
            'processed_at' => 0,
        ]);

        // Retorna uma resposta JSON
        return response()->json(['status' => 'success'], 200);
    }
}
