# Retorna a representação em string deste Decimal128

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-decimal128.tostring.php

---

# MongoDB\BSON\Decimal128::\_\_toString

(mongodb >=1.2.0)

MongoDB\BSON\Decimal128::\_\_toString — Retorna a representação em string deste Decimal128

### Descrição

final public function **MongoDB\BSON\Decimal128::\_\_toString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em string deste Decimal128.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Decimal128::\_\_toString()****

```
<?php

var_dump((string) new MongoDB\BSON\Decimal128(1234.5678));
var_dump((string) new MongoDB\BSON\Decimal128(NAN));
var_dump((string) new MongoDB\BSON\Decimal128(INF));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(9) "1234.5678"
string(3) "NaN"
string(8) "Infinity"
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
