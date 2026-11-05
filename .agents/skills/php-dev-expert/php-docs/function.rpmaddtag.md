# Adiciona a tag recuperada na consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rpmaddtag.php

---

# rpmaddtag

(PECL rpminfo >= 0.5.0)

rpmaddtag — Adiciona a tag recuperada na consulta

### Descrição

function **rpmaddtag**([int](language.types.integer.md) `$tag`): [bool](language.types.boolean.md)

Adiciona uma tag recuperada adicional em consultas subsequentes.

### Parâmetros

`tag`
:   Uma das constantes **`RPMTAG_*`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [rpminfo()](function.rpminfo.md) - Obtém informações de um arquivo RPM
- [rpmdbinfo()](function.rpmdbinfo.md) - Obtém informações do RPM instalado
- [rpmdbsearch()](function.rpmdbsearch.md) - Pesquisa pacotes RPM

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
