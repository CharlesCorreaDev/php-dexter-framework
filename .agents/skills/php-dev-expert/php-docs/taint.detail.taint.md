# Funções e instruções que verificarão strings contaminadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/taint.detail.taint.php

---

## Funções e instruções que verificarão strings contaminadas

| Função/declaração | Desde |
| --- | --- |
| Declarações básicas | |
| eval | 0.1.0 |
| include/include\_once | 0.1.0 |
| require/require\_once | 0.1.0 |
| Funções que geram saída | |
| echo | 0.1.0 |
| print | 0.1.0 |
| printf | 0.1.0 |
| file\_put\_contents | 0.1.0 |
| Funções do sistema de arquivos | |
| fopen | 0.2.0 |
| opendir | 0.2.0 |
| basename | 0.2.0 |
| dirname | 0.2.0 |
| file | 0.2.0 |
| pathinfo | 0.2.0 |
| Funções relevantes de bancos de dados | |
| mysql\_query | 0.2.0 |
| mysqli\_query/MySQLi::query | 0.2.0 |
| sqlite\_query/SqliteDataBase::query | 0.3.0 |
| sqlite\_single\_query/SqliteDataBase::singleQuery | 0.3.0 |
| oci\_parse | 0.3.0 |
| PDO::query | 0.3.0 |
| PDO::prepare | 0.3.0 |
| SQLite3::query | 2.0.1 |
| SQLite3::prepare | 2.0.1 |
| Funções relevantes de linha de comando | |
| system | 0.1.0 |
| exec | 0.1.0 |
| proc\_open | 0.1.0 |
| passthru | 0.1.0 |
| shell\_exec | 0.3.0 |

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
