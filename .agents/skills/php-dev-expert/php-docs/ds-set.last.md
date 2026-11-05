# Retorna o último valor no conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.last.php

---

# Ds\Set::last

(PECL ds >= 1.0.0)

Ds\Set::last — Retorna o último valor no conjunto

### Descrição

public function **Ds\Set::last**(): [mixed](language.types.mixed.md)

Retorna o último valor no conjunto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O último valor no conjunto.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::last()****

```
<?php
$set = new \Ds\Set([1, 2, 3]);
var_dump($set->last());
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
