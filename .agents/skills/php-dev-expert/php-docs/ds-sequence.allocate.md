# Aloca memória suficiente para uma capacidade requerida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.allocate.php

---

# Ds\Sequence::allocate

(PECL ds >= 1.0.0)

Ds\Sequence::allocate — Aloca memória suficiente para uma capacidade requerida

### Descrição

abstract public function **Ds\Sequence::allocate**([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

Garante que memória suficiente seja alocada para uma capacidade necessária.
Isso remove a necessidade de realocar o buffer interno conforme os valores são adicionados.

### Parâmetros

`capacity`
:   O número de valores para os quais a capacidade deve ser alocada.

    > **Nota**:
    >
    > A capacidade permanecerá a mesma se este valor for menor ou igual à
    > capacidade atual.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::allocate()****

```
<?php
$sequence = new \Ds\Vector();
var_dump($sequence->capacity());

$vector->allocate(100);
var_dump($sequence->capacity());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(10)
int(100)
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
