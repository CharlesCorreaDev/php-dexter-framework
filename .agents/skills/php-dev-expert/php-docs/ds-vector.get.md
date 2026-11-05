# Retorna o valor em um índice específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.get.php

---

# Ds\Vector::get

(PECL ds >= 1.0.0)

Ds\Vector::get — Retorna o valor em um índice específico

### Descrição

public function **Ds\Vector::get**([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

Retorna o valor em um índice específico.

### Parâmetros

`index`
:   O índice a ser acessado, começando em 0.

### Valor Retornado

O valor no índice solicitado.

### Erros/Exceções

[OutOfRangeException](class.outofrangeexception.md) se o índice não for válido.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::get()****

```
<?php
$vector = new \Ds\Vector(["a", "b", "c"]);

var_dump($vector->get(0));
var_dump($vector->get(1));
var_dump($vector->get(2));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "a"
string(1) "b"
string(1) "c"
```

**Exemplo #2 Exemplo de **Ds\Vector::get()** usando a sintaxe de array**

```
<?php
$vector = new \Ds\Vector(["a", "b", "c"]);

var_dump($vector[0]);
var_dump($vector[1]);
var_dump($vector[2]);
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
