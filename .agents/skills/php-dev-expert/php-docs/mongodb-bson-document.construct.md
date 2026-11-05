# Constrói um novo documento BSON (não utilizado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.construct.php

---

# MongoDB\BSON\Document::\_\_construct

(mongodb >=1.16.0)

MongoDB\BSON\Document::\_\_construct — Constrói um novo documento BSON (não utilizado)

### Descrição

final private function **MongoDB\BSON\Document::\_\_construct**()

Objetos [MongoDB\BSON\Document](class.mongodb-bson-document.md) são criados através de
métodos estáticos de fabricação e não podem ser instanciados diretamente.

### Parâmetros

Esta função não possui parâmetros.

### Veja também

- [MongoDB\BSON\Document::fromPHP()](mongodb-bson-document.fromphp.md) - Constrói uma nova instância de documento a partir de dados PHP
- [MongoDB\BSON\Document::fromBSON()](mongodb-bson-document.frombson.md) - Constrói uma nova instância de documento a partir de uma string BSON
- [MongoDB\BSON\Document::fromJSON()](mongodb-bson-document.fromjson.md) - Constrói uma nova instância de documento a partir de uma string JSON
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
