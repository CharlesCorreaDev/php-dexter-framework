# Retorna o código do Javascript

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-javascript.tostring.php

---

# MongoDB\BSON\Javascript::\_\_toString

(mongodb >=1.2.0)

MongoDB\BSON\Javascript::\_\_toString — Retorna o código do Javascript

### Descrição

final public function **MongoDB\BSON\Javascript::\_\_toString**(): [string](language.types.string.md)

Este método é um apelido para: [MongoDB\BSON\Javascript::getCode()](mongodb-bson-javascript.getcode.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o código do Javascript.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Javascript::\_\_toString()****

```
<?php

var_dump((string) new MongoDB\BSON\Javascript('function foo(bar) { return bar; }'));

?>
```

O exemplo acima produzirá:

```
string(33) "function foo(bar) { return bar; }"
```

### Veja também

- [MongoDB\BSON\Javascript::getCode()](mongodb-bson-javascript.getcode.md) - Retorna o código do Javascript
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
