# Retorna o tamanho da memória compartilhada nomeada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncsharedmemory.size.php

---

# SyncSharedMemory::size

(PECL sync >= 1.1.0)

SyncSharedMemory::size — Retorna o tamanho da memória compartilhada nomeada

### Descrição

public function **SyncSharedMemory::size**(): [int](language.types.integer.md)

Recupera o tamanho da memória compartilhada de um objeto [SyncSharedMemory](class.syncsharedmemory.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um inteiro contendo o tamanho da memória compartilhada. Este será o mesmo tamanho que foi passado ao construtor.

### Examples

**Exemplo #1 Exemplo de **SyncSharedMemory::size()****

```
<?php
$mem = new SyncSharedMemory("AppReportName", 1024);
var_dump($mem->size());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(1024)
```

### Veja também

- [SyncSharedMemory::\_\_construct()](syncsharedmemory.construct.md) - Constrói um novo objeto SyncSharedMemory
- [SyncSharedMemory::write()](syncsharedmemory.write.md) - Copia dados para memória compartilhada nomeada
- [SyncSharedMemory::read()](syncsharedmemory.read.md) - Copia dados da memória compartilhada nomeada

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
