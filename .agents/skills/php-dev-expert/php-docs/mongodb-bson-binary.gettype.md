# Retorna o tipo de Binary

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-binary.gettype.php

---

# MongoDB\BSON\Binary::getType

(mongodb >=1.0.0)

MongoDB\BSON\Binary::getType — Retorna o tipo de Binary

### Descrição

final public function **MongoDB\BSON\Binary::getType**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tipo de Binary.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Binary::getType()****

```
<?php

$binary = new MongoDB\BSON\Binary('foo', MongoDB\BSON\Binary::TYPE_GENERIC);
var_dump($binary->getType());

?>
```

O exemplo acima produzirá:

```
int(0)
```

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
