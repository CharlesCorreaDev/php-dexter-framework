# Exporta o conteúdo de um diretório SVN

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-export.php

---

# svn\_export

(PECL svn >= 0.3.0)

svn\_export — Exporta o conteúdo de um diretório SVN

### Descrição

function **svn\_export**(  
    [string](language.types.string.md) `$frompath`,  
    [string](language.types.string.md) `$topath`,  
    [bool](language.types.boolean.md) `$working_copy` = **`true`**,  
    [int](language.types.integer.md) `$revision_no` = -1  
): [bool](language.types.boolean.md)

Exporta o conteúdo de uma cópia de trabalho ou repositório para um
diretório 'limpo'.

### Parâmetros

`frompath`
:   O caminho para o repositório atual.

`topath`
:   O caminho para o novo repositório.

`working_copy`
:   Se **`true`**, ele exportará arquivos não enviados da cópia de trabalho.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **svn\_export()****

```
<?php
$working_dir     = '../';
$new_working_dir = '/home/user/devel/foo/trunk';

svn_export($working_dir, $new_working_dir);
?>
```

### Veja também

- [svn\_import()](function.svn-import.md) - Importa um caminho não versionado para um repositório

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
