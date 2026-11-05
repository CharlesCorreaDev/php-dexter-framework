# Finaliza um hash incremental e retorna o resumo resultante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash-final.php

---

# hash\_final

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1)

hash\_final — Finaliza um hash incremental e retorna o resumo resultante

### Descrição

function **hash\_final**([HashContext](class.hashcontext.md) `$context`, [bool](language.types.boolean.md) `$binary` = **`false`**): [string](language.types.string.md)

### Parâmetros

`context`
:   Contexto de hash retornado por [hash\_init()](function.hash-init.md).

`binary`
:   Quando definido como **`true`**, gera dados binários brutos.
    **`false`** gera caracteres hexadecimais minúsculos.

### Valor Retornado

Retorna uma string contendo o resumo da mensagem calculado como caracteres hexadecimais minúsculos
a menos que `binary` seja definido como true, caso em que a representação binária bruta
do resumo da mensagem é retornada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | Aceita [HashContext](class.hashcontext.md) em vez de recurso. |

### Veja também

- [hash\_init()](function.hash-init.md) - Inicializa um contexto de hash incremental
- [hash\_update()](function.hash-update.md) - Injeta dados em um contexto de hash ativo
- [hash\_update\_stream()](function.hash-update-stream.md) - Injeta dados em um contexto de hash ativo a partir de um fluxo
- [hash\_update\_file()](function.hash-update-file.md) - Injeta dados em um contexto de hash ativo a partir de um arquivo

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
