# Funções que descontaminam a string contaminada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/taint.detail.untaint.php

---

## Funções que descontaminam a string contaminada

| Função | Desde |
| --- | --- |
| addslashes | 0.1.0 |
| addcslashes | 0.1.0 |
| htmlspecialchars | 0.1.0 |
| htmlentities | 0.1.0 |
| escapeshellcmd | 0.1.0 |
| mysql\_escape\_string | 0.1.0 |
| mysql\_real\_escape\_string | 0.1.0 |
| mysqli\_escape\_string/MySQLi::escape\_string | 0.1.0 |
| mysqli\_real\_escape\_string/MySQLi::real\_escape\_string | 0.1.0 |
| sqlite\_escape\_string/SqliteDataBase::escapeString | 0.3.0 |
| PDO::quote | 0.3.0 |

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
