# Retorna o valor em um índice específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.get.php

---

# Ds\Deque::get

(PECL ds >= 1.0.0)

Ds\Deque::get — Retorna o valor em um índice específico

### Descrição

public function **Ds\Deque::get**([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

Retorna o valor em um índice específico.

### Parâmetros

`index`
:   O índice a ser acessado, começando em 0.

### Valor Retornado

O valor no índice solicitado.

### Erros/Exceções

[OutOfRangeException](class.outofrangeexception.md) se o índice não for válido.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::get()****

```
<?php
$deque = new \Ds\Deque(["a", "b", "c"]);

var_dump($deque->get(0));
var_dump($deque->get(1));
var_dump($deque->get(2));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "a"
string(1) "b"
string(1) "c"
```

**Exemplo #2 Exemplo de **Ds\Deque::get()** usando a sintaxe de array**

```
<?php
$deque = new \Ds\Deque(["a", "b", "c"]);

var_dump($deque[0]);
var_dump($deque[1]);
var_dump($deque[2]);
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
