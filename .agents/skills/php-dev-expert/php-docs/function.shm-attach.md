# Cria ou abre um segmento de memória compartilhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shm-attach.php

---

# shm\_attach

(PHP 4, PHP 5, PHP 7, PHP 8)

shm\_attach — Cria ou abre um segmento de memória compartilhada

### Descrição

function **shm\_attach**([int](language.types.integer.md) `$key`, [?](language.types.null.md)[int](language.types.integer.md) `$size` = **`null`**, [int](language.types.integer.md) `$permissions` = 0666): [SysvSharedMemory](class.sysvsharedmemory.md)|[false](language.types.singleton.md)

**shm\_attach()** retorna um id que pode ser usado para acessar
a memória compartilhada do System V com a chave fornecida em `key`. A
primeira chamada cria o segmento de memória compartilhada com
tamanho `size` e os bits de permissão opcionais
`permissions`.

Uma segunda chamada a **shm\_attach()** para a mesma
`key` retornará uma instância diferente de
[SysvSharedMemory](class.sysvsharedmemory.md), mas ambas as instâncias acessam a mesma
memória compartilhada subjacente. `size` e
`permissions` serão ignorados.

### Parâmetros

`key`
:   Um ID numérico de segmento de memória compartilhada

`size`
:   O tamanho da memória. Se não for fornecido, o padrão é
    `sysvshm.init_mem` no php.ini caso contrário, 10000
    bytes.

`permissions`
:   Bits de permissão opcionais. Padrão: 0666.

### Valor Retornado

Retorna uma instância [SysvSharedMemory](class.sysvsharedmemory.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função retorna uma instância de [SysvSharedMemory](class.sysvsharedmemory.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.0.0 | `size` agora é anulável. |

### Veja também

- [shm\_detach()](function.shm-detach.md) - Desconecta do segmento de memória compartilhada
- [ftok()](function.ftok.md) - Converte um nome de caminho e um identificador de projeto em uma chave IPC do System V

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
