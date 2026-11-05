# Cria um novo vetor usando um callable para
    determinar quais valores incluir.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.filter.php

---

# Ds\Vector::filter

(PECL ds >= 1.0.0)

Ds\Vector::filter — 
Cria um novo vetor usando um [callable](language.types.callable.md) para
determinar quais valores incluir.

### Descrição

public function **Ds\Vector::filter**([callable](language.types.callable.md) `$callback` = ?): [Ds\Vector](class.ds-vector.md)

Cria um novo vetor usando um [callable](language.types.callable.md) para
determinar quais valores incluir.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

    [callable](language.types.callable.md) opcional que retorna **`true`** se o valor deve ser incluído, **`false`** caso contrário.

    Se um callback não for fornecido, apenas valores que são **`true`**
    (veja [conversão para booleano](language.types.boolean.md#language.types.boolean.casting))
    serão incluídos.

### Valor Retornado

Um novo vetor contendo todos os valores para os quais
ou o `callback` retornou **`true`**, ou todos os valores que
convertem para **`true`** se um `callback` não foi fornecido.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::filter()** usando uma função de callback**

```
<?php
$vector = new \Ds\Vector([1, 2, 3, 4, 5]);

var_dump($vector->filter(function($value) {
    return $value % 2 == 0;
}));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Vector)#3 (2) {
  [0]=>
  int(2)
  [1]=>
  int(4)
}
```

**Exemplo #2 Exemplo de **Ds\Vector::filter()** sem usar uma função de callback**

```
<?php
$vector = new \Ds\Vector([0, 1, 'a', true, false]);

var_dump($vector->filter());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Vector)#2 (3) {
  [0]=>
  int(1)
  [1]=>
  string(1) "a"
  [2]=>
  bool(true)
}
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
