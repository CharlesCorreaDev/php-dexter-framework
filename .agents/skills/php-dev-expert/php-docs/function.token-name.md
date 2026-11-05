# Pega o nome simbólico de um dado token do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.token-name.php

---

# token\_name

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

token\_name — Pega o nome simbólico de um dado token do PHP

### Descrição

function **token\_name**([int](language.types.integer.md) `$id`): [string](language.types.string.md)

**token\_name()** Pega o nome simbólico para o
valor de `id`.

### Parâmetros

`id`
:   O valor do token.

### Valor Retornado

O nome simbólico do dado `id`.

### Examples

**Exemplo #1 Exemplo de **token\_name()****

```
<?php
// 260 é o valor do token T_EVAL
echo token_name(260);        // -> "T_EVAL"

// uma constante token é igual ao seu próprio nome
echo token_name(T_FUNCTION); // -> "T_FUNCTION"
?>
```

### Veja também

- [Lista de tokens do analisador](tokens.md)
- [PhpToken::getTokenName()](phptoken.gettokenname.md) - Retorna o nome do token

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
