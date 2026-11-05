# Retorna o primeiro valor na deque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.first.php

---

# Ds\Deque::first

(PECL ds >= 1.0.0)

Ds\Deque::first — Retorna o primeiro valor na deque

### Descrição

public function **Ds\Deque::first**(): [mixed](language.types.mixed.md)

Retorna o primeiro valor na deque.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O primeiro valor na deque.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se estiver vazia.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::first()****

```
<?php
$deque = new \Ds\Deque([1, 2, 3]);
var_dump($deque->first());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
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
