# Libera todos os recursos associados à instrução ou cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-free-statement.php

---

# oci\_free\_statement

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_free\_statement — Libera todos os recursos associados à instrução ou cursor

### Descrição

function **oci\_free\_statement**([resource](language.types.resource.md) `$statement`): [bool](language.types.boolean.md)

Libera recursos associados ao cursor ou à instrução do Oracle, que foram
recebidos como resultado de [oci\_parse()](function.oci-parse.md) ou obtidos
do Oracle.

### Parâmetros

`statement`
:   Um identificador de instrução OCI válido.

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
