# Retorna o código do Javascript

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-javascript.getcode.php

---

# MongoDB\BSON\Javascript::getCode

(mongodb >=1.2.0)

MongoDB\BSON\Javascript::getCode — Retorna o código do Javascript

### Descrição

final public function **MongoDB\BSON\Javascript::getCode**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o código do Javascript.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Javascript::getCode()****

```
<?php

$js = new MongoDB\BSON\Javascript('function foo(bar) { return bar; }');
var_dump($js->getCode());

?>
```

O exemplo acima produzirá:

```
string(33) "function foo(bar) { return bar; }"
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
