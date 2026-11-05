# Notas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.notes.php

---

# Notas

Algumas notas de implementação:

1. Foi adicionado suporte para `MYSQL_TYPE_GEOMETRY`
   à extensão MySQLi no PHP 5.3.
2. Observe que existem diferentes implementações internas em
   `libmysqlclient` e `mysqlnd` para lidar
   com colunas do tipo `MYSQL_TYPE_GEOMETRY`. De um modo geral,
   o `mysqlnd` irá alocar significativamente menos memória. Por
   exemplo, se houver uma coluna `POINT`
   em um conjunto de resultados, `libmysqlclient` pode pré-alocar até
   4 GB de RAM, embora sejam necessários menos de 50 bytes para
   manter uma coluna `POINT` na memória. A alocação de
   memória é muito menor, menos de 50 bytes, se estiver
   usando `mysqlnd`.

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
