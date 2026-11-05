# A classe Parle\Lexer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parle-lexer.php

---

# A classe Parle\Lexer

(PECL parle >= 0.5.1)

## Introdução

Classe de analisador léxico de estado único. Os lexemas podem ser definidos dinamicamente. Se a instância específica do analisador léxico for destinada ao uso com [Parle\Parser](class.parle-parser.md), os IDs de token precisam ser obtidos de lá. Caso contrário, IDs de token arbitrários podem ser fornecidos. Este analisador léxico pode oferecer uma certa vantagem de desempenho em relação a [Parle\RLexer](class.parle-rlexer.md), se múltiplos estados não forem necessários. Observe que [Parle\RParser](class.parle-rparser.md) não é compatível com este analisador léxico.

## Resumo da classe

class **Parle\Lexer**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[ICASE](class.parle-lexer.md#parle-lexer.constants.icase) = 1;

const
[int](language.types.integer.md)
[DOT\_NOT\_LF](class.parle-lexer.md#parle-lexer.constants.dot-not-lf) = 2;

const
[int](language.types.integer.md)
[DOT\_NOT\_CRLF](class.parle-lexer.md#parle-lexer.constants.dot-not-cr-lf) = 4;

const
[int](language.types.integer.md)
[SKIP\_WS](class.parle-lexer.md#parle-lexer.constants.skip-ws) = 8;

const
[int](language.types.integer.md)
[MATCH\_ZERO\_LEN](class.parle-lexer.md#parle-lexer.constants.match-zero-len) = 16;

/\* Propriedades \*/

public
[bool](language.types.boolean.md)
[$bol](class.parle-lexer.md#parle-lexer.props.bol) = **`false`**;

public
[int](language.types.integer.md)
[$flags](class.parle-lexer.md#parle-lexer.props.flags) = 0;

public
[int](language.types.integer.md)
[$state](class.parle-lexer.md#parle-lexer.props.state) = 0;

public
[int](language.types.integer.md)
[$marker](class.parle-lexer.md#parle-lexer.props.marker) = 0;

public
[int](language.types.integer.md)
[$cursor](class.parle-lexer.md#parle-lexer.props.cursor) = 0;

/\* Métodos \*/

public function [advance](parle-lexer.advance.md)(): [void](language.types.void.md)

public function [build](parle-lexer.build.md)(): [void](language.types.void.md)

public function [callout](parle-lexer.callout.md)([int](language.types.integer.md) `$id`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [consume](parle-lexer.consume.md)([string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [dump](parle-lexer.dump.md)(): [void](language.types.void.md)

public function [getToken](parle-lexer.gettoken.md)(): [Parle\Token](class.parle-token.md)

public function [insertMacro](parle-lexer.insertmacro.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$regex`): [void](language.types.void.md)

public function [push](parle-lexer.push.md)([string](language.types.string.md) `$regex`, [int](language.types.integer.md) `$id`): [void](language.types.void.md)

public function [reset](parle-lexer.reset.md)([int](language.types.integer.md) `$pos`): [void](language.types.void.md)

}

## Constantes predefinidas

**`Parle\Lexer::ICASE`**

**`Parle\Lexer::DOT_NOT_LF`**

**`Parle\Lexer::DOT_NOT_CRLF`**

**`Parle\Lexer::SKIP_WS`**

**`Parle\Lexer::MATCH_ZERO_LEN`**

## Propriedades

bol
:   Início do sinalizador de entrada.

flags
:   Sinalizadores do analisador léxico.

state
:   Estado atual do analisador léxico, somente leitura.

marker
:   Posição do último token correspondido, somente leitura.

cursor
:   Posição de entrada atual, somente leitura.

## Índice

- [Parle\Lexer::advance](parle-lexer.advance.md) — Processa a próxima regra do analisador léxico
- [Parle\Lexer::build](parle-lexer.build.md) — Finaliza o conjunto de regras do analisador léxico
- [Parle\Lexer::callout](parle-lexer.callout.md) — Define função de retorno para token
- [Parle\Lexer::consume](parle-lexer.consume.md) — Passa os dados para processamento
- [Parle\Lexer::dump](parle-lexer.dump.md) — Despeja a máquina de estados
- [Parle\Lexer::getToken](parle-lexer.gettoken.md) — Obtém o token atual
- [Parle\Lexer::insertMacro](parle-lexer.insertmacro.md) — Insere macro de expressão regular
- [Parle\Lexer::push](parle-lexer.push.md) — Adiciona uma regra de análise léxica
- [Parle\Lexer::reset](parle-lexer.reset.md) — Redefine o analisador léxico

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
