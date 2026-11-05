# Retorna a representação em string deste array BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.tostring.php

---

# MongoDB\BSON\PackedArray::\_\_toString

(mongodb >=1.16.0)

MongoDB\BSON\PackedArray::\_\_toString — Retorna a representação em string deste array BSON

### Descrição

final public function **MongoDB\BSON\PackedArray::\_\_toString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em string deste array BSON.

### Veja também

- [» Tipos BSON](https://www.mongodb.com/docs/manual/reference/bson-types/)

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
