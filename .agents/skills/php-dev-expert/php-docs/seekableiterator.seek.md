# Aponta para uma posição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seekableiterator.seek.php

---

# SeekableIterator::seek

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SeekableIterator::seek — Aponta para uma posição

### Descrição

public function **SeekableIterator::seek**([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

Aponta o iterador para uma posição específica.

### Parâmetros

`offset`
:   A posição para onde apontar.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Implementações devem lançar uma [OutOfBoundsException](class.outofboundsexception.md)
se o `offset` não for acessível.

### Examples

**Exemplo #1 Exemplo de **SeekableIterator::seek()****

Aponta para o item na posição 3 no iterador
([ArrayIterator](class.arrayiterator.md) implementa [SeekableIterator](class.seekableiterator.md)).

```
<?php
$array = array("apple", "banana", "cherry", "damson", "elderberry");
$iterator = new ArrayIterator($array);
$iterator->seek(3);
echo $iterator->current();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
damson
```

### Veja também

- [SeekableIterator](class.seekableiterator.md)
- [Iterator](class.iterator.md)

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
