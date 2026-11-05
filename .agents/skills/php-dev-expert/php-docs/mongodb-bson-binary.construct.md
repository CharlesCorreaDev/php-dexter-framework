# Constrói um novo Binary

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-binary.construct.php

---

# MongoDB\BSON\Binary::\_\_construct

(mongodb >=1.0.0)

MongoDB\BSON\Binary::\_\_construct — Constrói um novo Binary

### Descrição

final public function **MongoDB\BSON\Binary::\_\_construct**([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$type` = MongoDB\BSON\Binary::TYPE\_GENERIC)

### Parâmetros

`data` ([string](language.types.string.md))
:   Dados binários.

`type` ([int](language.types.integer.md))
:   Inteiro de 8 bits sem sinal denotando o tipo de dados. O padrão é **`MongoDB\BSON\Binary::TYPE_GENERIC`** se não especificado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `type` não for um inteiro de 8 bits sem sinal.
- Lança [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `type` for **`MongoDB\BSON\Binary::TYPE_UUID`** ou **`MongoDB\BSON\Binary::TYPE_OLD_UUID`** e `data` não tiver exatamente 16 bytes.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.15.0 | O padrão para o parâmetro `type` é **`MongoDB\BSON\Binary::TYPE_GENERIC`** se não for especificado. |
| PECL mongodb 1.3.0 | [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) é lançada se `type` for **`MongoDB\BSON\Binary::TYPE_UUID`** ou **`MongoDB\BSON\Binary::TYPE_OLD_UUID`** e `data` não tiver exatamente 16 bytes. |
| PECL mongodb 1.1.3 | [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) é lançada se `type` não for um inteiro de 8 bits sem sinal. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Binary::\_\_construct()****

```
<?php

$binary = new MongoDB\BSON\Binary('foo', MongoDB\BSON\Binary::TYPE_GENERIC);
var_dump($binary);

?>
```

O exemplo acima produzirá:

```
object(MongoDB\BSON\Binary)#1 (2) {
  ["data"]=>
  string(3) "foo"
  ["type"]=>
  int(0)
}
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
