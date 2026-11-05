# Retorna os metadados da entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pharfileinfo.hasmetadata.php

---

# PharFileInfo::hasMetadata

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.2.0)

PharFileInfo::hasMetadata — Retorna os metadados da entrada

### Descrição

public function **PharFileInfo::hasMetadata**(): [bool](language.types.boolean.md)

Retorna os metadados de um arquivo dentro de um arquivo phar.

### Parâmetros

Sem parâmetros.

### Valor Retornado

Retorna **`false`** se nenhum metadado for definido ou for **`null`**, **`true`** se os metadados não forem **`null`**

### Veja também

- [PharFileInfo::setMetadata()](pharfileinfo.setmetadata.md) - Define metadados específicos de arquivo salvos com um arquivo
- [PharFileInfo::getMetadata()](pharfileinfo.getmetadata.md) - Retorna metadados específicos do arquivo salvos com um arquivo
- [PharFileInfo::delMetadata()](pharfileinfo.delmetadata.md) - Exclui os metadados da entrada
- [Phar::setMetadata()](phar.setmetadata.md) - Define metadados do arquivo phar
- [Phar::hasMetadata()](phar.hasmetadata.md) - Informa se o phar tem metadados globais
- [Phar::getMetadata()](phar.getmetadata.md) - Retorna metadados do arquivo phar

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
