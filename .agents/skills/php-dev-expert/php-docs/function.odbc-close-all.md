# Fecha todas as conexões ODBC

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-close-all.php

---

# odbc\_close\_all

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_close\_all — Fecha todas as conexões ODBC

### Descrição

function **odbc\_close\_all**(): [void](language.types.void.md)

**odbc\_close\_all()** fechará todas as
conexões aos servidores de banco de dados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Notas

> **Nota**:
>
> Esta função falhará se houver transações abertas em uma conexão.
> Esta conexão permanecerá aberta neste caso.

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
