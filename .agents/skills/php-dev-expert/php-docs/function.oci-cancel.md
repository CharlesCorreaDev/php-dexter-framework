# Cancela a leitura do cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-cancel.php

---

# oci\_cancel

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_cancel — Cancela a leitura do cursor

### Descrição

function **oci\_cancel**([resource](language.types.resource.md) `$statement`): [bool](language.types.boolean.md)

Invalida um cursor, liberando todos os recursos associados e cancelando a
capacidade de leitura dele.

### Parâmetros

`statement`
:   Uma instrução OCI.

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
