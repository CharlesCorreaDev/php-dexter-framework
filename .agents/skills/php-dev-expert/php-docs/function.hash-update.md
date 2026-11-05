# Injeta dados em um contexto de hash ativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash-update.php

---

# hash\_update

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1)

hash\_update — Injeta dados em um contexto de hash ativo

### Descrição

function **hash\_update**([HashContext](class.hashcontext.md) `$context`, [string](language.types.string.md) `$data`): [true](language.types.singleton.md)

### Parâmetros

`context`
:   Contexto de hash retornado por [hash\_init()](function.hash-init.md).

`data`
:   Mensagem a ser incluída no resumo do hash.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora tem um tipo de retorno de [true](language.types.singleton.md) em vez de [bool](language.types.boolean.md). |
| 7.2.0 | Aceita [HashContext](class.hashcontext.md) em vez de recurso. |

### Veja também

- [hash\_init()](function.hash-init.md) - Inicializa um contexto de hash incremental
- [hash\_update\_file()](function.hash-update-file.md) - Injeta dados em um contexto de hash ativo a partir de um arquivo
- [hash\_update\_stream()](function.hash-update-stream.md) - Injeta dados em um contexto de hash ativo a partir de um fluxo
- [hash\_final()](function.hash-final.md) - Finaliza um hash incremental e retorna o resumo resultante

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
