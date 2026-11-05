# Executa a entrada através da rede neural

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-run.php

---

# fann\_run

(PECL fann >= 1.0.0)

fann\_run — Executa a entrada através da rede neural

### Descrição

function **fann\_run**([resource](language.types.resource.md) `$ann`, [array](language.types.array.md) `$input`): [array](language.types.array.md)

Executa a entrada através da rede neural, retornando um array de saídas, que serão em número igual
ao número de neurônios na camada de saída.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`input`
:   Array de valores de entrada

### Valor Retornado

Array de valores de saída, ou **`false`** em caso de erro.

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
