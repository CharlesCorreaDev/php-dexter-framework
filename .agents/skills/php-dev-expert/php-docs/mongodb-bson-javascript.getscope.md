# Retorna o documento de escopo do Javascript

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-javascript.getscope.php

---

# MongoDB\BSON\Javascript::getScope

(mongodb >=1.2.0)

MongoDB\BSON\Javascript::getScope — Retorna o documento de escopo do Javascript

### Descrição

final public function **MongoDB\BSON\Javascript::getScope**(): [?](language.types.null.md)[object](language.types.object.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o documento de escopo do Javascript ou **`null`** se não houver escopo.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Javascript::getScope()****

```
<?php

$js = new MongoDB\BSON\Javascript('function foo(bar) { return bar; }');
var_dump($js->getScope());

$js = new MongoDB\BSON\Javascript('function foo() { return foo; }', ['foo' => 42]);
var_dump($js->getScope());

?>
```

O exemplo acima produzirá:

```
NULL
object(stdClass)#1 (1) {
  ["foo"]=>
  int(42)
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
