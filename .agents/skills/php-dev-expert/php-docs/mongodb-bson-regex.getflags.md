# Retorna as opções de Regex

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-regex.getflags.php

---

# MongoDB\BSON\Regex::getFlags

(mongodb >=1.0.0)

MongoDB\BSON\Regex::getFlags — Retorna as opções de Regex

### Descrição

final public function **MongoDB\BSON\Regex::getFlags**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna as opções de Regex.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Regex::getFlags()****

```
<?php

$regex = new MongoDB\BSON\Regex('regex', 'i');
var_dump($regex->getFlags());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "i"
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
