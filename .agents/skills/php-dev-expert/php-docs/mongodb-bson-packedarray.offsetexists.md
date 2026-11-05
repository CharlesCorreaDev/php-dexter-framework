# Informa se um índice está presente no array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.offsetexists.php

---

# MongoDB\BSON\PackedArray::offsetExists

(mongodb >=1.17.0)

MongoDB\BSON\PackedArray::offsetExists — Informa se um índice está presente no array

### Descrição

final public function **MongoDB\BSON\PackedArray::offsetExists**([mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

### Parâmetros

`key`
:   O índice a ser procurado no array.

### Valor Retornado

Retorna **`true`** se o índice estiver presente no array ou **`false`** caso contrário.

### Veja também

- [ArrayAccess::offsetExists()](arrayaccess.offsetexists.md) - Verifica se uma posição existe
- [MongoDB\BSON\PackedArray::has()](mongodb-bson-packedarray.has.md) - Informa se um índice está presente no array

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
