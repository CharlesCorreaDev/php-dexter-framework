# Retorna um novo objeto PhpToken

> **Fonte / Source:** https://www.php.net/manual/pt_BR/phptoken.construct.php

---

# PhpToken::\_\_construct

(PHP 8)

PhpToken::\_\_construct — Retorna um novo objeto PhpToken

### Descrição

final public function **PhpToken::\_\_construct**(  
    [int](language.types.integer.md) `$id`,  
    [string](language.types.string.md) `$text`,  
    [int](language.types.integer.md) `$line` = -1,  
    [int](language.types.integer.md) `$pos` = -1  
)

Retorna um novo objeto PhpToken.

### Parâmetros

`id`
:   Uma das constantes T\_\* (consulte [Lista de Tokens do Analisador](tokens.md)) ou um ponto de código ASCII representando um token de caracter único.

`text`
:   O conteúdo textual do token.

`line`
:   O número da linha inicial (com base em 1) do token.

`pos`
:   A posição inicial (com base em 0) na string tokenizada (o número de bytes).

### Veja também

- [PhpToken::tokenize()](phptoken.tokenize.md) - Divide a fonte fornecida em tokens PHP, representados por objetos PhpToken

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
