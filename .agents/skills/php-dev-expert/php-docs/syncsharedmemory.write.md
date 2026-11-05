# Copia dados para memória compartilhada nomeada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncsharedmemory.write.php

---

# SyncSharedMemory::write

(PECL sync >= 1.1.0)

SyncSharedMemory::write — Copia dados para memória compartilhada nomeada

### Descrição

public function **SyncSharedMemory::write**([string](language.types.string.md) `$string` = ?, [int](language.types.integer.md) `$start` = 0)

Copia dados para memória compartilhada nomeada.

### Parâmetros

`string`
:   Os dados a serem gravados na memória compartilhada.

    > **Nota**:
    >
    > Se o tamanho dos dados exceder o tamanho da memória compartilhada, o número de bytes
    > gravados retornados será menor que o comprimento da entrada.

`start`
:   A posição, em bytes, a partir da qual a escrita será iniciada.

    > **Nota**:
    >
    > Se o valor for negativo, a posição inicial começará no número
    > de bytes especificado a partir do final do segmento de memória compartilhada.

### Valor Retornado

Um inteiro contendo o número de bytes gravados na memória compartilhada.

### Examples

**Exemplo #1 Exemplo de **SyncSharedMemory::write()****

```
<?php
// Provavelmente será necessário proteger a memória compartilhada com outros objetos de sincronização.
// A memória compartilhada desaparece quando a última referência a ela desaparece.
$mem = new SyncSharedMemory("AppReportName", 1024);
if ($mem->first())
{
    // Faça a primeira inicialização aqui.
}

$result = $mem->write("report.txt");
var_dump($result);

$result = $mem->write("report.txt", -3);
var_dump($result);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(10)
int(3)
```

### Veja também

- [SyncSharedMemory::\_\_construct()](syncsharedmemory.construct.md) - Constrói um novo objeto SyncSharedMemory
- [SyncSharedMemory::first()](syncsharedmemory.first.md) - Verifica se o objeto é a primeira instância de todo o sistema de memória compartilhada nomeada
- **SyncSharedMemory::write()**
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
