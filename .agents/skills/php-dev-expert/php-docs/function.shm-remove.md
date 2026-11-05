# Remove memória compartilhada de sistemas Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shm-remove.php

---

# shm\_remove

(PHP 4, PHP 5, PHP 7, PHP 8)

shm\_remove — Remove memória compartilhada de sistemas Unix

### Descrição

function **shm\_remove**([SysvSharedMemory](class.sysvsharedmemory.md) `$shm`): [bool](language.types.boolean.md)

**shm\_remove()** remove a memória compartilhada
`shm`. Todos os dados serão destruídos.

### Parâmetros

`shm`
:   Um segmento de memória compartilhada obtido de [shm\_attach()](function.shm-attach.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `shm` espera uma instância de [SysvSharedMemory](class.sysvsharedmemory.md) agora; anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [shm\_remove\_var()](function.shm-remove-var.md) - Remove uma variável da memória compartilhada

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
