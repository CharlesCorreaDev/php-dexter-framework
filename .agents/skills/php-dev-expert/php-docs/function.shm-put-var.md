# Insere ou atualiza uma variável na memória compartilhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shm-put-var.php

---

# shm\_put\_var

(PHP 4, PHP 5, PHP 7, PHP 8)

shm\_put\_var — Insere ou atualiza uma variável na memória compartilhada

### Descrição

function **shm\_put\_var**([SysvSharedMemory](class.sysvsharedmemory.md) `$shm`, [int](language.types.integer.md) `$key`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

**shm\_put\_var()** insere ou atualiza o
valor em `value` com a
chave fornecida em `key`.

Alertas (nível **`E_WARNING`**) serão emitidos se
`shm` não for um índice de memória compartilhada SysV válido
ou se não houver memória compartilhada suficiente para concluir sua
solicitação.

### Parâmetros

`shm`
:   Um segmento de memória compartilhada obtido de [shm\_attach()](function.shm-attach.md).

`key`
:   A chave da variável.

`value`
:   A variável. Todos os [tipos de variáveis](language.types.md)
    que [serialize()](function.serialize.md) suporta podem ser usados: geralmente
    isso significa todos os tipos, exceto recursos e alguns objetos internos
    que não podem ser serializados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `shm` espera uma instância de [SysvSharedMemory](class.sysvsharedmemory.md) agora; anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [shm\_get\_var()](function.shm-get-var.md) - Retorna uma variável da memória compartilhada
- [shm\_has\_var()](function.shm-has-var.md) - Verifica se uma entrada específica existe

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
