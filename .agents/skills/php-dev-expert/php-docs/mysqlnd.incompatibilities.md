# Incompatibilidades

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.incompatibilities.php

---

# Incompatibilidades

O Driver Nativo MySQL é na maioria dos casos compatível com a Biblioteca Cliente MySQL
(`libmysql`). Esta seção documenta incompatibilidades
entre estas bibliotecas.

- Valores do tipo de dados `bit` são retornados como strings binárias
  (por exemplo, "\0" ou "\x1F") com `libmysql` e como strings
  decimais (por exemplo, "0" ou "31 ") com `mysqlnd`. Se for desejado que o
  código seja compatível com ambas as bibliotecas, então os campos de bits devem ser sempre retornados como
  números do MySQL com uma consulta como esta:
  `SELECT bit + 0 FROM table`.

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
