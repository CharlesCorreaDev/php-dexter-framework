<?php

/*
* @author	Charles Corrêa <charlescorreaweb@gmail.com>
* @copyright	Copyright ( c ) 2026
* @app		Dexter Framework
* @version	0.1.0-beta
*
* +------------------------------------------------------------------------------------------------------------+
* | Criação e Coordenação Projeto : Charles Corrêa <charlescorreaweb@gmail.com>                                |
* | Desenvolvimento: Charles Corrêa <charlescorreaweb@gmail.com>                                               |
* | Layout e Personalizações: Charles Corrêa <charlescorreaweb@gmail.com>                                      |
* | Ajustes: Charles Corrêa <charlescorreaweb@gmail.com>                                                       |
* +------------------------------------------------------------------------------------------------------------+
*/

declare(strict_types=1);

namespace Dexter\Testes\Unitarios;

use Dexter\Http\Middleware\CsrfProtectionMiddleware;
use Dexter\Http\Middleware\GuardaIPMiddleware;
use Dexter\Http\Middleware\SecureHeadersMiddleware;
use Dexter\Http\Request;
use Dexter\Http\Response;
use Dexter\Http\Router;
use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase
{
    private Router $router;

    protected function setUp(): void
    {
        $this->router = new Router();
    }

    public function testRoteamentoGetSimples(): void
    {
        $this->router->get('/ola', function (Request $req) {
            return Response::json(['mensagem' => 'mundo']);
        });

        $req = new Request('GET', '/ola');
        $res = $this->router->despachar($req);

        $this->assertSame(200, $res->obterCodigoStatus());
        $this->assertStringContainsString('mundo', $res->obterConteudo());
    }

    public function testParametroDinamicoNaRota(): void
    {
        $this->router->get('/usuarios/{id}', function (Request $req) {
            $id = $req->obterAtributo('id');
            return Response::json(['id_usuario' => $id]);
        });

        $req = new Request('GET', '/usuarios/42');
        $res = $this->router->despachar($req);

        $this->assertSame(200, $res->obterCodigoStatus());
        $this->assertStringContainsString('"id_usuario":"42"', $res->obterConteudo());
    }

    public function testGrupoDeRotasComPrefixo(): void
    {
        $this->router->grupo('/api/v1', [], function (Router $r) {
            $r->get('/status', function () {
                return Response::json(['status' => 'online']);
            });
        });

        $req = new Request('GET', '/api/v1/status');
        $res = $this->router->despachar($req);

        $this->assertSame(200, $res->obterCodigoStatus());
        $this->assertStringContainsString('online', $res->obterConteudo());
    }

    public function testMiddlewareSecureHeaders(): void
    {
        $this->router->get('/seguro', function () {
            return Response::html('<h1>Protegido</h1>');
        }, [new SecureHeadersMiddleware()]);

        $req = new Request('GET', '/seguro');
        $res = $this->router->despachar($req);

        $this->assertSame('DENY', $res->obterCabecalhos()['X-Frame-Options'] ?? null);
        $this->assertSame('nosniff', $res->obterCabecalhos()['X-Content-Type-Options'] ?? null);
    }

    public function testGuardaIpBloqueiaIp(): void
    {
        $guardaIp = new GuardaIPMiddleware(ipsBloqueados: ['192.168.1.100']);
        $this->router->get('/restrito', function () {
            return Response::json(['sucesso' => true]);
        }, [$guardaIp]);

        $reqBloqueada = new Request('GET', '/restrito', servidor: ['REMOTE_ADDR' => '192.168.1.100']);
        $resBloqueada = $this->router->despachar($reqBloqueada);
        $this->assertSame(403, $resBloqueada->obterCodigoStatus());

        $reqPermitida = new Request('GET', '/restrito', servidor: ['REMOTE_ADDR' => '10.0.0.1']);
        $resPermitida = $this->router->despachar($reqPermitida);
        $this->assertSame(200, $resPermitida->obterCodigoStatus());
    }

    public function testHoneypotBloqueiaRobos(): void
    {
        $guardaIp = new GuardaIPMiddleware();
        $this->router->post('/formulario', function () {
            return Response::json(['sucesso' => true]);
        }, [$guardaIp]);

        // Simula bot preenchendo o campo invisível
        $reqBot = new Request('POST', '/formulario', dadosCorpo: ['x_verificacao_seguranca_email' => 'spam@bot.com']);
        $resBot = $this->router->despachar($reqBot);
        $this->assertSame(403, $resBot->obterCodigoStatus());
    }

    public function testRotaNaoEncontradaRetorna404(): void
    {
        $req = new Request('GET', '/rota-inexistente');
        $res = $this->router->despachar($req);
        $this->assertSame(404, $res->obterCodigoStatus());
    }

    public function testMetodoNaoPermitidoRetorna405(): void
    {
        $this->router->post('/somente-post', fn() => Response::json([]));
        $req = new Request('GET', '/somente-post');
        $res = $this->router->despachar($req);
        $this->assertSame(405, $res->obterCodigoStatus());
    }
}

