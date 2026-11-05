# Verifica se uma entrada específica existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shm-has-var.php

---

# shm\_has\_var

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

shm\_has\_var — Verifica se uma entrada específica existe

### Descrição

function **shm\_has\_var**([SysvSharedMemory](class.sysvsharedmemory.md) `$shm`, [int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

Verifica se uma chave específica existe dentro de um segmento de memória compartilhada.

### Parâmetros

`shm`
:   Um segmento de memória compartilhada obtido de [shm\_attach()](function.shm-attach.md).

`key`
:   A chave da variável.

### Valor Retornado

Retorna **`true`** se a entrada existir, caso contrário **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `shm` espera uma instância de [SysvSharedMemory](class.sysvsharedmemory.md) agora; anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [shm\_get\_var()](function.shm-get-var.md) - Retorna uma variável da memória compartilhada
- [shm\_put\_var()](function.shm-put-var.md) - Insere ou atualiza uma variável na memória compartilhada

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
