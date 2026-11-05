# Retorna o último valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.last.php

---

# Ds\Deque::last

(PECL ds >= 1.0.0)

Ds\Deque::last — Retorna o último valor

### Descrição

public function **Ds\Deque::last**(): [mixed](language.types.mixed.md)

Retorna o último valor na deque.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O último valor na deque.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::last()****

```
<?php
$deque = new \Ds\Deque([1, 2, 3]);
var_dump($deque->last());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(3)
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
