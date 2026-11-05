# Remove e retorna o primeiro valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.shift.php

---

# Ds\Deque::shift

(PECL ds >= 1.0.0)

Ds\Deque::shift — Remove e retorna o primeiro valor

### Descrição

public function **Ds\Deque::shift**(): [mixed](language.types.mixed.md)

Remove e retorna o primeiro valor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O primeiro valor, que foi removido.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::shift()****

```
<?php
$deque = new \Ds\Deque(["a", "b", "c"]);

var_dump($deque->shift());
var_dump($deque->shift());
var_dump($deque->shift());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "a"
string(1) "b"
string(1) "c"
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
