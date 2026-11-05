# A classe Parle\Parser

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parle-parser.php

---

# A classe Parle\Parser

(PECL parle >= 0.5.1)

## Introdução

Classe analisadora. As regras podem ser definidas dinamicamente. Uma vez finalizadas, uma instância de [Parle\Lexer](class.parle-lexer.md) é necessária para entregar o fluxo de tokens.

## Resumo da classe

class **Parle\Parser**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[ACTION\_ERROR](class.parle-parser.md#parle-parser.constants.action-error) = 0;

const
[int](language.types.integer.md)
[ACTION\_SHIFT](class.parle-parser.md#parle-parser.constants.action-shift) = 1;

const
[int](language.types.integer.md)
[ACTION\_REDUCE](class.parle-parser.md#parle-parser.constants.action-reduce) = 2;

const
[int](language.types.integer.md)
[ACTION\_GOTO](class.parle-parser.md#parle-parser.constants.action-goto) = 3;

const
[int](language.types.integer.md)
[ACTION\_ACCEPT](class.parle-parser.md#parle-parser.constants.action-accept) = 4;

const
[int](language.types.integer.md)
[ERROR\_SYNTAX](class.parle-parser.md#parle-parser.constants.error-syntax) = 0;

const
[int](language.types.integer.md)
[ERROR\_NON\_ASSOCIATIVE](class.parle-parser.md#parle-parser.constants.error-non-associative) = 1;

const
[int](language.types.integer.md)
[ERROR\_UNKNOWN\_TOKEN](class.parle-parser.md#parle-parser.constants.error-unknown-token) = 2;

/\* Propriedades \*/

public
[int](language.types.integer.md)
[$action](class.parle-parser.md#parle-parser.props.action) = 0;

public
[int](language.types.integer.md)
[$reduceId](class.parle-parser.md#parle-parser.props.reduceId) = 0;

/\* Métodos \*/

public function [advance](parle-parser.advance.md)(): [void](language.types.void.md)

public function [build](parle-parser.build.md)(): [void](language.types.void.md)

public function [consume](parle-parser.consume.md)([string](language.types.string.md) `$data`, [Parle\Lexer](class.parle-lexer.md) `$lexer`): [void](language.types.void.md)

public function [dump](parle-parser.dump.md)(): [void](language.types.void.md)

public function [errorInfo](parle-parser.errorinfo.md)(): [Parle\ErrorInfo](class.parle-errorinfo.md)

public function [left](parle-parser.left.md)([string](language.types.string.md) `$tok`): [void](language.types.void.md)

public function [nonassoc](parle-parser.nonassoc.md)([string](language.types.string.md) `$tok`): [void](language.types.void.md)

public function [precedence](parle-parser.precedence.md)([string](language.types.string.md) `$tok`): [void](language.types.void.md)

public function [push](parle-parser.push.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$rule`): [int](language.types.integer.md)

public function [reset](parle-parser.reset.md)([int](language.types.integer.md) `$tokenId` = ?): [void](language.types.void.md)

public function [right](parle-parser.right.md)([string](language.types.string.md) `$tok`): [void](language.types.void.md)

public function [sigil](parle-parser.sigil.md)([int](language.types.integer.md) `$idx`): [string](language.types.string.md)

public function [sigilCount](parle-parser.sigilcount.md)(): [int](language.types.integer.md)

public function [sigilName](parle-parser.sigilname.md)([int](language.types.integer.md) `$idx`): [string](language.types.string.md)

public function [token](parle-parser.token.md)([string](language.types.string.md) `$tok`): [void](language.types.void.md)

public function [tokenId](parle-parser.tokenid.md)([string](language.types.string.md) `$tok`): [int](language.types.integer.md)

public function [trace](parle-parser.trace.md)(): [string](language.types.string.md)

public function [validate](parle-parser.validate.md)([string](language.types.string.md) `$data`, [Parle\Lexer](class.parle-lexer.md) `$lexer`): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`Parle\Parser::ACTION_ERROR`**

**`Parle\Parser::ACTION_SHIFT`**

**`Parle\Parser::ACTION_REDUCE`**

**`Parle\Parser::ACTION_GOTO`**

**`Parle\Parser::ACTION_ACCEPT`**

**`Parle\Parser::ERROR_SYNTAX`**

**`Parle\Parser::ERROR_NON_ASSOCIATIVE`**

**`Parle\Parser::ERROR_UNKNOWN_TOKEN`**

## Propriedades

action
:   Ação do analisador atual que corresponde a uma das constantes da classe de ação, somente leitura.

reduceId
:   ID da regra gramatical recém-processada na ação de redução. O valor corresponde a um token ou a um ID de produção. Somente leitura.

## Índice

- [Parle\Parser::advance](parle-parser.advance.md) — Processa a próxima regra do analisador
- [Parle\Parser::build](parle-parser.build.md) — Finaliza as regras gramaticais
- [Parle\Parser::consume](parle-parser.consume.md) — Consome os dados para processamento
- [Parle\Parser::dump](parle-parser.dump.md) — Despeja a gramática
- [Parle\Parser::errorInfo](parle-parser.errorinfo.md) — Obtém informação do erro
- [Parle\Parser::left](parle-parser.left.md) — Declara um token com associatividade à esquerda
- [Parle\Parser::nonassoc](parle-parser.nonassoc.md) — Declara um token sem associatividade
- [Parle\Parser::precedence](parle-parser.precedence.md) — Declara uma regra de precedência
- [Parle\Parser::push](parle-parser.push.md) — Adiciona uma regra gramatical
- [Parle\Parser::reset](parle-parser.reset.md) — Redefine estado do analisador
- [Parle\Parser::right](parle-parser.right.md) — Declara um token com associatividade à direita
- [Parle\Parser::sigil](parle-parser.sigil.md) — Recupera uma parte correspondente de uma regra
- [Parle\Parser::sigilCount](parle-parser.sigilcount.md) — Número de elementos na regra correspondente
- [Parle\Parser::sigilName](parle-parser.sigilname.md) — Recupera um nome de regra ou de token
- [Parle\Parser::token](parle-parser.token.md) — Declara um token
- [Parle\Parser::tokenId](parle-parser.tokenid.md) — Obtém o ID do token
- [Parle\Parser::trace](parle-parser.trace.md) — Rastreia a operação do analisador
- [Parle\Parser::validate](parle-parser.validate.md) — Valida entrada

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
