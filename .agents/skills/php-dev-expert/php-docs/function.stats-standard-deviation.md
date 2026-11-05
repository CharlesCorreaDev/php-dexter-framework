# Retorna o desvio padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-standard-deviation.php

---

# stats\_standard\_deviation

(PECL stats >= 1.0.0)

stats\_standard\_deviation — Retorna o desvio padrão

### Descrição

function **stats\_standard\_deviation**([array](language.types.array.md) `$a`, [bool](language.types.boolean.md) `$sample` = **`false`**): [float](language.types.float.md)

Retorna o desvio padrão dos valores em `a`.

### Parâmetros

`a`
:   O array de dados para encontrar o desvio padrão. Observe que todos os
    valores do array serão convertidos para [float](language.types.float.md).

`sample`
:   Indica se `a` representa uma amostra da
    população; o padrão é **`false`**.

### Valor Retornado

Retorna o desvio padrão em caso de sucesso; **`false`** em caso de falha.

### Erros/Exceções

Gera uma **`E_WARNING`** quando há menos de 2
valores em `a`.

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
