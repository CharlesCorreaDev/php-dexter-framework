# Inclui e interpreta um arquivo de script Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/lua.include.php

---

# Lua::include

(PECL lua >=0.9.0)

Lua::include — Inclui e interpreta um arquivo de script Lua

### Descrição

public function **Lua::include**([string](language.types.string.md) `$file`): [mixed](language.types.mixed.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`file`

### Valor Retornado

Retorna o resultado do código incluído, **`null`** para argumentos incorretos ou **`false`** para
outros tipos de falha.

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
