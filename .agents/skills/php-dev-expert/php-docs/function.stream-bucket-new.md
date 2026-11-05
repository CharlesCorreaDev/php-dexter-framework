# Cria um novo bucket para uso no fluxo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-bucket-new.php

---

# stream\_bucket\_new

(PHP 5, PHP 7, PHP 8)

stream\_bucket\_new — 
Cria um novo bucket para uso no fluxo atual

### Descrição

function **stream\_bucket\_new**([resource](language.types.resource.md) `$stream`, [string](language.types.string.md) `$buffer`): [StreamBucket](class.streambucket.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Esta função agora retorna uma instância de [StreamBucket](class.streambucket.md); anteriormente, retornava um [stdClass](class.stdclass.md). |

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
