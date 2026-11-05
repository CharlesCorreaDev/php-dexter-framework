# Cria um novo conjunto usando um callable para
    determinar quais valores incluir

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.filter.php

---

# Ds\Set::filter

(PECL ds >= 1.0.0)

Ds\Set::filter — 
Cria um novo conjunto usando um [callable](language.types.callable.md) para
determinar quais valores incluir

### Descrição

public function **Ds\Set::filter**([callable](language.types.callable.md) `$callback` = ?): [Ds\Set](class.ds-set.md)

Cria um novo conjunto usando um [callable](language.types.callable.md) para
determinar quais valores incluir.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

    [callable](language.types.callable.md) opcional que retorna **`true`** se o valor deve ser incluído, **`false`** caso contrário.

    Se um callback não for fornecido, somente os valores que são **`true`**
    (veja [conversão para booleano](language.types.boolean.md#language.types.boolean.casting))
    serão incluídos.

### Valor Retornado

Um novo conjunto contendo todos os valores para os quais
o `callback` retornou **`true`**, ou todos os valores que
convertem para **`true`** se um `callback` não foi fornecido.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::filter()** usando função de callback**

```
<?php
$set = new \Ds\Set([1, 2, 3, 4, 5]);

var_dump($set->filter(function($value) {
    return $value % 2 == 0;
}));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#3 (2) {
  [0]=>
  int(2)
  [1]=>
  int(4)
}
```

**Exemplo #2 Exemplo de **Ds\Set::filter()** sem usar função de callback**

```
<?php
$set = new \Ds\Set([0, 1, 'a', true, false]);

var_dump($set->filter());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#2 (3) {
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
