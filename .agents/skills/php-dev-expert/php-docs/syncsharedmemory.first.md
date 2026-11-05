# Verifica se o objeto é a primeira instância de todo o sistema de memória compartilhada nomeada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncsharedmemory.first.php

---

# SyncSharedMemory::first

(PECL sync >= 1.1.0)

SyncSharedMemory::first — Verifica se o objeto é a primeira instância de todo o sistema de memória compartilhada nomeada

### Descrição

public function **SyncSharedMemory::first**(): [bool](language.types.boolean.md)

Recupera o status da primeira instância de todo o sistema de um objeto [SyncSharedMemory](class.syncsharedmemory.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SyncSharedMemory::first()****

```
<?php
$mem = new SyncSharedMemory("AppReportName", 1024);
if ($mem->first())
{
    // Faça a primeira inicialização aqui.
}

var_dump($mem->first());

$mem2 = new SyncSharedMemory("AppReportName", 1024);

var_dump($mem2->first());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(false)
```

### Veja também

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
