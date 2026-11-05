# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds.examples.php

---

# Examples

**Exemplo #1 Vector**

```
<?php

$vector = new \Ds\Vector();

$vector->push('a');
$vector->push('b', 'c');

$vector[] = 'd';

print_r($vector);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
(
    [0] => a
    [1] => b
    [2] => c
    [3] => d
)
```

**Exemplo #2 Map**

```
<?php

$map = new \Ds\Map();

$map->put('a', 1);
$map->put('b', 2);

$map['c'] = 3;

print_r($map);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Map Object
(
    [0] => Ds\Pair Object
        (
            [key] => a
            [value] => 1
        )

    [1] => Ds\Pair Object
        (
            [key] => b
            [value] => 2
        )

    [2] => Ds\Pair Object
        (
            [key] => c
            [value] => 3
        )

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
