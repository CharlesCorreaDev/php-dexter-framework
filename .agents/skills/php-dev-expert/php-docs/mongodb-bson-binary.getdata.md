# Retorna os dados de Binary

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-binary.getdata.php

---

# MongoDB\BSON\Binary::getData

(mongodb >=1.0.0)

MongoDB\BSON\Binary::getData — Retorna os dados de Binary

### Descrição

final public function **MongoDB\BSON\Binary::getData**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna os dados de Binary.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Binary::getData()****

```
<?php

$binary = new MongoDB\BSON\Binary('foo', MongoDB\BSON\Binary::TYPE_GENERIC);
var_dump($binary->getData());

?>
```

O exemplo acima produzirá:

```
string(3) "foo"
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
