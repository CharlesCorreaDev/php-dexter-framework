<?php

/*
* @author   Charles Corrêa <charlescorreaweb@gmail.com>
* @copyright    Copyright ( c ) 2026
* @app      Dexter Framework
* @version  0.1.0-beta
*
* +------------------------------------------------------------------------------------------------------------+
* | Criação e Coordenação Projeto : Charles Corrêa <charlescorreaweb@gmail.com>                                |
* | Desenvolvimento: Charles Corrêa <charlescorreaweb@gmail.com>                                               |
* | Layout e Personalizações: Charles Corrêa <charlescorreaweb@gmail.com>                                      |
* | Ajustes: Charles Corrêa <charlescorreaweb@gmail.com>                                                       |
* +------------------------------------------------------------------------------------------------------------+
*/

declare(strict_types=1);

namespace Dexter\Http\Middleware;

use Dexter\Http\Request;
use Dexter\Http\Response;

/**
 * Defesa perimetral para verificação de IP, bots conhecidos e honeypots.
 */
final class GuardaIPMiddleware implements MiddlewareInterface
{
    /**
     * @param array<int, string> $ipsBloqueados
     * @param array<int, string> $badBots
     */
    public function __construct(
        private array $ipsBloqueados = [],
        private array $badBots = [
            'sqlmap', 'nikto', 'acunetix', 'masscan', 'nmap', 'havij', 'wpscan'
        ],
        private string $campoHoneypot = 'x_verificacao_seguranca_email'
    ) {
    }

    public function processar(Request $requisicao, callable $proximo): Response
    {
        $ip = $requisicao->obterIpCliente();

        // 1. Verificação de IPs na lista negra
        if (in_array($ip, $this->ipsBloqueados, true)) {
            return Response::json(['erro' => 'Acesso bloqueado por segurança perimetral.'], 403);
        }

        // 2. Detecção de Bad Bots via User-Agent
        $userAgent = strtolower($requisicao->obterCabecalho('user-agent') ?? '');
        foreach ($this->badBots as $bot) {
            if (str_contains($userAgent, $bot)) {
                return Response::json(['erro' => 'Agente de usuário não autorizado.'], 403);
            }
        }

        // 3. Verificação de Honeypot em requisições de mutação (POST/PUT)
        if (in_array($requisicao->obterMetodo(), ['POST', 'PUT', 'PATCH'], true)) {
            $valorHoneypot = $requisicao->obterDadoCorpo($this->campoHoneypot);
            if (!empty($valorHoneypot)) {
                // Robô preencheu o campo invisível: Bloqueia silenciosamente
                return Response::json(['erro' => 'Acesso negado.'], 403);
            }
        }

        return $proximo($requisicao);
    }
}
