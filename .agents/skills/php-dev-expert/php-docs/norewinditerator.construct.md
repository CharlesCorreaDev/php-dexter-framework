# Constrói um NoRewindIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/norewinditerator.construct.php

---

# NoRewindIterator::\_\_construct

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

NoRewindIterator::\_\_construct — Constrói um NoRewindIterator

### Descrição

public function **NoRewindIterator::\_\_construct**([Iterator](class.iterator.md) `$iterator`)

Constrói um NoRewindIterator.

### Parâmetros

`iterator`
:   O iterador sendo usado.

### Examples

**Exemplo #1 Exemplo de **NoRewindIterator::\_\_construct()****

O segundo loop não produz saída porque o iterador é usado apenas uma vez,
já que não rebobina.

```
<?php
$fruit = array('maçã', 'banana', 'oxicoco');

$arr = new ArrayObject($fruit);
$it  = new NoRewindIterator($arr->getIterator());

echo "Fruta A:\n";
foreach( $it as $item ) {
    echo $item . "\n";
}

echo "Fruta B:\n";
foreach( $it as $item ) {
    echo $item . "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Fruta A:
maçã
banana
oxicoco
Fruta B:
```

### Veja também

- [NoRewindIterator::valid()](norewinditerator.valid.md) - Valida o iterador

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
