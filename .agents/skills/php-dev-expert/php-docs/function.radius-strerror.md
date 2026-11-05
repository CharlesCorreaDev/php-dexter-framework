# Retorna uma mensagem de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-strerror.php

---

# radius\_strerror

(PECL radius >= 1.1.0)

radius\_strerror — Retorna uma mensagem de erro

### Descrição

function **radius\_strerror**([resource](language.types.resource.md) `$radius_handle`): [string](language.types.string.md)

Se as funções Radius falharem, elas registram uma mensagem de erro. Essa mensagem de erro
pode ser recuperada com esta função.

### Parâmetros

`radius_handle`
:   O resource RADIUS.

### Valor Retornado

Retorna mensagens de erro como string de funções Radius com falha.

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
