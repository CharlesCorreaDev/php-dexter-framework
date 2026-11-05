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

interface MiddlewareInterface
{
    /**
     * Processa a requisição HTTP passando para o próximo manipulador no pipeline.
     *
     * @param Request $requisicao
     * @param callable(Request): Response $proximo
     * @return Response
     */
    public function processar(Request $requisicao, callable $proximo): Response;
}
