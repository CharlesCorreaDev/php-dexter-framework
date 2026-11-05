# Anexa o bucket à brigada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-bucket-append.php

---

# stream\_bucket\_append

(PHP 5, PHP 7, PHP 8)

stream\_bucket\_append — 
Anexa o bucket à brigada

### Descrição

function **stream\_bucket\_append**([resource](language.types.resource.md) `$brigade`, [StreamBucket](class.streambucket.md) `$bucket`): [void](language.types.void.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `bucket` agora espera uma instância de [StreamBucket](class.streambucket.md); anteriormente, esperava um [stdClass](class.stdclass.md). |

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
