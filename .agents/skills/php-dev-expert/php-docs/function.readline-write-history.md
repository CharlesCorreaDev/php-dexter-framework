# Grava o histórico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readline-write-history.php

---

# readline\_write\_history

(PHP 4, PHP 5, PHP 7, PHP 8)

readline\_write\_history — Grava o histórico

### Descrição

function **readline\_write\_history**([?](language.types.null.md)[string](language.types.string.md) `$filename` = **`null`**): [bool](language.types.boolean.md)

Esta função escreve o histórico dos comandos em um arquivo.

### Parâmetros

`filename`
:   Caminho para salvar o arquivo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `filename` é anulável agora. |

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
