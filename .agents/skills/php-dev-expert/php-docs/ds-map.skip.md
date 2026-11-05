# Retorna o par em uma posição específica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.skip.php

---

# Ds\Map::skip

(PECL ds >= 1.0.0)

Ds\Map::skip — Retorna o par em uma posição específica

### Descrição

public function **Ds\Map::skip**([int](language.types.integer.md) `$position`): [Ds\Pair](class.ds-pair.md)

Retorna o par em uma posição específica baseada em zero, `position`.

### Parâmetros

`position`
:   O índice posicional baseado em zero para retornar.

### Valor Retornado

Retorna o [Ds\Pair](class.ds-pair.md) na `position` dada.

### Erros/Exceções

[OutOfRangeException](class.outofrangeexception.md) se a posição não for válida.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::skip()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);

var_dump($map->skip(1));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Pair)#2 (2) {
  ["key"]=>
  string(1) "b"
  ["value"]=>
  int(2)
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
