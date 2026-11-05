# Reverte as alterações na cópia de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-revert.php

---

# svn\_revert

(PECL svn >= 0.3.0)

svn\_revert — Reverte as alterações na cópia de trabalho

### Descrição

function **svn\_revert**([string](language.types.string.md) `$path`, [bool](language.types.boolean.md) `$recursive` = **`false`**): [bool](language.types.boolean.md)

Reverte quaisquer alterações locais no caminho em uma cópia de trabalho.

### Parâmetros

`path`
:   O caminho para o repositório de trabalho.

`recursive`
:   Opcionalmente, faz alterações recursivas.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [svn\_delete()](function.svn-delete.md) - Exclui itens de uma cópia de trabalho ou repositório
- [svn\_export()](function.svn-export.md) - Exporta o conteúdo de um diretório SVN

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
