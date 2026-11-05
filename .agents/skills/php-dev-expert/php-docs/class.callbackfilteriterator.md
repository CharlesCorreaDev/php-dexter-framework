# A classe CallbackFilterIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.callbackfilteriterator.php

---

# A classe CallbackFilterIterator

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

## Introdução

## Resumo da classe

class ****CallbackFilterIterator****
extends
[FilterIterator](class.filteriterator.md)
{

/\* Métodos \*/

public function [\_\_construct](callbackfilteriterator.construct.md)([Iterator](class.iterator.md) `$iterator`, [callable](language.types.callable.md) `$callback`)

public function [accept](callbackfilteriterator.accept.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [FilterIterator::accept](filteriterator.accept.md)(): [bool](language.types.boolean.md)

public function [FilterIterator::current](filteriterator.current.md)(): [mixed](language.types.mixed.md)

public function [FilterIterator::key](filteriterator.key.md)(): [mixed](language.types.mixed.md)

public function [FilterIterator::next](filteriterator.next.md)(): [void](language.types.void.md)

public function [FilterIterator::rewind](filteriterator.rewind.md)(): [void](language.types.void.md)

public function [FilterIterator::valid](filteriterator.valid.md)(): [bool](language.types.boolean.md)

public function [IteratorIterator::current](iteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::getInnerIterator](iteratoriterator.getinneriterator.md)(): [?](language.types.null.md)[Iterator](class.iterator.md)

public function [IteratorIterator::key](iteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::next](iteratoriterator.next.md)(): [void](language.types.void.md)

public function [IteratorIterator::rewind](iteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [IteratorIterator::valid](iteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Examples

O callback deve aceitar até três argumentos:
o item atual, a chave atual e o iterador, respectivamente.

**Exemplo #1 Argumentos de callback disponíveis**

```
<?php

/**
 * Callback para CallbackFilterIterator
 *
 * @param $current   Valor do item atual
 * @param $key       Chave do item atual
 * @param $iterator  Iterador sendo filtrado
 * @return boolean   TRUE para aceitar o item atual, FALSE caso contrário
 */
function my_callback($current, $key, $iterator) {
    // Seu código de filtragem aqui
}

?>
```

Qualquer [callable](language.types.callable.md) pode ser usado; como uma string contendo um
nome de função, um array para um método ou uma função anônima.

**Exemplo #2 Exemplos básicos de callback**

```
<?php

$dir = new FilesystemIterator(__DIR__);

// Filtrar arquivos grandes ( > 100MB)
function is_large_file($current) {
    return $current->isFile() && $current->getSize() > 104857600;
}
$large_files = new CallbackFilterIterator($dir, 'is_large_file');

// Filtrar diretórios
$files = new CallbackFilterIterator($dir, function ($current, $key, $iterator) {
    return $current->isDir() && ! $iterator->isDot();
});

?>
```

## Índice

- [CallbackFilterIterator::accept](callbackfilteriterator.accept.md) — Chama o callback com o valor atual, a chave atual e o iterador interno como argumentos
- [CallbackFilterIterator::\_\_construct](callbackfilteriterator.construct.md) — Cria um iterador filtrado a partir de outro iterador

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
