# Constrói um novo Regex

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-regex.construct.php

---

# MongoDB\BSON\Regex::\_\_construct

(mongodb >=1.0.0)

MongoDB\BSON\Regex::\_\_construct — Constrói um novo Regex

### Descrição

final public function **MongoDB\BSON\Regex::\_\_construct**([string](language.types.string.md) `$pattern`, [string](language.types.string.md) `$flags` = "")

### Parâmetros

`pattern` ([string](language.types.string.md))
:   A expressão regular.

    > **Nota**:
    >
    > A expressão não deve ser envolvida por caracteres delimitadores.

`flags` ([string](language.types.string.md))
:   As [» opções
    de expressões regulares](https://www.mongodb.com/docs/manual/reference/operator/query/regex/#op._S_options). Caracteres neste argumento serão ordenados
    alfabeticamente.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `pattern` ou `flags` contiverem bytes nulos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.2.0 | O argumento `flags` é opcional e seu padrão é uma string vazia.  Caracteres no argumento `flags` serão ordenados alfabeticamente quando um Regex for construído. Anteriormente, os caracteres seriam armazenados na ordem em que fossem informados.  [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) é lançada se `pattern` ou `flags` contiverem bytes nulos. Anteriormente, valores seriam truncados no primeiro byte nulo. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Regex::\_\_construct()****

```
<?php

$regex = new MongoDB\BSON\Regex('^foo', 'i');
var_dump($regex);

?>
```

O exemplo acima produzirá:

```
object(MongoDB\BSON\Regex)#1 (2) {
  ["pattern"]=>
  string(4) "^foo"
  ["flags"]=>
  string(1) "i"
}
```

### Veja também

- [» Tipos BSON](https://www.mongodb.com/docs/manual/reference/bson-types/)
- [» Opções suportadas para expressões regulares](https://www.mongodb.com/docs/manual/reference/operator/query/regex/#op._S_options)

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
