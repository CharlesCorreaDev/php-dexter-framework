# Anexa o valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.append.php

---

# ArrayObject::append

(PHP 5, PHP 7, PHP 8)

ArrayObject::append — Anexa o valor

### Descrição

public function **ArrayObject::append**([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Anexa um novo valor como o último elemento.

> **Nota**:
>
> Este método não pode ser chamado quando o [ArrayObject](class.arrayobject.md)
> foi construído a partir de um objeto.
> Use [ArrayObject::offsetSet()](arrayobject.offsetset.md) em vez disso.

### Parâmetros

`value`
:   O valor sendo anexado.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ArrayObject::append()****

```
<?php
$arrayobj = new ArrayObject(array('first','second','third'));
$arrayobj->append('fourth');
$arrayobj->append(array('five', 'six'));
var_dump($arrayobj);
?>
```

O exemplo acima produzirá:

```
object(ArrayObject)#1 (1) {
  ["storage":"ArrayObject":private]=>
  array(5) {
    [0]=>
    string(5) "first"
    [1]=>
    string(6) "second"
    [2]=>
    string(5) "third"
    [3]=>
    string(6) "fourth"
    [4]=>
    array(2) {
      [0]=>
      string(4) "five"
      [1]=>
      string(3) "six"
    }
  }
}
```

### Veja também

- [ArrayObject::offsetSet()](arrayobject.offsetset.md) - Define o valor no índice especificado para novo valor

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
