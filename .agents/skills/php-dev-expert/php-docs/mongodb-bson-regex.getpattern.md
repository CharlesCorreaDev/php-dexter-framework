# Retorna a expressão regular de Regex

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-regex.getpattern.php

---

# MongoDB\BSON\Regex::getPattern

(mongodb >=1.0.0)

MongoDB\BSON\Regex::getPattern — Retorna a expressão regular de Regex

### Descrição

final public function **MongoDB\BSON\Regex::getPattern**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a expressão regular de Regex.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Regex::getPattern()****

```
<?php

$regex = new MongoDB\BSON\Regex('regex', 'i');
var_dump($regex->getPattern());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(5) "regex"
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
