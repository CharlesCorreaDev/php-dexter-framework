# Exclui um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-drop-db.php

---

# ibase\_drop\_db

(PHP 5, PHP 7 < 7.4.0)

ibase\_drop\_db — Exclui um banco de dados

### Descrição

function **ibase\_drop\_db**([resource](language.types.resource.md) `$connection` = **`null`**): [bool](language.types.boolean.md)

Esta função exclui um banco de dados que foi aberto por [ibase\_connect()](function.ibase-connect.md)
ou [ibase\_pconnect()](function.ibase-pconnect.md). O banco de dados é fechado e excluído do servidor.

### Parâmetros

`connection`
:   Um identificador de conexão do InterBase. Se omitido, a última conexão aberta é
    assumida.

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
