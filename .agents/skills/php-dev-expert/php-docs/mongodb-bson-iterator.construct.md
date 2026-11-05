# Constrói um novo iterador BSON (não utilizado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-iterator.construct.php

---

# MongoDB\BSON\Iterator::\_\_construct

(mongodb >=1.16.0)

MongoDB\BSON\Iterator::\_\_construct — Constrói um novo iterador BSON (não utilizado)

### Descrição

final private function **MongoDB\BSON\Iterator::\_\_construct**()

Objetos [MongoDB\BSON\Iterator](class.mongodb-bson-iterator.md) são criados nas chamadas a
[MongoDB\BSON\Document::getIterator()](mongodb-bson-document.getiterator.md) ou
[MongoDB\BSON\PackedArray::getIterator()](mongodb-bson-packedarray.getiterator.md) e não podem ser
instanciados diretamente.

### Parâmetros

Esta função não possui parâmetros.

### Veja também

- [MongoDB\BSON\Document::getIterator()](mongodb-bson-document.getiterator.md) - Retorna um iterador para o documento BSON
- [MongoDB\BSON\PackedArray::getIterator()](mongodb-bson-packedarray.getiterator.md) - Retorna um iterador para o array BSON
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
