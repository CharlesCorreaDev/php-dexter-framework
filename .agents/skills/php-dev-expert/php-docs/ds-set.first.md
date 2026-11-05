# Retorna o primeiro valor no conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.first.php

---

# Ds\Set::first

(PECL ds >= 1.0.0)

Ds\Set::first — Retorna o primeiro valor no conjunto

### Descrição

public function **Ds\Set::first**(): [mixed](language.types.mixed.md)

Retorna o primeiro valor no conjunto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O primeiro valor no conjunto.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::first()****

```
<?php
$set = new \Ds\Set([1, 2, 3]);
var_dump($set->first());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(1)
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
