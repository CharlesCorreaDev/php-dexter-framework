# Tenta encontrar o índice de um valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.find.php

---

# Ds\Deque::find

(PECL ds >= 1.0.0)

Ds\Deque::find — 
Tenta encontrar o índice de um valor

### Descrição

public function **Ds\Deque::find**([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

Retorna o índice do `value`, ou **`false`** se não for encontrado.

### Parâmetros

`value`
:   O valor a ser encontrado.

### Valor Retornado

O índice do valor, ou **`false`** se não for encontrado.

> **Nota**:
>
> Os valores serão comparados por valor e por tipo.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::find()****

```
<?php
$deque = new \Ds\Deque(["a", 1, true]);

var_dump($deque->find("a")); // 0
var_dump($deque->find("b")); // false
var_dump($deque->find("1")); // false
var_dump($deque->find(1));   // 1
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(0)
bool(false)
bool(false)
int(1)
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
