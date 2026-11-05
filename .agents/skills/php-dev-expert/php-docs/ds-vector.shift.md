# Remove e retorna o primeiro valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.shift.php

---

# Ds\Vector::shift

(PECL ds >= 1.0.0)

Ds\Vector::shift — Remove e retorna o primeiro valor

### Descrição

public function **Ds\Vector::shift**(): [mixed](language.types.mixed.md)

Remove e retorna o primeiro valor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O primeiro valor, que foi removido.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::shift()****

```
<?php
$vector = new \Ds\Vector(["a", "b", "c"]);

var_dump($vector->shift());
var_dump($vector->shift());
var_dump($vector->shift());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "a"
string(1) "b"
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
