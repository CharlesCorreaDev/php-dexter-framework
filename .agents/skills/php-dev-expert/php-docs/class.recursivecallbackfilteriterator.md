# A classe RecursiveCallbackFilterIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.recursivecallbackfilteriterator.php

---

# A classe RecursiveCallbackFilterIterator

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

## Introdução

## Resumo da classe

class ****RecursiveCallbackFilterIterator****
extends
[CallbackFilterIterator](class.callbackfilteriterator.md)
implements
[RecursiveIterator](class.recursiveiterator.md) {

/\* Métodos \*/

public function [\_\_construct](recursivecallbackfilteriterator.construct.md)([RecursiveIterator](class.recursiveiterator.md) `$iterator`, [callable](language.types.callable.md) `$callback`)

public function [getChildren](recursivecallbackfilteriterator.getchildren.md)(): [RecursiveCallbackFilterIterator](class.recursivecallbackfilteriterator.md)

public function [hasChildren](recursivecallbackfilteriterator.haschildren.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [CallbackFilterIterator::accept](callbackfilteriterator.accept.md)(): [bool](language.types.boolean.md)

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

**Exemplo #1 Argumentos disponíveis para o callback**

```
<?php

/**
 * Callback for RecursiveCallbackFilterIterator
 *
 * @param $current   Valor atual do item
 * @param $key       Chave atual do item
 * @param $iterator  Iterador sendo filtrado
 * @return boolean   TRUE para aceitar o item atual, FALSE caso contrário
 */
function my_callback($current, $key, $iterator) {
    // Seu código de filtragem aqui
}

?>
```

Filtrar um iterador recursivo geralmente envolve duas condições.
A primeira é que, para permitir a recursão, a função de retorno de chamada deve retornar **`true`**
se o item do iterador atual tiver filhos.
O segundo é a condição de filtro normal, como um tamanho de arquivo ou extensão
verificação como no exemplo abaixo.

**Exemplo #2 Exemplo básico de chamada recursiva**

```
<?php

$dir = new RecursiveDirectoryIterator(__DIR__);

// Filtrar arquivos grandes ( > 100MB)
$files = new RecursiveCallbackFilterIterator($dir, function ($current, $key, $iterator) {
    // Permitir recursão
    if ($iterator->hasChildren()) {
        return TRUE;
    }
    // Verificar se é um arquivo grande
    if ($current->isFile() && $current->getSize() > 104857600) {
        return TRUE;
    }
    return FALSE;
});

foreach (new RecursiveIteratorIterator($files) as $file) {
    echo $file->getPathname() . PHP_EOL;
}

?>
```

## Índice

- [RecursiveCallbackFilterIterator::\_\_construct](recursivecallbackfilteriterator.construct.md) — Cria um RecursiveCallbackFilterIterator a partir de um RecursiveIterator
- [RecursiveCallbackFilterIterator::getChildren](recursivecallbackfilteriterator.getchildren.md) — Retorna os filhos do iterador interno contidos em um RecursiveCallbackFilterIterator
- [RecursiveCallbackFilterIterator::hasChildren](recursivecallbackfilteriterator.haschildren.md) — Verifica se o elemento atual do iterador interno possui filhos

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
