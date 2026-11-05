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

use Dexter\Dexter;
use PHPUnit\Framework\TestCase;

final class DexterTest extends TestCase
{
    public function testVersaoFramework(): void
    {
        $this->assertSame('0.1.0-beta', Dexter::versao());
    }

    public function testConstantesGlobais(): void
    {
        $this->assertSame('America/Sao_Paulo', Dexter::FUSO_HORARIO);
        $this->assertSame('pt-BR', Dexter::IDIOMA);
    }
}

