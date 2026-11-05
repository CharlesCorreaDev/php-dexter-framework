# Verifica se uma variável de um tipo especificado existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.filter-has-var.php

---

# filter\_has\_var

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

filter\_has\_var — Verifica se uma variável de um tipo especificado existe

### Descrição

function **filter\_has\_var**([int](language.types.integer.md) `$input_type`, [string](language.types.string.md) `$var_name`): [bool](language.types.boolean.md)

### Parâmetros

`input_type`
:   Uma das constantes **`INPUT_GET`**, **`INPUT_POST`**,
    **`INPUT_COOKIE`**, **`INPUT_SERVER`** ou
    **`INPUT_ENV`**.

`var_name`
:   Nome da variável a ser verificada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
