# Gera um identificador único global (GUID)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.com-create-guid.php

---

# com\_create\_guid

(PHP 5, PHP 7, PHP 8)

com\_create\_guid — Gera um identificador único global (GUID)

### Descrição

function **com\_create\_guid**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Gera um identificador único global (GUID).

Um GUID é gerado da mesma maneira que os UUIDs do DCE, exceto que a
convenção da Microsoft é colocar um GUID entre chaves.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o GUID como uma string, ou **`false`** em caso de falha.

### Veja também

- **uuid\_create()** na extensão uuid PECL

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
