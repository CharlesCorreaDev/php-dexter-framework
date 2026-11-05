# A classe Parle\RLexer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parle-rlexer.php

---

# A classe Parle\RLexer

(PECL parle >= 0.5.1)

## Introdução

Classe de analisador léxico multiestado. Os lexemas podem ser definidos dinamicamente. Se a instância específica do analisador léxico for destinada ao uso com [Parle\RParser](class.parle-rparser.md), os IDs de token precisam ser obtidos de lá. Caso contrário, IDs de token arbitrários podem ser fornecidos. Observe que [Parle\Parser](class.parle-parser.md) não é compatível com este analisador léxico.

## Resumo da classe

class **Parle\RLexer**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[ICASE](class.parle-rlexer.md#parle-rlexer.constants.icase) = 1;

const
[int](language.types.integer.md)
[DOT\_NOT\_LF](class.parle-rlexer.md#parle-rlexer.constants.dot-not-lf) = 2;

const
[int](language.types.integer.md)
[DOT\_NOT\_CRLF](class.parle-rlexer.md#parle-rlexer.constants.dot-not-cr-lf) = 4;

const
[int](language.types.integer.md)
[SKIP\_WS](class.parle-rlexer.md#parle-rlexer.constants.skip-ws) = 8;

const
[int](language.types.integer.md)
[MATCH\_ZERO\_LEN](class.parle-rlexer.md#parle-rlexer.constants.match-zero-len) = 16;

/\* Propriedades \*/

public
[bool](language.types.boolean.md)
[$bol](class.parle-rlexer.md#parle-rlexer.props.bol) = **`false`**;

public
[int](language.types.integer.md)
[$flags](class.parle-rlexer.md#parle-rlexer.props.flags) = 0;

public
[int](language.types.integer.md)
[$state](class.parle-rlexer.md#parle-rlexer.props.state) = 0;

public
[int](language.types.integer.md)
[$marker](class.parle-rlexer.md#parle-rlexer.props.marker) = 0;

public
[int](language.types.integer.md)
[$cursor](class.parle-rlexer.md#parle-rlexer.props.cursor) = 0;

/\* Métodos \*/

public function [advance](parle-rlexer.advance.md)(): [void](language.types.void.md)

public function [build](parle-rlexer.build.md)(): [void](language.types.void.md)

public function [callout](parle-rlexer.callout.md)([int](language.types.integer.md) `$id`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [consume](parle-rlexer.consume.md)([string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [dump](parle-rlexer.dump.md)(): [void](language.types.void.md)

public function [getToken](parle-rlexer.gettoken.md)(): [Parle\Token](class.parle-token.md)

public function [insertMacro](parle-rlexer.insertmacro.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$regex`): [void](language.types.void.md)

public function [push](parle-rlexer.push.md)([string](language.types.string.md) `$regex`, [int](language.types.integer.md) `$id`): [void](language.types.void.md)

public function [push](parle-rlexer.push.md)(  
    [string](language.types.string.md) `$state`,  
    [string](language.types.string.md) `$regex`,  
    [int](language.types.integer.md) `$id`,  
    [string](language.types.string.md) `$newState`  
): [void](language.types.void.md)

public function [push](parle-rlexer.push.md)([string](language.types.string.md) `$state`, [string](language.types.string.md) `$regex`, [string](language.types.string.md) `$newState`): [void](language.types.void.md)

public function [pushState](parle-rlexer.pushstate.md)([string](language.types.string.md) `$state`): [int](language.types.integer.md)

public function [reset](parle-rlexer.reset.md)([int](language.types.integer.md) `$pos`): [void](language.types.void.md)

}

## Constantes predefinidas

**`Parle\RLexer::ICASE`**

**`Parle\RLexer::DOT_NOT_LF`**

**`Parle\RLexer::DOT_NOT_CRLF`**

**`Parle\RLexer::SKIP_WS`**

**`Parle\RLexer::MATCH_ZERO_LEN`**

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

- [Parle\RLexer::advance](parle-rlexer.advance.md) — Processa a próxima regra do analisador léxico
- [Parle\RLexer::build](parle-rlexer.build.md) — Finaliza o conjunto de regras do analisador léxico
- [Parle\RLexer::callout](parle-rlexer.callout.md) — Define função de retorno para token
- [Parle\RLexer::consume](parle-rlexer.consume.md) — Passa os dados para processamento
- [Parle\RLexer::dump](parle-rlexer.dump.md) — Despeja a máquina de estados
- [Parle\RLexer::getToken](parle-rlexer.gettoken.md) — Obtém o token atual
- [Parle\RLexer::insertMacro](parle-rlexer.insertmacro.md) — Insere macro de expressão regular
- [Parle\RLexer::push](parle-rlexer.push.md) — Adiciona uma regra de análise léxica
- [Parle\RLexer::pushState](parle-rlexer.pushstate.md) — Insere na pilha um novo estado inicial
- [Parle\RLexer::reset](parle-rlexer.reset.md) — Redefine o analisador léxico

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
