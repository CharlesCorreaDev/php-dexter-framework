# Injeta dados em um contexto de hash ativo a partir de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash-update-file.php

---

# hash\_update\_file

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1)

hash\_update\_file — Injeta dados em um contexto de hash ativo a partir de um arquivo

### Descrição

function **hash\_update\_file**([HashContext](class.hashcontext.md) `$context`, [string](language.types.string.md) `$filename`, [?](language.types.null.md)[resource](language.types.resource.md) `$stream_context` = **`null`**): [bool](language.types.boolean.md)

### Parâmetros

`context`
:   Contexto de hash retornado por [hash\_init()](function.hash-init.md).

`filename`
:   URL que descreve o local do arquivo a ser hash; Suporta empacotadores [fopen()](function.fopen.md).

`stream_context`
:   Contexto de fluxo conforme retornado por [stream\_context\_create()](function.stream-context-create.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `stream_context` agora pode ser nulo. |
| 7.2.0 | Aceita [HashContext](class.hashcontext.md) no lugar de um recurso. |

### Veja também

- [hash\_init()](function.hash-init.md) - Inicializa um contexto de hash incremental
- [hash\_update()](function.hash-update.md) - Injeta dados em um contexto de hash ativo
- [hash\_update\_stream()](function.hash-update-stream.md) - Injeta dados em um contexto de hash ativo a partir de um fluxo
- [hash\_final()](function.hash-final.md) - Finaliza um hash incremental e retorna o resumo resultante
- [hash\_file()](function.hash-file.md) - Gera um valor hash usando o conteúdo de um arquivo fornecido

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
