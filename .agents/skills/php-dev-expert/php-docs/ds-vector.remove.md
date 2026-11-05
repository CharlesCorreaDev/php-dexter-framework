# Remove e retorna um valor pelo índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.remove.php

---

# Ds\Vector::remove

(PECL ds >= 1.0.0)

Ds\Vector::remove — Remove e retorna um valor pelo índice

### Descrição

public function **Ds\Vector::remove**([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

Remove e retorna um valor pelo índice.

### Parâmetros

`index`
:   O índice do valor a ser removido.

### Valor Retornado

O valor que foi removido.

### Erros/Exceções

[OutOfRangeException](class.outofrangeexception.md) se o índice não for válido.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::remove()****

```
<?php
$vector = new \Ds\Vector(["a", "b", "c"]);

var_dump($vector->remove(1));
var_dump($vector->remove(0));
var_dump($vector->remove(0));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "b"
string(1) "a"
string(1) "c"
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
