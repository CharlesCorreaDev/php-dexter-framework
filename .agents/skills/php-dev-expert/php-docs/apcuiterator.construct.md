# Constrói um objeto iterador APCUIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/apcuiterator.construct.php

---

# APCUIterator::\_\_construct

(PECL apcu >= 5.0.0)

APCUIterator::\_\_construct — Constrói um objeto iterador APCUIterator

### Descrição

public function **APCUIterator::\_\_construct**(  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$search` = **`null`**,  
    [int](language.types.integer.md) `$format` = APC\_ITER\_ALL,  
    [int](language.types.integer.md) `$chunk_size` = 100,  
    [int](language.types.integer.md) `$list` = APC\_LIST\_ACTIVE  
)

Constrói um [object](language.types.object.md) da classe [APCUIterator](class.apcuiterator.md).

### Parâmetros

`search`
:   Pode ser uma expressão regular [PCRE](book.pcre.md) que
    corresponda a nomes de chaves APCu, informada como uma [string](language.types.string.md).
    Ou um [array](language.types.array.md) de [string](language.types.string.md)s com nomes de chaves APCu.
    Ou, opcionalmente, **`null`** para não fazer a pesquisa.

`format`
:   O formato desejado, como configurado com um ou mais das constantes
    [APC\_ITER\_\*](apcu.constants.md).

`chunk_size`
:   O tamanho do pacote. Deve ser um valor maior que 0. O valor
    padrão é 100.

`list`
:   O tipo a ser listado. Podem ser passadas as constantes **`APC_LIST_ACTIVE`**
    ou **`APC_LIST_DELETED`**.

### Examples

**Exemplo #1 Um exemplo de **APCUIterator::\_\_construct()****

```
<?php
foreach (new APCUIterator('/^counter\./') as $counter) {
    echo "$counter[key]: $counter[value]\n";
    apc_dec($counter['key'], $counter['value']);
}
?>
```

### Veja também

- [apcu\_exists()](function.apcu-exists.md) - Verifica se uma entrada existe
- [apcu\_cache\_info()](function.apcu-cache-info.md) - Recupera informação em cache a partir do armazenamento de dados do APCu

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
