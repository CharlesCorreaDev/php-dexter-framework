# Limpa parâmetros de dimensionamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-clear-scaling-params.php

---

# fann\_clear\_scaling\_params

(PECL fann >= 1.0.0)

fann\_clear\_scaling\_params — Limpa parâmetros de dimensionamento

### Descrição

function **fann\_clear\_scaling\_params**([resource](language.types.resource.md) `$ann`): [bool](language.types.boolean.md)

Limpa parâmetros de dimensionamento.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

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
