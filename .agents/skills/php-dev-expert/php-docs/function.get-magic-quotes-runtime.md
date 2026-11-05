# Obtém a configuração ativa para magic_quotes_runtime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-magic-quotes-runtime.php

---

# get\_magic\_quotes\_runtime

(PHP 4, PHP 5, PHP 7)

get\_magic\_quotes\_runtime — Obtém a configuração ativa para magic\_quotes\_runtime

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **get\_magic\_quotes\_runtime**(): [false](language.types.singleton.md)

Sempre retorna **`false`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi removida. |
| 7.4.0 | Esta função foi descontinuada. |

### Veja também

- [get\_magic\_quotes\_gpc()](function.get-magic-quotes-gpc.md) - Obtém a configuração atual de magic\_quotes\_gpc

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
