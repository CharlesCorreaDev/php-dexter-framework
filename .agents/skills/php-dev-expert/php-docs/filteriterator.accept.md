# Verifica se o elemento atual do iterador é aceitável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filteriterator.accept.php

---

# FilterIterator::accept

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

FilterIterator::accept — Verifica se o elemento atual do iterador é aceitável

### Descrição

public function **FilterIterator::accept**(): [bool](language.types.boolean.md)

Retorna se o elemento atual do iterador é aceitável por meio deste filtro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o elemento atual for aceitável, caso contrário **`false`**.

### Examples

**Exemplo #1 Exemplo de **FilterIterator::accept()****

```
<?php
// Este iterador filtra todos os valores com menos de 10 caracteres
class LengthFilterIterator extends FilterIterator {

    public function accept() {
        // Aceita apenas strings com comprimento de 10 ou mais caracteres
        return strlen(parent::current()) >= 10;
    }

}

$arrayIterator = new ArrayIterator(array('test1', 'mais de 10 caracteres'));
$lengthFilter = new LengthFilterIterator($arrayIterator);

foreach ($lengthFilter as $value) {
    echo $value . "\n";
}
?>
```

O exemplo acima produzirá:

```
mais de 10 caracteres
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
