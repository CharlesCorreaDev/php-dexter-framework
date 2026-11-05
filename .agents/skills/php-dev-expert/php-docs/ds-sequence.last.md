# Retorna o último valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.last.php

---

# Ds\Sequence::last

(PECL ds >= 1.0.0)

Ds\Sequence::last — Retorna o último valor

### Descrição

abstract public function **Ds\Sequence::last**(): [mixed](language.types.mixed.md)

Retorna o último valor na sequência.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O último valor na sequência.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::last()****

```
<?php
$sequence = new \Ds\Vector([1, 2, 3]);
var_dump($sequence->last());
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
