# Remove uma variável armazenada do cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-delete.php

---

# apcu\_delete

(PECL apcu >= 4.0.0)

apcu\_delete — 
Remove uma variável armazenada do cache

### Descrição

function **apcu\_delete**([mixed](language.types.mixed.md) `$key`): [mixed](language.types.mixed.md)

Remove uma variável armazenada do cache.

### Parâmetros

`key`
:   O parâmetro `key` é uma chave usada para armazenar o valor como uma
    [string](language.types.string.md) para uma chave única,
    ou como um [array](language.types.array.md) de strings para várias chaves,
    ou como um objeto ([object](language.types.object.md)) da classe [APCUIterator](class.apcuiterator.md).

### Valor Retornado

Se `key` for um [array](language.types.array.md), um [array](language.types.array.md) indexado das chaves é retornado.
Caso contrário **`true`** é retornado em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Um exemplo de **apcu\_delete()****

```
<?php
$bar = 'BAR';
apcu_store('foo', $bar);
apcu_delete('foo');
// obviamente inútil nesta forma

// Alternativamente remove múltiplas chaves.
apcu_delete(['foo', 'bar', 'baz']);

// Ou usa um iterador com uma expressão regular.
apcu_delete(new APCUIterator('#^myprefix_#'));
?>
```

### Veja também

- [apcu\_store()](function.apcu-store.md) - Armazena uma variável em cache
- [apcu\_fetch()](function.apcu-fetch.md) - Busca uma variável armazenada no cache
- [apcu\_clear\_cache()](function.apcu-clear-cache.md) - Limpa o cache APCu
- [APCUIterator](class.apcuiterator.md)

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
