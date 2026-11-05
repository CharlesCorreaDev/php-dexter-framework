# Converte o par para um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-pair.toarray.php

---

# Ds\Pair::toArray

(PECL ds >= 1.0.0)

Ds\Pair::toArray — 
Converte o par para um [array](language.types.array.md)

### Descrição

public function **Ds\Pair::toArray**(): [array](language.types.array.md)

Converte o par para um [array](language.types.array.md).

> **Nota**:
>
> A conversão direta para um [array](language.types.array.md) ainda não é suportada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) contendo todos os valores na mesma ordem que o par.

### Examples

**Exemplo #1 Exemplo de **Ds\Pair::toArray()****

```
<?php
$pair = new \Ds\Pair("a", 1);

var_dump($pair->toArray());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  ["key"]=>
  string(1) "a"
  ["value"]=>
  int(1)
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
