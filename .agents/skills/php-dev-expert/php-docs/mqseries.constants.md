# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mqseries.constants.php

---

# Constantes predefinidas

Para cada Constante WebSphere MQ há uma contraparte mqseries.

Para definições e uso, veja os livros vermelhos WebSphere MQ Application Programming Guide e
WebSphere MQ Application Programming Reference.

O nome da contraparte mqseries é feito anexando a constante WebSphere MQ com MQSERIES\_,
por exemplo, as constantes CompletionCode são:

**Constantes mqseries**

| Constante PHP | Constante MQ |
| --- | --- |
| **`MQSERIES_MQCC_OK`** | MQCC\_OK |
| **`MQSERIES_MQCC_WARNING`** | MQCC\_WARNING |
| **`MQSERIES_MQCC_FAILED`** | MQCC\_FAILED |
| **`MQSERIES_MQCC_UNKNOWN`** | MQCC\_UNKNOWN |

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
