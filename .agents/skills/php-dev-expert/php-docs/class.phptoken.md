# A classe PhpToken

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.phptoken.php

---

# A classe PhpToken

(PHP 8)

## Introdução

Esta classe fornece uma alternativa para [token\_get\_all()](function.token-get-all.md). Embora a função retorne tokens
como uma string de um único caractere ou um array com um ID de token, texto de token e número de linha,
[PhpToken::tokenize()](phptoken.tokenize.md) normaliza todos os tokens em objetos PhpToken, o que torna o código que opera
em tokens mais eficientes em termos de memória e mais legíveis.

## Resumo da classe

class ****PhpToken****
implements
[Stringable](class.stringable.md) {

/\* Propriedades \*/

public
[int](language.types.integer.md)
[$id](class.phptoken.md#phptoken.props.id);

public
[string](language.types.string.md)
[$text](class.phptoken.md#phptoken.props.text);

public
[int](language.types.integer.md)
[$line](class.phptoken.md#phptoken.props.line);

public
[int](language.types.integer.md)
[$pos](class.phptoken.md#phptoken.props.pos);

/\* Métodos \*/

final public function [\_\_construct](phptoken.construct.md)(  
    [int](language.types.integer.md) `$id`,  
    [string](language.types.string.md) `$text`,  
    [int](language.types.integer.md) `$line` = -1,  
    [int](language.types.integer.md) `$pos` = -1  
)

public function [getTokenName](phptoken.gettokenname.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [is](phptoken.is.md)([int](language.types.integer.md)|[string](language.types.string.md)|[array](language.types.array.md) `$kind`): [bool](language.types.boolean.md)

public function [isIgnorable](phptoken.isignorable.md)(): [bool](language.types.boolean.md)

public function [\_\_toString](phptoken.tostring.md)(): [string](language.types.string.md)

public static function [tokenize](phptoken.tokenize.md)([string](language.types.string.md) `$code`, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

}

## Propriedades

id
:   Uma das constantes T\_\* ou um ponto de código ASCII representando um token de caracter único.

text
:   O conteúdo textual do token.

line
:   O número da linha inicial (com base em 1) do token.

pos
:   A posição inicial (com base em 0) na string tokenizada (o número de bytes).

## Índice

- [PhpToken::\_\_construct](phptoken.construct.md) — Retorna um novo objeto PhpToken
- [PhpToken::getTokenName](phptoken.gettokenname.md) — Retorna o nome do token
- [PhpToken::is](phptoken.is.md) — Informa se o token é de determinado tipo
- [PhpToken::isIgnorable](phptoken.isignorable.md) — Informa se o token seria ignorado pelo analisador PHP
- [PhpToken::\_\_toString](phptoken.tostring.md) — Retorna o conteúdo textual do token
- [PhpToken::tokenize](phptoken.tokenize.md) — Divide a fonte fornecida em tokens PHP, representados por objetos PhpToken

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
