# Adiciona valores ao final do deque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.push.php

---

# Ds\Deque::push

(PECL ds >= 1.0.0)

Ds\Deque::push — Adiciona valores ao final do deque

### Descrição

public function **Ds\Deque::push**([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

Adiciona valores ao final do deque.

### Parâmetros

`values`
:   Os valores a serem adicionados.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::push()****

```
<?php
$deque = new \Ds\Deque();

$deque->push("a");
$deque->push("b");
$deque->push("c", "d");
$deque->push(...["e", "f"]);

print_r($deque);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Deque Object
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
