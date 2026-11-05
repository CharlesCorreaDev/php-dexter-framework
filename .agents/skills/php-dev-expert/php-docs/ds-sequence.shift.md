# Remove e retorna o primeiro valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.shift.php

---

# Ds\Sequence::shift

(PECL ds >= 1.0.0)

Ds\Sequence::shift — Remove e retorna o primeiro valor

### Descrição

abstract public function **Ds\Sequence::shift**(): [mixed](language.types.mixed.md)

Remove e retorna o primeiro valor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O primeiro valor, que foi removido.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::shift()****

```
<?php
$sequence = new \Ds\Vector(["a", "b", "c"]);

var_dump($sequence->shift());
var_dump($sequence->shift());
var_dump($sequence->shift());
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
