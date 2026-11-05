# Remove e retorna o último valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.pop.php

---

# Ds\Deque::pop

(PECL ds >= 1.0.0)

Ds\Deque::pop — Remove e retorna o último valor

### Descrição

public function **Ds\Deque::pop**(): [mixed](language.types.mixed.md)

Remove e retorna o último valor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O último valor removido.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::pop()****

```
<?php
$deque = new \Ds\Deque([1, 2, 3]);

var_dump($deque->pop());
var_dump($deque->pop());
var_dump($deque->pop());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(3)
int(2)
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
