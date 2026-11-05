# Verifica se o elemento atual do iterador interno possui filhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivecallbackfilteriterator.haschildren.php

---

# RecursiveCallbackFilterIterator::hasChildren

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

RecursiveCallbackFilterIterator::hasChildren — Verifica se o elemento atual do iterador interno possui filhos

### Descrição

public function **RecursiveCallbackFilterIterator::hasChildren**(): [bool](language.types.boolean.md)

Retorna **`true`** se o elemento atual tiver filhos, **`false`** caso contrário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o elemento atual tiver filhos, **`false`** caso contrário.

### Examples

**Exemplo #1 Uso básico de **RecursiveCallbackFilterIterator::hasChildren()****

```
<?php

$dir = new RecursiveDirectoryIterator(__DIR__);

// Itera recursivamente em arquivos XML
$files = new RecursiveCallbackFilterIterator($dir, function ($current, $key, $iterator) {
    // Permite recursão em diretórios
    if ($iterator->hasChildren()) {
        return TRUE;
    }
    // Verifique o arquivo XML
    if (!strcasecmp($current->getExtension(), 'xml')) {
        return TRUE;
    }
    return FALSE;
});

?>
```

### Veja também

- [Exemplos de RecursiveCallbackFilterIterator](class.recursivecallbackfilteriterator.md#recursivecallbackfilteriterator.examples)
- [RecursiveCallbackFilterIterator::\_\_construct()](recursivecallbackfilteriterator.construct.md) - Cria um RecursiveCallbackFilterIterator a partir de um RecursiveIterator
- [RecursiveCallbackFilterIterator::getChildren()](recursivecallbackfilteriterator.getchildren.md) - Retorna os filhos do iterador interno contidos em um RecursiveCallbackFilterIterator

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
