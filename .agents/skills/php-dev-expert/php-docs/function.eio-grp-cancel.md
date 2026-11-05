# Cancela um grupo de requisições

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-grp-cancel.php

---

# eio\_grp\_cancel

(PECL eio >= 0.0.1dev)

eio\_grp\_cancel — Cancela um grupo de requisições

### Descrição

function **eio\_grp\_cancel**([resource](language.types.resource.md) `$grp`): [void](language.types.void.md)

**eio\_grp\_cancel()** cancela o grupo de requisições especificado pelo
recurso `grp`.

### Parâmetros

`grp`
:   O recurso de grupo de requisições retornado por [eio\_grp()](function.eio-grp.md).

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [eio\_grp()](function.eio-grp.md) - Cria um grupo de requisições
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
