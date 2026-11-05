# A classe Parle\RParser

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parle-rparser.php

---

# A classe Parle\RParser

(PECL parle >= 0.7.0)

## Introdução

Classe analisadora. As regras podem ser definidas dinamicamente. Uma vez finalizadas, uma instância de [Parle\RLexer](class.parle-rlexer.md) é necessária para entregar o fluxo de tokens.

## Resumo da classe

class **Parle\RParser**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[ACTION\_ERROR](class.parle-rparser.md#parle-rparser.constants.action-error) = 0;

const
[int](language.types.integer.md)
[ACTION\_SHIFT](class.parle-rparser.md#parle-rparser.constants.action-shift) = 1;

const
[int](language.types.integer.md)
[ACTION\_REDUCE](class.parle-rparser.md#parle-rparser.constants.action-reduce) = 2;

const
[int](language.types.integer.md)
[ACTION\_GOTO](class.parle-rparser.md#parle-rparser.constants.action-goto) = 3;

const
[int](language.types.integer.md)
[ACTION\_ACCEPT](class.parle-rparser.md#parle-rparser.constants.action-accept) = 4;

const
[int](language.types.integer.md)
[ERROR\_SYNTAX](class.parle-rparser.md#parle-rparser.constants.error-syntax) = 0;

const
[int](language.types.integer.md)
[ERROR\_NON\_ASSOCIATIVE](class.parle-rparser.md#parle-rparser.constants.error-non-associative) = 1;

const
[int](language.types.integer.md)
[ERROR\_UNKNOWN\_TOKEN](class.parle-rparser.md#parle-rparser.constants.error-unknown-token) = 2;

/\* Propriedades \*/

public
[int](language.types.integer.md)
[$action](class.parle-rparser.md#parle-rparser.props.action) = 0;

public
[int](language.types.integer.md)
[$reduceId](class.parle-rparser.md#parle-rparser.props.reduceId) = 0;

/\* Métodos \*/

public function [advance](parle-rparser.advance.md)(): [void](language.types.void.md)

public function [build](parle-rparser.build.md)(): [void](language.types.void.md)

public function [consume](parle-rparser.consume.md)([string](language.types.string.md) `$data`, [Parle\RLexer](class.parle-rlexer.md) `$rlexer`): [void](language.types.void.md)

public function [dump](parle-rparser.dump.md)(): [void](language.types.void.md)

public function [errorInfo](parle-rparser.errorinfo.md)(): [Parle\ErrorInfo](class.parle-errorinfo.md)

public function [left](parle-rparser.left.md)([string](language.types.string.md) `$tok`): [void](language.types.void.md)

public function [nonassoc](parle-rparser.nonassoc.md)([string](language.types.string.md) `$tok`): [void](language.types.void.md)

public function [precedence](parle-rparser.precedence.md)([string](language.types.string.md) `$tok`): [void](language.types.void.md)

public function [push](parle-rparser.push.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$rule`): [int](language.types.integer.md)

public function [reset](parle-rparser.reset.md)([int](language.types.integer.md) `$tokenId` = ?): [void](language.types.void.md)

public function [right](parle-rparser.right.md)([string](language.types.string.md) `$tok`): [void](language.types.void.md)

public function [sigil](parle-rparser.sigil.md)([int](language.types.integer.md) `$idx` = ?): [string](language.types.string.md)

public function [sigilCount](parle-rparser.sigilcount.md)(): [int](language.types.integer.md)

public function [sigilName](parle-rparser.sigilname.md)([int](language.types.integer.md) `$idx`): [string](language.types.string.md)

public function [token](parle-rparser.token.md)([string](language.types.string.md) `$tok`): [void](language.types.void.md)

public function [tokenId](parle-rparser.tokenid.md)([string](language.types.string.md) `$tok`): [int](language.types.integer.md)

public function [trace](parle-rparser.trace.md)(): [string](language.types.string.md)

public function [validate](parle-rparser.validate.md)([string](language.types.string.md) `$data`, [Parle\RLexer](class.parle-rlexer.md) `$lexer`): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`Parle\RParser::ACTION_ERROR`**

**`Parle\RParser::ACTION_SHIFT`**

**`Parle\RParser::ACTION_REDUCE`**

**`Parle\RParser::ACTION_GOTO`**

**`Parle\RParser::ACTION_ACCEPT`**

**`Parle\RParser::ERROR_SYNTAX`**

**`Parle\RParser::ERROR_NON_ASSOCIATIVE`**

**`Parle\RParser::ERROR_UNKNOWN_TOKEN`**

## Propriedades

action
:   Ação do analisador atual que corresponde a uma das constantes da classe de ação, somente leitura.

reduceId
:   ID da regra gramatical recém-processada na ação de redução. O valor corresponde a um token ou a um ID de produção. Somente leitura.

## Índice

- [Parle\RParser::advance](parle-rparser.advance.md) — Processa a próxima regra do analisador
- [Parle\RParser::build](parle-rparser.build.md) — Finaliza as regras gramaticais
- [Parle\RParser::consume](parle-rparser.consume.md) — Consome os dados para processamento
- [Parle\RParser::dump](parle-rparser.dump.md) — Despeja a gramática
- [Parle\RParser::errorInfo](parle-rparser.errorinfo.md) — Obtém informação do erro
- [Parle\RParser::left](parle-rparser.left.md) — Declara um token com associatividade à esquerda
- [Parle\RParser::nonassoc](parle-rparser.nonassoc.md) — Declara um token sem associatividade
- [Parle\RParser::precedence](parle-rparser.precedence.md) — Declarar uma regra de precedência
- [Parle\RParser::push](parle-rparser.push.md) — Adiciona uma regra gramatical
- [Parle\RParser::reset](parle-rparser.reset.md) — Redefine estado do analisador
- [Parle\RParser::right](parle-rparser.right.md) — Declara um token com associatividade à direita
- [Parle\RParser::sigil](parle-rparser.sigil.md) — Recupera uma parte correspondente de uma regra
- [Parle\RParser::sigilCount](parle-rparser.sigilcount.md) — Número de elementos na regra correspondente
- [Parle\RParser::sigilName](parle-rparser.sigilname.md) — Recupera um nome de regra ou de token
- [Parle\RParser::token](parle-rparser.token.md) — Declara um token
- [Parle\RParser::tokenId](parle-rparser.tokenid.md) — Obtém o ID do token
- [Parle\RParser::trace](parle-rparser.trace.md) — Rastreia a operação do analisador
- [Parle\RParser::validate](parle-rparser.validate.md) — Valida entrada

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
