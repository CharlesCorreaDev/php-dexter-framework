# Visão geral dos drivers PHP para MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql.php

---

# Visão geral dos drivers PHP para MySQL

# Introdução

Existem muitas APIs de PHP
para acessar bancos de dados MySQL. Os usuários podem escolher entre as
extesões [mysqli](book.mysqli.md) ou
[PDO\_MySQL](ref.pdo-mysql.md).

Este guia explica a
[terminologia](mysqlinfo.terminology.md) usada para descrever
cada API, informação sobre a
[escolha de qual API](mysqlinfo.api.choosing.md) a
ser usada, e também informação para ajudar a escolher qual
[biblioteca](mysqlinfo.library.choosing.md) MySQL a ser usada com
a API.

- [Visão geral de terminologia](mysqlinfo.terminology.md)
- [Escolhendo uma API](mysqlinfo.api.choosing.md)
- [Escolhendo uma biblioteca](mysqlinfo.library.choosing.md)
- [Conceitos](mysqlinfo.concepts.md)
  - [Consultas com buffer e sem buffer](mysqlinfo.concepts.buffering.md)
  - [Conjuntos de caracteres](mysqlinfo.concepts.charset.md)

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
