# Retorna o último valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.last.php

---

# Ds\Vector::last

(PECL ds >= 1.0.0)

Ds\Vector::last — Retorna o último valor

### Descrição

public function **Ds\Vector::last**(): [mixed](language.types.mixed.md)

Retorna o último valor no vetor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O último valor no vetor.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::last()****

```
<?php
$vector = new \Ds\Vector([1, 2, 3]);
var_dump($vector->last());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
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
