# Retorna a chave do elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-iterator.key.php

---

# MongoDB\BSON\Iterator::key

(mongodb >=1.16.0)

MongoDB\BSON\Iterator::key — Retorna a chave do elemento atual

### Descrição

public function **MongoDB\BSON\Iterator::key**(): [string](language.types.string.md)|[int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a chave do elemento atual. Ao iterar sobre um documento BSON, a
chave sempre será uma [string](language.types.string.md). Ao iterar sobre um array BSON, a
chave será um [int](language.types.integer.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md) se o iterador não for válido.

### Veja também

- [Iterator::key()](iterator.key.md) - Retorna a chave do elemento atual

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
