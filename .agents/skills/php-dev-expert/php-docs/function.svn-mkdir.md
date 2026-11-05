# Cria um diretório em uma cópia de trabalho ou repositório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-mkdir.php

---

# svn\_mkdir

(PECL svn >= 0.4.0)

svn\_mkdir — Cria um diretório em uma cópia de trabalho ou repositório

### Descrição

function **svn\_mkdir**([string](language.types.string.md) `$path`, [string](language.types.string.md) `$log_message` = ?): [bool](language.types.boolean.md)

Cria um diretório em uma cópia de trabalho ou repositório.

### Parâmetros

`path`
:   O caminho para a cópia de trabalho ou repositório.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [svn\_add()](function.svn-add.md) - Agenda a adição de um item em um diretório de trabalho
- **svn\_copy()**

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
