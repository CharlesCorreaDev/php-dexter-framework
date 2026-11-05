# Registro de Alterações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/changelog.mysql_xdevapi.php

---

# Registro de Alterações

As alterações a seguir foram feitas em
classes/funções/métodos desta extensão.

### Registro Geral Alterações para a extensão ext/mysql\_xdevapi

Este registro de alterações referencia a extensão ext/mysql\_xdevapi.

### Alterações globais da ext/mysql\_xdevapi

| Versão | Descrição |
| --- | --- |
| 8.0.28 | Removido suporte a TLSv1 e TLSv1.1. Os valores "TLSv1", "TLSv1.0", e "TLSv1.1" agora são considerados inválidos para o atributo de conexão "tls-versions". |
| 8.0.26 | Suporte a TLSv1 e TLSv1.1 foi descontinuado. |

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
