# Libera todos os recursos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-close.php

---

# radius\_close

(PECL radius >= 1.1.0)

radius\_close — Libera todos os recursos

### Descrição

function **radius\_close**([resource](language.types.resource.md) `$radius_handle`): [bool](language.types.boolean.md)

Não é necessário chamar esta função porque o PHP libera todos os recursos
ao final de cada solicitação.

### Parâmetros

`radius_handle`
:   O resource RADIUS.

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
