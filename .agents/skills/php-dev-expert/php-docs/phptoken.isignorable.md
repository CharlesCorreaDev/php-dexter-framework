# Informa se o token seria ignorado pelo analisador PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/phptoken.isignorable.php

---

# PhpToken::isIgnorable

(PHP 8)

PhpToken::isIgnorable — Informa se o token seria ignorado pelo analisador PHP

### Descrição

public function **PhpToken::isIgnorable**(): [bool](language.types.boolean.md)

Informa se o token seria ignorado pelo analisador PHP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um valor booleano se o token seria ignorado pelo analisador PHP (como espaços em branco ou comentários).

### Examples

**Exemplo #1 Exemplo de **PhpToken::isIgnorable()****

```
<?php
$echo = new PhpToken(T_ECHO, 'echo');
var_dump($echo->isIgnorable());   // -> bool(false)

$space = new PhpToken(T_WHITESPACE, ' ');
var_dump($space->isIgnorable());  // -> bool(true)
```

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
