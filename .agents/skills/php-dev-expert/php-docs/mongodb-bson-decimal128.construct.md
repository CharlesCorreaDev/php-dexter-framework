# Constrói um novo Decimal128

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-decimal128.construct.php

---

# MongoDB\BSON\Decimal128::\_\_construct

(mongodb >=1.2.0)

MongoDB\BSON\Decimal128::\_\_construct — Constrói um novo Decimal128

### Descrição

final public function **MongoDB\BSON\Decimal128::\_\_construct**([string](language.types.string.md) `$value`)

> **Nota**:
>
> [MongoDB\BSON\Decimal128](class.mongodb-bson-decimal128.md) só é compatível com
> o MongoDB 3.4+. Tentar usar o tipo BSON com uma versão anterior do
> MongoDB resultará em erro.

### Parâmetros

`value` ([string](language.types.string.md))
:   Uma string decimal.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `value` não for uma string decimal válida.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Decimal128::\_\_construct()****

```
<?php

var_dump(new MongoDB\BSON\Decimal128(1234.5678));
var_dump(new MongoDB\BSON\Decimal128(NAN));
var_dump(new MongoDB\BSON\Decimal128(INF));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\BSON\Decimal128)#1 (1) {
  ["dec"]=>
  string(9) "1234.5678"
}
object(MongoDB\BSON\Decimal128)#1 (1) {
  ["dec"]=>
  string(3) "NaN"
}
object(MongoDB\BSON\Decimal128)#1 (1) {
  ["dec"]=>
  string(8) "Infinity"
}
```

### Veja também

- [» Formato em ponto flutuante Decimal128](https://en.wikipedia.org/wiki/Decimal128_floating-point_format)
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
