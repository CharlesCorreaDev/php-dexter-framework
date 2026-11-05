# Define limite de grupo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-grp-limit.php

---

# eio\_grp\_limit

(PECL eio >= 0.0.1dev)

eio\_grp\_limit — Define limite de grupo

### Descrição

function **eio\_grp\_limit**([resource](language.types.resource.md) `$grp`, [int](language.types.integer.md) `$limit`): [void](language.types.void.md)

Limita o número de requisições no grupo.

### Parâmetros

`grp`
:   O recurso de grupo de requisições.

`limit`
:   Número máximo de requisições no grupo.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [eio\_grp\_add()](function.eio-grp-add.md) - Adiciona uma requisição ao grupo de requisições

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
