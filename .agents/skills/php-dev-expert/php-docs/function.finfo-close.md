# Fecha uma instância de finfo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.finfo-close.php

---

# finfo\_close

(PHP >= 5.3.0, PHP 7, PHP 8, PECL fileinfo >= 0.1.0)

finfo\_close — Fecha uma instância de finfo

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.5.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **finfo\_close**([finfo](class.finfo.md) `$finfo`): [true](language.types.singleton.md)

O objetivo desta função era fechar a instância aberta por [finfo\_open()](function.finfo-open.md) até o PHP 7.4,
mas é uma função inoperante desde a conversão de recurso para objeto [finfo](class.finfo.md) implementada no PHP 8.0,
e foi descontinuada no PHP 8.5.

### Parâmetros

`finfo`
:   Uma instância de [finfo](class.finfo.md), retornada por [finfo\_open()](function.finfo-open.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Esta função foi descontinuada. |
| 8.5.0 | Agora o tipo de retorno é **`true`**; antes era [bool](language.types.boolean.md). |
| 8.1.0 | Esta função agora é um NOP. |
| 8.1.0 | O parâmetro `finfo` agora espera uma instância de [finfo](class.finfo.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
