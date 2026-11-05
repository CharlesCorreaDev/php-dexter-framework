# Informa se uma chave está presente no documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.offsetexists.php

---

# MongoDB\BSON\Document::offsetExists

(mongodb >=1.17.0)

MongoDB\BSON\Document::offsetExists — Informa se uma chave está presente no documento

### Descrição

final public function **MongoDB\BSON\Document::offsetExists**([mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

### Parâmetros

`key`
:   A chave a ser procurada no documento.

### Valor Retornado

Retorna **`true`** se a chave estiver presente no documento ou **`false`** caso contrário.

### Veja também

- [ArrayAccess::offsetExists()](arrayaccess.offsetexists.md) - Verifica se uma posição existe
- [MongoDB\BSON\Document::has()](mongodb-bson-document.has.md) - Informa se uma chave está presente no documento

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
