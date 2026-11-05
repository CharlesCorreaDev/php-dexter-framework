# Especifica os bancos de dados dentro de uma sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-database.php

---

# yaz\_database

(PHP 4 >= 4.0.6, PECL yaz >= 0.9.0)

yaz\_database — 
Especifica os bancos de dados dentro de uma sessão

### Descrição

function **yaz\_database**([resource](language.types.resource.md) `$id`, [string](language.types.string.md) `$databases`): [bool](language.types.boolean.md)

Esta função permite que sejam alterados bancos de dados dentro de uma sessão
especificando um ou mais bancos de dados a serem usados ​​em pesquisas, recuperações, etc.
- substituindo os bancos de dados especificados na chamada a
[yaz\_connect()](function.yaz-connect.md).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`databases`
:   Uma string contendo um ou mais bancos de dados. Vários bancos de dados são
    separados por um sinal de mais `+`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
