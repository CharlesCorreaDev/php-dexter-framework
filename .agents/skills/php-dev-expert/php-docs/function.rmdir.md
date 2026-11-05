# Remove um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rmdir.php

---

# rmdir

(PHP 4, PHP 5, PHP 7, PHP 8)

rmdir — Remove um diretório

### Descrição

function **rmdir**([string](language.types.string.md) `$directory`, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [bool](language.types.boolean.md)

Tenta remover o diretório com o nome de `directory`.
O diretório deve estar vazio e as permissões relevantes devem autorizar a operação.
Um erro de nível **`E_WARNING`** será gerado em caso de falha.

### Parâmetros

`directory`
:   Caminho para o diretório.

`context`
:   Um [resource](language.types.resource.md) de
    [contexto de fluxo](stream.contexts.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **rmdir()****

```
<?php
if (!is_dir('examples')) {
    mkdir('examples');
}

rmdir('examples');
?>
```

### Veja também

- [is\_dir()](function.is-dir.md) - Diz se o caminho é um diretório
- [mkdir()](function.mkdir.md) - Cria um diretório
- [unlink()](function.unlink.md) - Apaga um arquivo

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
