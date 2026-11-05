# Atualiza um valor em um índice específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.set.php

---

# Ds\Deque::set

(PECL ds >= 1.0.0)

Ds\Deque::set — Atualiza um valor em um índice específico

### Descrição

public function **Ds\Deque::set**([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Atualiza um valor em um índice específico.

### Parâmetros

`index`
:   O índice do valor a ser atualizado.

`value`
:   O novo valor.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

[OutOfRangeException](class.outofrangeexception.md) se o índice não for válido.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::set()****

```
<?php
$deque = new \Ds\Deque(["a", "b", "c"]);

$deque->set(1, "_");
print_r($deque);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Deque Object
(
    [0] => a
    [1] => _
    [2] => c
)
```

**Exemplo #2 Exemplo de **Ds\Deque::set()** usando a sintaxe de array**

```
<?php
$deque = new \Ds\Deque(["a", "b", "c"]);

$deque[1] = "_";
print_r($deque);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Deque Object
(
    [0] => a
    [1] => _
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
