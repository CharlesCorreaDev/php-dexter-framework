# Copia um arquivo ou diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-fs-copy.php

---

# svn\_fs\_copy

(PECL svn >= 0.2.0)

svn\_fs\_copy — Copia um arquivo ou diretório

### Descrição

function **svn\_fs\_copy**(  
    [resource](language.types.resource.md) `$from_root`,  
    [string](language.types.string.md) `$from_path`,  
    [resource](language.types.resource.md) `$to_root`,  
    [string](language.types.string.md) `$to_path`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Copia um arquivo ou diretório.

### Parâmetros

`from_root`

`from_path`

`to_root`

`to_path`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

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
