# Fecha uma conexão com um banco de dados InterBase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-close.php

---

# ibase\_close

(PHP 5, PHP 7 < 7.4.0)

ibase\_close — Fecha uma conexão com um banco de dados InterBase

### Descrição

function **ibase\_close**([resource](language.types.resource.md) `$connection_id` = **`null`**): [bool](language.types.boolean.md)

Fecha a conexão para um banco de dados InterBase que está associado a
um ID retornado de [ibase\_connect()](function.ibase-connect.md).
A transação padrão na conexão é confirmada, outras transações são
revertidas.

### Parâmetros

`connection_id`
:   Um identificador de conexão InterBase retornado de
    [ibase\_connect()](function.ibase-connect.md). Se omitido, a última conexão aberta
    é assumida.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ibase\_connect()](function.ibase-connect.md) - Abre uma conexão com um banco de dados
- [ibase\_pconnect()](function.ibase-pconnect.md) - Abre uma conexão persistente com um banco de dados InterBase

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
