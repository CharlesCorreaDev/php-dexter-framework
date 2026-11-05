# Retorna o primeiro valor na sequência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.first.php

---

# Ds\Sequence::first

(PECL ds >= 1.0.0)

Ds\Sequence::first — Retorna o primeiro valor na sequência

### Descrição

abstract public function **Ds\Sequence::first**(): [mixed](language.types.mixed.md)

Retorna o primeiro valor na sequência.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O primeiro valor na sequência.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::first()****

```
<?php
$sequence = new \Ds\Vector([1, 2, 3]);
var_dump($sequence->first());
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
