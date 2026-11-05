# Obtém o conteúdo completo do arquivo de entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pharfileinfo.getcontent.php

---

# PharFileInfo::getContent

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

PharFileInfo::getContent — Obtém o conteúdo completo do arquivo de entrada

### Descrição

public function **PharFileInfo::getContent**(): [string](language.types.string.md)

Esta função se comporta como [file\_get\_contents()](function.file-get-contents.md), porém para
Phar.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o conteúdo do arquivo.

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
