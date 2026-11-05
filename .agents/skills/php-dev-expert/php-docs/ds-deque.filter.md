# Cria um novo deque usando um callable para
   determinar quais valores incluir

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.filter.php

---

# Ds\Deque::filter

(PECL ds >= 1.0.0)

Ds\Deque::filter — 
Cria um novo deque usando um [callable](language.types.callable.md) para
determinar quais valores incluir

### Descrição

public function **Ds\Deque::filter**([callable](language.types.callable.md) `$callback` = ?): [Ds\Deque](class.ds-deque.md)

Cria um novo deque usando um [callable](language.types.callable.md) para
determinar quais valores incluir.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

    [callable](language.types.callable.md) opcional que retorna **`true`** se o valor deve ser incluído, **`false`** caso contrário.

    Se um callback não for fornecido, apenas valores que são **`true`**
    (veja [conversão para booleano](language.types.boolean.md#language.types.boolean.casting))
    serão incluídos.

### Valor Retornado

Um novo deque contendo todos os valores para os quais
o `callback` retornou **`true`**, ou todos os valores que
se convertem em **`true`** se um `callback` não foi fornecido.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::filter()** usando função callback**

```
<?php
$deque = new \Ds\Deque([1, 2, 3, 4, 5]);

var_dump($deque->filter(function($value) {
    return $value % 2 == 0;
}));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Deque)#3 (2) {
  [0]=>
  int(2)
  [1]=>
  int(4)
}
```

**Exemplo #2 Exemplo de **Ds\Deque::filter()** sem função callback**

```
<?php
$deque = new \Ds\Deque([0, 1, 'a', true, false]);

var_dump($deque->filter());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Deque)#2 (3) {
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
