# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ps.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

As duas tabelas a seguir listam todas as constantes definidas pela extensão ps.

**Constantes para limites de linha**

| Nome | Significado |
| --- | --- |
| **`ps_LINECAP_BUTT`** |  |
| **`ps_LINECAP_ROUND`** |  |
| **`ps_LINECAP_SQUARED`** |  |

**Constantes para junções de linha**

| Nome | Significado |
| --- | --- |
| **`ps_LINEJOIN_MITER`** |  |
| **`ps_LINEJOIN_ROUND`** |  |
| **`ps_LINEJOIN_BEVEL`** |  |

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
