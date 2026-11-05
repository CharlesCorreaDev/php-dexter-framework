# Constrói um novo Undefined (não utilizado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-undefined.construct.php

---

# MongoDB\BSON\Undefined::\_\_construct

(mongodb >=1.4.0)

MongoDB\BSON\Undefined::\_\_construct — Constrói um novo Undefined (não utilizado)

### Descrição

final private function **MongoDB\BSON\Undefined::\_\_construct**()

Objetos [MongoDB\BSON\Undefined](class.mongodb-bson-undefined.md) são criados através de
conversão de um tipo descontinuado do BSON e não podem ser construídos diretamente.

### Parâmetros

Esta função não possui parâmetros.

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
