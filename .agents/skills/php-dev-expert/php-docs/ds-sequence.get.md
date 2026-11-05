# Retorna o valor em um índice específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.get.php

---

# Ds\Sequence::get

(PECL ds >= 1.0.0)

Ds\Sequence::get — Retorna o valor em um índice específico

### Descrição

abstract public function **Ds\Sequence::get**([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

Retorna o valor em um índice específico.

### Parâmetros

`index`
:   O índice a ser acessado, começando em 0.

### Valor Retornado

O valor no índice solicitado.

### Erros/Exceções

[OutOfRangeException](class.outofrangeexception.md) se o índice não for válido.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::get()****

```
<?php
$sequence = new \Ds\Vector(["a", "b", "c"]);

var_dump($sequence->get(0));
var_dump($sequence->get(1));
var_dump($sequence->get(2));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "a"
string(1) "b"
string(1) "c"
```

**Exemplo #2 Exemplo de **Ds\Sequence::get()** usando a sintaxe de array**

```
<?php
$sequence = new \Ds\Vector(["a", "b", "c"]);

var_dump($sequence[0]);
var_dump($sequence[1]);
var_dump($sequence[2]);
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
