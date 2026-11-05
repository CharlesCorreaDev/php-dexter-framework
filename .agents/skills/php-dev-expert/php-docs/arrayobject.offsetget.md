# Retorna o valor no índice especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.offsetget.php

---

# ArrayObject::offsetGet

(PHP 5, PHP 7, PHP 8)

ArrayObject::offsetGet — Retorna o valor no índice especificado

### Descrição

public function **ArrayObject::offsetGet**([mixed](language.types.mixed.md) `$key`): [mixed](language.types.mixed.md)

### Parâmetros

`key`
:   O índice com o valor.

### Valor Retornado

O valor no índice especificado ou **`null`**.

### Erros/Exceções

Produz uma mensagem de erro **`E_NOTICE`** quando o índice especificado
não existe.

### Examples

**Exemplo #1 Exemplo de **ArrayObject::offsetGet()****

```
<?php
$arrayobj = new ArrayObject(array('zero', 7, 'example'=>'e.g.'));
var_dump($arrayobj->offsetGet(1));
var_dump($arrayobj->offsetGet('example'));
var_dump($arrayobj->offsetExists('notfound'));
?>
```

O exemplo acima produzirá:

```
int(7)
string(4) "e.g."
bool(false)
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
