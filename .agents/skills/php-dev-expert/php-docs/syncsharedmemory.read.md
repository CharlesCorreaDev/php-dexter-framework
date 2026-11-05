# Copia dados da memória compartilhada nomeada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncsharedmemory.read.php

---

# SyncSharedMemory::read

(PECL sync >= 1.1.0)

SyncSharedMemory::read — Copia dados da memória compartilhada nomeada

### Descrição

public function **SyncSharedMemory::read**([int](language.types.integer.md) `$start` = 0, [int](language.types.integer.md) `$length` = ?)

Copia dados da memória compartilhada nomeada.

### Parâmetros

`start`
:   A posição, em bytes, a partir da qual a leitura será iniciada.

    > **Nota**:
    >
    > Se o valor for negativo, a posição inicial começará no número
    > de bytes especificado a partir do final do segmento de memória compartilhada.

`length`
:   O número de bytes a serem lidos.

    > **Nota**:
    >
    > Se não for especificado, a leitura será interrompida no final do segmento de memória compartilhada.
    >
    > Se o valor for negativo, a leitura interromperá o número especificado de bytes
    > a partir do final do segmento de memória compartilhada.

### Valor Retornado

Uma string contendo os dados lidos da memória compartilhada.

### Examples

**Exemplo #1 Exemplo de [SyncSharedMemory::\_\_construct()](syncsharedmemory.construct.md)**

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

$result = $mem->read(3, -4);
var_dump($result);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(3) "ort"
```

### Veja também

- [SyncSharedMemory::\_\_construct()](syncsharedmemory.construct.md) - Constrói um novo objeto SyncSharedMemory
- [SyncSharedMemory::first()](syncsharedmemory.first.md) - Verifica se o objeto é a primeira instância de todo o sistema de memória compartilhada nomeada
- [SyncSharedMemory::write()](syncsharedmemory.write.md) - Copia dados para memória compartilhada nomeada
- **SyncSharedMemory::read()**

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
