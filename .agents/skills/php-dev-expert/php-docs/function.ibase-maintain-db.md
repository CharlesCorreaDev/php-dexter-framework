# Executa um comando de manutenção no servidor de banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-maintain-db.php

---

# ibase\_maintain\_db

(PHP 5, PHP 7 < 7.4.0)

ibase\_maintain\_db — Executa um comando de manutenção no servidor de banco de dados

### Descrição

function **ibase\_maintain\_db**(  
    [resource](language.types.resource.md) `$service_handle`,  
    [string](language.types.string.md) `$db`,  
    [int](language.types.integer.md) `$action`,  
    [int](language.types.integer.md) `$argument` = 0  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

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
