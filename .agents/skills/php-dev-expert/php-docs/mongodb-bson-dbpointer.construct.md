# Constrói um novo DBPointer (não utilizado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-dbpointer.construct.php

---

# MongoDB\BSON\DBPointer::\_\_construct

(mongodb >=1.4.0)

MongoDB\BSON\DBPointer::\_\_construct — Constrói um novo DBPointer (não utilizado)

### Descrição

final private function **MongoDB\BSON\DBPointer::\_\_construct**()

Objetos [MongoDB\BSON\DBPointer](class.mongodb-bson-dbpointer.md) são criados através da
conversão de um tipo BSON preterido e não podem ser construídos diretamente.

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
