# Define o valor no índice especificado para novo valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.offsetset.php

---

# ArrayObject::offsetSet

(PHP 5, PHP 7, PHP 8)

ArrayObject::offsetSet — Define o valor no índice especificado para novo valor

### Descrição

public function **ArrayObject::offsetSet**([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Define o valor no índice especificado para novo valor.

### Parâmetros

`key`
:   O índice sendo definido.

`value`
:   O novo valor para o `key`.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ArrayObject::offsetSet()****

```
<?php
class Example {
    public $property = 'prop:public';
}
$arrayobj = new ArrayObject(new Example());
$arrayobj->offsetSet(4, 'four');
$arrayobj->offsetSet('group', array('g1', 'g2'));
var_dump($arrayobj);

$arrayobj = new ArrayObject(array('zero','one'));
$arrayobj->offsetSet(null, 'last');
var_dump($arrayobj);
?>
```

O exemplo acima produzirá:

```
object(ArrayObject)#1 (1) {
  ["storage":"ArrayObject":private]=>
  object(Example)#2 (3) {
    ["property"]=>
    string(11) "prop:public"
    ["4"]=>
    string(4) "four"
    ["group"]=>
    array(2) {
      [0]=>
      string(2) "g1"
      [1]=>
      string(2) "g2"
    }
  }
}
object(ArrayObject)#3 (1) {
  ["storage":"ArrayObject":private]=>
  array(3) {
    [0]=>
    string(4) "zero"
    [1]=>
    string(3) "one"
    [2]=>
    string(4) "last"
  }
}
```

### Veja também

- [ArrayObject::append()](arrayobject.append.md) - Anexa o valor

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
