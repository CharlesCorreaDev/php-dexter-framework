# Processa um arquivo PHP importando definições de função e classe, substituindo quando apropriado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-import.php

---

# runkit7\_import

(PECL runkit7 >= Unknown)

runkit7\_import — 
Processa um arquivo PHP importando definições de função e classe, substituindo quando apropriado

**Aviso**

This feature has been *removed* in PECL runkit7 4.0.0.

### Descrição

function **runkit7\_import**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = ?): [bool](language.types.boolean.md)

Semelhante a [include](function.include.md). No entanto, qualquer código que resida fora
de uma função ou classe é simplesmente ignorado.
Além disso, dependendo do valor de `flags`,
quaisquer funções ou classes que já existam no ambiente em execução
podem ser substituídas automaticamente por suas novas definições.

### Parâmetros

`filename`
:   Nome do arquivo do qual as definições de função e classe serão importadas.

`flags`
:   OR binário da família de constantes
    [`RUNKIT7_IMPORT_*`](runkit7.constants.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
