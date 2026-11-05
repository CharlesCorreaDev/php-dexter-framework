# Desconecta do segmento de memória compartilhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shm-detach.php

---

# shm\_detach

(PHP 4, PHP 5, PHP 7, PHP 8)

shm\_detach — Desconecta do segmento de memória compartilhada

### Descrição

function **shm\_detach**([SysvSharedMemory](class.sysvsharedmemory.md) `$shm`): [true](language.types.singleton.md)

**shm\_detach()** desconecta-se da memória compartilhada fornecida
pelo `shm` criado por
[shm\_attach()](function.shm-attach.md). Lembre-se de que a memória compartilhada ainda existe
no sistema Unix e os dados ainda estão presentes.

### Parâmetros

`shm`
:   Um segmento de memória compartilhada obtido de [shm\_attach()](function.shm-attach.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora o tipo de retorno é **`true`**; antes era [bool](language.types.boolean.md). |
| 8.0.0 | `shm` espera uma instância de [SysvSharedMemory](class.sysvsharedmemory.md) agora; anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [shm\_attach()](function.shm-attach.md) - Cria ou abre um segmento de memória compartilhada
- [shm\_remove()](function.shm-remove.md) - Remove memória compartilhada de sistemas Unix
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
