# Converte o vetor em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.toarray.php

---

# Ds\Vector::toArray

(PECL ds >= 1.0.0)

Ds\Vector::toArray — 
Converte o vetor em um [array](language.types.array.md)

### Descrição

public function **Ds\Vector::toArray**(): [array](language.types.array.md)

Converte o vetor em um [array](language.types.array.md).

> **Nota**:
>
> A conversão direta para [array](language.types.array.md) ainda não é suportada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) contendo todos os valores na mesma ordem que o vetor.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::toArray()****

```
<?php
$vector = new \Ds\Vector([1, 2, 3]);

var_dump($vector->toArray());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
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
