# Adiciona valores ao final do vetor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.push.php

---

# Ds\Vector::push

(PECL ds >= 1.0.0)

Ds\Vector::push — Adiciona valores ao final do vetor

### Descrição

public function **Ds\Vector::push**([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

Adiciona valores ao final do vetor.

### Parâmetros

`values`
:   Os valores a serem adicionado.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::push()****

```
<?php
$vector = new \Ds\Vector();

$vector->push("a");
$vector->push("b");
$vector->push("c", "d");
$vector->push(...["e", "f"]);

print_r($vector);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
(
    [0] => a
    [1] => b
    [2] => c
    [3] => d
    [4] => e
    [5] => f
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
