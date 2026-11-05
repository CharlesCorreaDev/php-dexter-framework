# Alloca memória suficiente para uma capacidade necessária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.allocate.php

---

# Ds\Deque::allocate

(PECL ds >= 1.0.0)

Ds\Deque::allocate — Alloca memória suficiente para uma capacidade necessária

### Descrição

public function **Ds\Deque::allocate**([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

Garante que memória suficiente seja alocada para uma capacidade necessária.
Isso elimina a necessidade de realocar o buffer interno conforme os valores são adicionados.

### Parâmetros

`capacity`
:   O número de valores para os quais a capacidade deve ser alocada.

    > **Nota**:
    >
    > A capacidade permanecerá a mesma se esse valor for menor ou igual à
    > capacidade atual.

    > **Nota**:
    >
    > A capacidade será sempre arredondada para cima para a potência de 2 mais próxima.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::allocate()****

```
<?php
$deque = new \Ds\Deque();
var_dump($deque->capacity());

$deque->allocate(100);
var_dump($deque->capacity());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(8)
int(128)
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
