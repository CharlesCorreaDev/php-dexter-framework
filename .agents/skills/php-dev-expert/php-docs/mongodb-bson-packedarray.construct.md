# Constrói um novo array BSON (não utilizado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.construct.php

---

# MongoDB\BSON\PackedArray::\_\_construct

(mongodb >=1.16.0)

MongoDB\BSON\PackedArray::\_\_construct — Constrói um novo array BSON (não utilizado)

### Descrição

final private function **MongoDB\BSON\PackedArray::\_\_construct**()

Objetos [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md) são criados através de
métodos estáticos de fabricação e não podem ser instanciados diretamente.

### Parâmetros

Esta função não possui parâmetros.

### Veja também

- [MongoDB\BSON\PackedArray::fromPHP()](mongodb-bson-packedarray.fromphp.md) - Constrói uma nova instância de array BSON a partir de dados PHP
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
