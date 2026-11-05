# Driver PDO do Microsoft SQL Server e Sybase (PDO_DBLIB)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-dblib.php

---

# Driver PDO do Microsoft SQL Server e Sybase (PDO\_DBLIB)

## Introdução

PDO\_DBLIB é um driver que implementa a [interface
para Objetos de Dados PHP Data Objects (PDO)](book.pdo.md#intro.pdo) para permitir o acesso do PHP aos
bancos de dados Microsoft SQL Server e Sybase através da biblioteca FreeTDS.

Esta extensão não está mais disponível no Windows.

No Windows, deve ser usado o SqlSrv, um driver alternativo para MS SQL está
disponível na Microsoft: [» https://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx](https://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx).

Caso não seja possível usar o SqlSrv, pode-se usar o
driver [PDO\_ODBC](ref.pdo-odbc.md) para conectar-se aos
bancos de dados Microsoft SQL Server e Sybase, pois o DB-LIB nativo do Windows
é antigo, inseguro para threads e não é mais suportado pela Microsoft.

## Índice

- [PDO\_DBLIB DSN](ref.pdo-dblib.connection.md) — Conectando-se aos bancos de dados Microsoft SQL Server e Sybase

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
