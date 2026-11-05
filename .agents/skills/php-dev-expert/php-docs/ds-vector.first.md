# Retorna o primeiro valor no vetor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.first.php

---

# Ds\Vector::first

(PECL ds >= 1.0.0)

Ds\Vector::first — Retorna o primeiro valor no vetor

### Descrição

public function **Ds\Vector::first**(): [mixed](language.types.mixed.md)

Retorna o primeiro valor no vetor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O primeiro valor no vetor.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::first()****

```
<?php
$vector = new \Ds\Vector([1, 2, 3]);
var_dump($vector->first());
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
