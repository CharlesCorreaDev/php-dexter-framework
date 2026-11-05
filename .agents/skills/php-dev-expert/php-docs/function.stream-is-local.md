# Verifica se o fluxo é local

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-is-local.php

---

# stream\_is\_local

(PHP 5 >= 5.2.4, PHP 7, PHP 8)

stream\_is\_local — Verifica se o fluxo é local

### Descrição

function **stream\_is\_local**([resource](language.types.resource.md)|[string](language.types.string.md) `$stream`): [bool](language.types.boolean.md)

Verifica se um fluxo ou uma URL é ou não local.

### Parâmetros

`stream`
:   O fluxo do tipo [resource](language.types.resource.md) ou URL a ser verificado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **stream\_is\_local()****

Exemplo de uso básico.

```
<?php
var_dump(stream_is_local("http://example.com"));
var_dump(stream_is_local("/etc"));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)
bool(true)
```

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
