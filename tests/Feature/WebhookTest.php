<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function Illuminate\Log\log;

class WebhookTest extends TestCase
{
    // use RefreshDatabase;

    /**
     * Testa se o webhook recebe a requisição corretamente.
     *
     * @return void
     */
    public function testWebhookReceivesDataSuccessfully()
    {
        // Simula os dados enviados pelo webhook
        $payload = [
            'event'=> ['1','2'],
        ];

        // Faz uma requisição POST para a rota do webhook
        $response = $this->postJson('/webhook/bitrix', $payload);

        // Verifica se o status de resposta é 200
        $response->assertStatus(200);

        // Verifica se a resposta contém a estrutura esperada
        $response->assertJson([
            'status' => 'success',
        ]);

        // Opcional: verifica se os dados foram logados ou processados conforme esperado
        // Por exemplo, se você está salvando a ordem no banco de dados, você poderia fazer algo assim:
        // $this->assertDatabaseHas('orders', ['order_id' => 12345]);
    }
}


