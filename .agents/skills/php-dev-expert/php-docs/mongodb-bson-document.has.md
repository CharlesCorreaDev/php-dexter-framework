# Informa se uma chave está presente no documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.has.php

---

# MongoDB\BSON\Document::has

(mongodb >=1.16.0)

MongoDB\BSON\Document::has — Informa se uma chave está presente no documento

### Descrição

final public function **MongoDB\BSON\Document::has**([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

### Parâmetros

`key` ([string](language.types.string.md))
:   A chave a ser procurada no documento.

### Valor Retornado

Retorna **`true`** se a chave estiver presente no documento ou **`false`** caso contrário.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\BSON\Document::get()](mongodb-bson-document.get.md) - Retorna o valor de uma chave no documento
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
