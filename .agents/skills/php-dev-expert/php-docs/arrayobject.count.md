# Obtém o número de propriedades públicas no ArrayObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.count.php

---

# ArrayObject::count

(PHP 5, PHP 7, PHP 8)

ArrayObject::count — Obtém o número de propriedades públicas no ArrayObject

### Descrição

public function **ArrayObject::count**(): [int](language.types.integer.md)

Obtém o número de propriedades públicas no [ArrayObject](class.arrayobject.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de propriedades públicas no [ArrayObject](class.arrayobject.md).

> **Nota**:
>
> Quando o [ArrayObject](class.arrayobject.md) é construído a partir de um array, todas as propriedades são públicas.

### Examples

**Exemplo #1 Exemplo de **ArrayObject::count()****

```
<?php
class Example {
    public $public = 'prop:public';
    private $prv   = 'prop:private';
    protected $prt = 'prop:protected';
}

$arrayobj = new ArrayObject(new Example());
var_dump($arrayobj->count());

$arrayobj = new ArrayObject(array('first','second','third'));
var_dump($arrayobj->count());
?>
```

O exemplo acima produzirá:

```
int(1)
int(3)
```

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
