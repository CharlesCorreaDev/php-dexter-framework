# Constrói um novo UTCDateTime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-utcdatetime.construct.php

---

# MongoDB\BSON\UTCDateTime::\_\_construct

(mongodb >=1.0.0)

MongoDB\BSON\UTCDateTime::\_\_construct — Constrói um novo UTCDateTime

### Descrição

final public function **MongoDB\BSON\UTCDateTime::\_\_construct**([int](language.types.integer.md)|[MongoDB\BSON\Int64](class.mongodb-bson-int64.md)|[DateTimeInterface](class.datetimeinterface.md)|[null](language.types.null.md) `$milliseconds` = **`null`**)

### Parâmetros

`milliseconds` ([int](language.types.integer.md)|[MongoDB\BSON\Int64](class.mongodb-bson-int64.md)|[DateTimeInterface](class.datetimeinterface.md)|[null](language.types.null.md))
:   Número de milissegundos desde a época Unix (1º de janeiro de 1970). Valores negativos
    representam datas anteriores a 1970. Este valor pode ser fornecido como um
    [int](language.types.integer.md) de 64 bits. Para compatibilidade com sistemas de 32 bits, este parâmetro
    também pode ser fornecido como um [MongoDB\BSON\Int64](class.mongodb-bson-int64.md).

    Se o argumento for um [DateTimeInterface](class.datetimeinterface.md), o número de
    milissegundos desde a época Unix será derivado desse valor.

    Se este argumento for **`null`**, o horário atual será usado por padrão.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | O parâmetro `milliseconds` não aceita mais um argumento [string](language.types.string.md) ou [float](language.types.float.md). |
| PECL mongodb 1.20.0 | O parâmetro `milliseconds` agora aceita um objeto [MongoDB\BSON\Int64](class.mongodb-bson-int64.md) (para compatibilidade com plataformas de 32 bits). Especificar um [string](language.types.string.md) ou um [float](language.types.float.md) foi descontinuado. |
| PECL mongodb 1.2.0 | O argumento `milliseconds` é opcional e o padrão é **`null`** (ou seja, horário atual). O argumento também aceita um [DateTimeInterface](class.datetimeinterface.md), que pode ser usado para derivar o número de milissegundos desde a época Unix. Anteriormente, apenas os tipos [int](language.types.integer.md), [float](language.types.float.md) e [string](language.types.string.md) eram aceitos. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\UTCDateTime::\_\_construct()****

```
<?php

var_dump(new MongoDB\BSON\UTCDateTime);

var_dump(new MongoDB\BSON\UTCDateTime(new DateTime));

var_dump(new MongoDB\BSON\UTCDateTime(1416445411987));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\BSON\UTCDateTime)#1 (1) {
  ["milliseconds"]=>
  string(13) "1484852905560"
}
object(MongoDB\BSON\UTCDateTime)#1 (1) {
  ["milliseconds"]=>
  string(13) "1484852905560"
}
object(MongoDB\BSON\UTCDateTime)#1 (1) {
  ["milliseconds"]=>
  string(13) "1416445411987"
}
```

### Veja também

- [» Tipos BSON: Data](https://www.mongodb.com/docs/manual/reference/bson-types/#date)

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
