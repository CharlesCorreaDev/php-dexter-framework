# Constrói um novo MultipleIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/multipleiterator.construct.php

---

# MultipleIterator::\_\_construct

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

MultipleIterator::\_\_construct — Constrói um novo MultipleIterator

### Descrição

public function **MultipleIterator::\_\_construct**([int](language.types.integer.md) `$flags` = MultipleIterator::MIT\_NEED\_ALL | MultipleIterator::MIT\_KEYS\_NUMERIC)

Constrói um novo MultipleIterator.

### Parâmetros

`flags`
:   As opções a serem definidas, de acordo com as
    [Constantes de opção](class.multipleiterator.md#multipleiterator.constants).

    - **`MultipleIterator::MIT_NEED_ALL`** ou **`MultipleIterator::MIT_NEED_ANY`**
    - **`MultipleIterator::MIT_KEYS_NUMERIC`** ou **`MultipleIterator::MIT_KEYS_ASSOC`**

    O padrão é **`MultipleIterator::MIT_NEED_ALL`**|**`MultipleIterator::MIT_KEYS_NUMERIC`**.

### Examples

**Exemplo #1 Iterando um MultipleIterator**

```
<?php
$people = new ArrayIterator(array('John', 'Jane', 'Jack', 'Judy'));
$roles  = new ArrayIterator(array('Developer', 'Scrum Master', 'Project Owner'));

$team = new MultipleIterator($flags);
$team->attachIterator($people, 'person');
$team->attachIterator($roles, 'role');

foreach ($team as $member) {
    print_r($member);
}
?>
```

Saída com `$flags = MIT_NEED_ALL|MIT_KEYS_NUMERIC`

```
Array
(
    [0] => John
    [1] => Developer
)
Array
(
    [0] => Jane
    [1] => Scrum Master
)
Array
(
    [0] => Jack
    [1] => Project Owner
)
```

Saída com `$flags = MIT_NEED_ANY|MIT_KEYS_NUMERIC`

```
Array
(
    [0] => John
    [1] => Developer
)
Array
(
    [0] => Jane
    [1] => Scrum Master
)
Array
(
    [0] => Jack
    [1] => Project Owner
)
Array
(
    [0] => Judy
    [1] =>
)
```

Saída com `$flags = MIT_NEED_ALL|MIT_KEYS_ASSOC`

```
Array
(
    [person] => John
    [role] => Developer
)
Array
(
    [person] => Jane
    [role] => Scrum Master
)
Array
(
    [person] => Jack
    [role] => Project Owner
)
```

Saída com `$flags = MIT_NEED_ANY|MIT_KEYS_ASSOC`

```
Array
(
    [person] => John
    [role] => Developer
)
Array
(
    [person] => Jane
    [role] => Scrum Master
)
Array
(
    [person] => Jack
    [role] => Project Owner
)
Array
(
    [person] => Judy
    [role] =>
)
```

### Veja também

- [Constantes de Opção](class.multipleiterator.md#multipleiterator.constants)
- [MultipleIterator::valid()](multipleiterator.valid.md) - Verifica a validade dos subiteradores

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
