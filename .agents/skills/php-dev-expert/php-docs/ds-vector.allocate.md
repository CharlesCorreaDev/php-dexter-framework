# Aloca memória suficiente para uma capacidade requerida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.allocate.php

---

# Ds\Vector::allocate

(PECL ds >= 1.0.0)

Ds\Vector::allocate — Aloca memória suficiente para uma capacidade requerida

### Descrição

public function **Ds\Vector::allocate**([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

Garante que memória suficiente seja alocada para uma capacidade requerida.
Isso evita a necessidade de realocar o buffer interno à medida que os valores são adicionados.

### Parâmetros

`capacity`
:   O número de valores para os quais a capacidade deve ser alocada.

    > **Nota**:
    >
    > A capacidade permanecerá a mesma se esse valor for menor ou igual à
    > capacidade atual.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::allocate()****

```
<?php
$vector = new \Ds\Vector();
var_dump($vector->capacity());

$vector->allocate(100);
var_dump($vector->capacity());
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
