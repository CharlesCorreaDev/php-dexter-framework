# A classe SyncSharedMemory

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.syncsharedmemory.php

---

# A classe SyncSharedMemory

(PECL sync >= 1.1.0)

## Introdução

Uma implementação nativa, consistente e multiplataforma de objetos de memória compartilhada
nomeados.

Memória compartilhada permite que dois processos separados se comuniquem sem a necessidade de
tubos ou sockets complexos. Existem várias implementações de memória compartilhada baseadas
em inteiros para PHP. A memória compartilhada nomeada é uma alternativa.

Objetos de sincronização (por exemplo, SyncMutex) ainda são necessários para proteger a maioria dos
usos de memória compartilhada.

## Resumo da classe

class **SyncSharedMemory**
{

/\* Métodos \*/

public function [\_\_construct](syncsharedmemory.construct.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$size`)

public function [first](syncsharedmemory.first.md)(): [bool](language.types.boolean.md)

public function [read](syncsharedmemory.read.md)([int](language.types.integer.md) `$start` = 0, [int](language.types.integer.md) `$length` = ?)

public function [size](syncsharedmemory.size.md)(): [int](language.types.integer.md)

public function [write](syncsharedmemory.write.md)([string](language.types.string.md) `$string` = ?, [int](language.types.integer.md) `$start` = 0)

}

## Índice

- [SyncSharedMemory::\_\_construct](syncsharedmemory.construct.md) — Constrói um novo objeto SyncSharedMemory
- [SyncSharedMemory::first](syncsharedmemory.first.md) — Verifica se o objeto é a primeira instância de todo o sistema de memória compartilhada nomeada
- [SyncSharedMemory::read](syncsharedmemory.read.md) — Copia dados da memória compartilhada nomeada
- [SyncSharedMemory::size](syncsharedmemory.size.md) — Retorna o tamanho da memória compartilhada nomeada
- [SyncSharedMemory::write](syncsharedmemory.write.md) — Copia dados para memória compartilhada nomeada

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
