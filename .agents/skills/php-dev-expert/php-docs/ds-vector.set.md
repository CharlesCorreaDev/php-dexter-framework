# tualiza um valor em um índice específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.set.php

---

# Ds\Vector::set

(PECL ds >= 1.0.0)

Ds\Vector::set — tualiza um valor em um índice específico

### Descrição

public function **Ds\Vector::set**([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

tualiza um valor em um índice específico.

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

**Exemplo #1 Exemplo de **Ds\Vector::set()****

```
<?php
$vector = new \Ds\Vector(["a", "b", "c"]);

$vector->set(1, "_");
print_r($vector);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
(
    [0] => a
    [1] => _
    [2] => c
)
```

**Exemplo #2 Exemplo de **Ds\Vector::set()** usando a sintaxe de array**

```
<?php
$vector = new \Ds\Vector(["a", "b", "c"]);

$vector[1] = "_";
print_r($vector);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
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
