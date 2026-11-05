# Retorna a variância

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-variance.php

---

# stats\_variance

(PECL stats >= 1.0.0)

stats\_variance — Retorna a variância

### Descrição

function **stats\_variance**([array](language.types.array.md) `$a`, [bool](language.types.boolean.md) `$sample` = **`false`**): [float](language.types.float.md)

Retorna a variância dos valores em `a`.

### Parâmetros

`a`
:   O array de dados para encontrar o desvio padrão. Observe que todos os
    valores do array serão convertidos para [float](language.types.float.md).

`sample`
:   Indica se `a` representa uma amostra da
    população; o padrão é **`false`**.

### Valor Retornado

Retorna a variância em caso de sucesso; **`false`** em caso de falha.

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
