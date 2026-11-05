# A classe APCUIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.apcuiterator.php

---

# A classe APCUIterator

(PECL apcu >= 5.0.0)

## Introdução

A classe **APCUIterator** torna mais fácil iterar
sobre grandes caches APCu. Ela é útil pois permite iterar sobre grandes
caches em etapas, capturando um número definido de entradas por instância de trava,
portanto ela libera as travas de cache para outras atividades ao invés de segurar
todo o cache para capturar 100 entradas (que é o padrão). Além disso, usar correspondências com
expressões regulares é mais eficiente pois opera no nível de linguagem C.

## Resumo da classe

class **APCUIterator**
implements
[Iterator](class.iterator.md) {

/\* Métodos \*/

public function [\_\_construct](apcuiterator.construct.md)(  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$search` = **`null`**,  
    [int](language.types.integer.md) `$format` = APC\_ITER\_ALL,  
    [int](language.types.integer.md) `$chunk_size` = 100,  
    [int](language.types.integer.md) `$list` = APC\_LIST\_ACTIVE  
)

public function [current](apcuiterator.current.md)(): [mixed](language.types.mixed.md)

public function [getTotalCount](apcuiterator.gettotalcount.md)(): [int](language.types.integer.md)

public function [getTotalHits](apcuiterator.gettotalhits.md)(): [int](language.types.integer.md)

public function [getTotalSize](apcuiterator.gettotalsize.md)(): [int](language.types.integer.md)

public function [key](apcuiterator.key.md)(): [string](language.types.string.md)

public function [next](apcuiterator.next.md)(): [bool](language.types.boolean.md)

public function [rewind](apcuiterator.rewind.md)(): [void](language.types.void.md)

public function [valid](apcuiterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [APCUIterator::\_\_construct](apcuiterator.construct.md) — Constrói um objeto iterador APCUIterator
- [APCUIterator::current](apcuiterator.current.md) — Obtém o item atual
- [APCUIterator::getTotalCount](apcuiterator.gettotalcount.md) — Obtém a contagem total
- [APCUIterator::getTotalHits](apcuiterator.gettotalhits.md) — Obtém o total de entradas de cache
- [APCUIterator::getTotalSize](apcuiterator.gettotalsize.md) — Obtém o tamanho total do cache
- [APCUIterator::key](apcuiterator.key.md) — Obtém a chave do iterador
- [APCUIterator::next](apcuiterator.next.md) — Move o ponteiro para o próximo item
- [APCUIterator::rewind](apcuiterator.rewind.md) — Rebobina o iterador
- [APCUIterator::valid](apcuiterator.valid.md) — Verifica se a posição atual é válida

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
