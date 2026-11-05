# Obtém o número de diretórios e arquivos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/globiterator.count.php

---

# GlobIterator::count

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

GlobIterator::count — Obtém o número de diretórios e arquivos

### Descrição

public function **GlobIterator::count**(): [int](language.types.integer.md)

Obtém o número de diretórios e arquivos encontrados pela
expressão glob.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de diretórios e arquivos retornados, como um
[int](language.types.integer.md).

### Examples

**Exemplo #1 Exemplo de **GlobIterator::count()****

```
<?php
$iterator = new GlobIterator('*.xml');

printf("Matched %d item(s)\r\n", $iterator->count());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Matched 8 item(s)
```

### Veja também

- [GlobIterator::\_\_construct()](globiterator.construct.md) - Constrói um diretório usando glob
- [count()](function.count.md) - Conta todos os elementos de um array ou de um objeto Countable
- [glob()](function.glob.md) - Encontra caminhos que combinam com uma expressão

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
