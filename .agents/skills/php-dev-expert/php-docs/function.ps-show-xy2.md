# Exibe texto na posição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-show-xy2.php

---

# ps\_show\_xy2

(PECL ps >= 1.1.0)

ps\_show\_xy2 — Exibe texto na posição

### Descrição

function **ps\_show\_xy2**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [string](language.types.string.md) `$text`,  
    [int](language.types.integer.md) `$len`,  
    [float](language.types.float.md) `$xcoor`,  
    [float](language.types.float.md) `$ycoor`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

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
