# Retorna um iterador para o documento BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.getiterator.php

---

# MongoDB\BSON\Document::getIterator

(mongodb >=1.16.0)

MongoDB\BSON\Document::getIterator — Retorna um iterador para o documento BSON

### Descrição

final public function **MongoDB\BSON\Document::getIterator**(): [MongoDB\BSON\Iterator](class.mongodb-bson-iterator.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma instância de [MongoDB\BSON\Iterator](class.mongodb-bson-iterator.md) que pode ser
usada para iterar sobre todas as chaves do documento.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) se o iterador BSON não puder ser inicializado.

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
