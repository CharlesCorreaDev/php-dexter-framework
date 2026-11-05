# Remove uma variável da memória compartilhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shm-remove-var.php

---

# shm\_remove\_var

(PHP 4, PHP 5, PHP 7, PHP 8)

shm\_remove\_var — Remove uma variável da memória compartilhada

### Descrição

function **shm\_remove\_var**([SysvSharedMemory](class.sysvsharedmemory.md) `$shm`, [int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

Remove uma variável com uma determinada chave `key`
e libera a memória ocupada.

### Parâmetros

`shm`
:   Um segmento de memória compartilhada obtido de [shm\_attach()](function.shm-attach.md).

`key`
:   A chave da variável.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `shm` espera uma instância de [SysvSharedMemory](class.sysvsharedmemory.md) agora; anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [shm\_remove()](function.shm-remove.md) - Remove memória compartilhada de sistemas Unix

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
