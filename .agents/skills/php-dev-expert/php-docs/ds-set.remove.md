# Remove todos os valores dados do conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.remove.php

---

# Ds\Set::remove

(PECL ds >= 1.0.0)

Ds\Set::remove — Remove todos os valores dados do conjunto

### Descrição

public function **Ds\Set::remove**([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

Remove todos os `values` dados do conjunto, ignorando aqueles que não estão no conjunto.

### Parâmetros

`values`
:   Os valores a serem removidos.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::remove()****

```
<?php
$set = new \Ds\Set([1, 2, 3, 4, 5]);

$set->remove(1);            // Remove 1
$set->remove(1, 2);         // Não encontra 1, mas remove 2
$set->remove(...[3, 4]);    // Remove 3 e 4

var_dump($set);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#1 (1) {
  [0]=>
  int(5)
}
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
