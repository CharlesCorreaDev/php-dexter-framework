# Retorna uma cópia reversa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.reversed.php

---

# Ds\Sequence::reversed

(PECL ds >= 1.0.0)

Ds\Sequence::reversed — Retorna uma cópia reversa

### Descrição

abstract public function **Ds\Sequence::reversed**(): [Ds\Sequence](class.ds-sequence.md)

Retorna uma cópia reversa da sequência.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma cópia reversa da sequência.
> **Nota**:
>
> A instância atual não é afetada.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::reversed()****

```
<?php
$sequence = new \Ds\Vector(["a", "b", "c"]);

print_r($sequence->reversed());
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
Ds\Vector Object
(
    [0] => a
    [1] => b
    [2] => c
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
