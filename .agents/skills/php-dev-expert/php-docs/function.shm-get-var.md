# Retorna uma variável da memória compartilhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shm-get-var.php

---

# shm\_get\_var

(PHP 4, PHP 5, PHP 7, PHP 8)

shm\_get\_var — Retorna uma variável da memória compartilhada

### Descrição

function **shm\_get\_var**([SysvSharedMemory](class.sysvsharedmemory.md) `$shm`, [int](language.types.integer.md) `$key`): [mixed](language.types.mixed.md)

**shm\_get\_var()** retorna a variável com uma determinada
chave `key`, no segmento de memória compartilhada especificado.
A variável ainda ficará presente na memória compartilhada.

### Parâmetros

`shm`
:   Um segmento de memória compartilhada obtido de [shm\_attach()](function.shm-attach.md).

`key`
:   A chave da variável.

### Valor Retornado

Retorna a variável com a chave fornecida.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `shm` espera uma instância de [SysvSharedMemory](class.sysvsharedmemory.md) agora; anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [shm\_has\_var()](function.shm-has-var.md) - Verifica se uma entrada específica existe
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
