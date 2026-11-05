# Constrói um novo objeto SyncSharedMemory

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncsharedmemory.construct.php

---

# SyncSharedMemory::\_\_construct

(PECL sync >= 1.1.0)

SyncSharedMemory::\_\_construct — Constrói um novo objeto SyncSharedMemory

### Descrição

public function **SyncSharedMemory::\_\_construct**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$size`)

Constrói um objeto de memória compartilhada nomeado.

### Parâmetros

`name`
:   O nome do objeto de memória compartilhada.

    > **Nota**:
    >
    > Se o nome já existir, ele deve poder ser aberto pelo usuário atual
    > com o qual o processo está sendo executado, ou uma exceção será lançada com uma
    > mensagem de erro sem sentido.

`size`
:   O tamanho, em bytes, da memória compartilhada a ser reservada.

    > **Nota**:
    >
    > A quantidade de memória não pode ser redimensionada posteriormente. Solicite armazenamento suficiente antecipadamente.

### Valor Retornado

O novo objeto [SyncSharedMemory](class.syncsharedmemory.md).

### Erros/Exceções

Uma exceção será lançada se o objeto de memória compartilhada não puder ser criado ou aberto.

### Examples

**Exemplo #1 Exemplo de **SyncSharedMemory::\_\_construct()****

```
<?php
// Provavelmente será necessário proteger a memória compartilhada com outros objetos de sincronização.
// A memória compartilhada desaparece quando a última referência a ela desaparece.
$mem = new SyncSharedMemory("AppReportName", 1024);
if ($mem->first())
{
    // Faça a primeira inicialização aqui.
}

$result = $mem->write(json_encode(array("nome" => "meu_relatorio.txt")));
?>
```

### Veja também

- [SyncSharedMemory::first()](syncsharedmemory.first.md) - Verifica se o objeto é a primeira instância de todo o sistema de memória compartilhada nomeada
- [SyncSharedMemory::size()](syncsharedmemory.size.md) - Retorna o tamanho da memória compartilhada nomeada
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
