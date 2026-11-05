# Remove o valor no índice especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.offsetunset.php

---

# ArrayObject::offsetUnset

(PHP 5, PHP 7, PHP 8)

ArrayObject::offsetUnset — Remove o valor no índice especificado

### Descrição

public function **ArrayObject::offsetUnset**([mixed](language.types.mixed.md) `$key`): [void](language.types.void.md)

Remove o valor no índice especificado.

### Parâmetros

`key`
:   O índice sendo removido.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ArrayObject::offsetUnset()****

```
<?php
$arrayobj = new ArrayObject(array(0=>'zero',2=>'two'));
$arrayobj->offsetUnset(2);
var_dump($arrayobj);
?>
```

O exemplo acima produzirá:

```
object(ArrayObject)#1 (1) {
  ["storage":"ArrayObject":private]=>
  array(1) {
    [0]=>
    string(4) "zero"
  }
}
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
