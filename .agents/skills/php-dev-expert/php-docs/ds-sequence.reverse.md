# Inverte a sequência no local

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.reverse.php

---

# Ds\Sequence::reverse

(PECL ds >= 1.0.0)

Ds\Sequence::reverse — 
Inverte a sequência no local

### Descrição

abstract public function **Ds\Sequence::reverse**(): [void](language.types.void.md)

Inverte a sequência no local.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::reverse()****

```
<?php
$sequence = new \Ds\Vector(["a", "b", "c"]);
$sequence->reverse();

print_r($sequence);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
(
    [0] => c
    [1] => b
    [2] => a
)
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
