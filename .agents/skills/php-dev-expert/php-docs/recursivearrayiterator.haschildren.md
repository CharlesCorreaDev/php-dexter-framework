# Retorna se a entrada atual é um array ou um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivearrayiterator.haschildren.php

---

# RecursiveArrayIterator::hasChildren

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveArrayIterator::hasChildren — Retorna se a entrada atual é um array ou um objeto

### Descrição

public function **RecursiveArrayIterator::hasChildren**(): [bool](language.types.boolean.md)

Retorna se a entrada atual é um [array](language.types.array.md) ou um [object](language.types.object.md) para
o qual um iterador pode ser obtido via
[RecursiveArrayIterator::getChildren()](recursivearrayiterator.getchildren.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a entrada atual é um [array](language.types.array.md) ou um [object](language.types.object.md),
caso contrário, **`false`** é retornado.

### Examples

**Exemplo #1 Exemplo de **RecursiveArrayIterator::hasChildren()****

```
<?php
$fruits = array("a" => "limão", "b" => "laranja", array("a" => "maçã", "p" => "pêra"));

$iterator = new RecursiveArrayIterator($fruits);

while ($iterator->valid()) {

    // Verifica se há filhos
    if ($iterator->hasChildren()) {
        // imprime todos os filhos
        foreach ($iterator->getChildren() as $key => $value) {
            echo $key . ' : ' . $value . "\n";
        }
    } else {
        echo "Sem filhos.\n";
    }

    $iterator->next();
}
?>
```

O exemplo acima produzirá:

```
Sem filhos.
Sem filhos.
a : maçã
p : pêra
```

### Veja também

- [RecursiveArrayIterator::getChildren()](recursivearrayiterator.getchildren.md) - Retorna um iterador para a entrada atual se ela for um array ou um object

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
