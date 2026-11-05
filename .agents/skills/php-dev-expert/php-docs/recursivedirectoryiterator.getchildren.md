# Retorna um iterador para o elemento atual se ele for um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivedirectoryiterator.getchildren.php

---

# RecursiveDirectoryIterator::getChildren

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

RecursiveDirectoryIterator::getChildren — Retorna um iterador para o elemento atual se ele for um diretório

### Descrição

public function **RecursiveDirectoryIterator::getChildren**(): [RecursiveDirectoryIterator](class.recursivedirectoryiterator.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome do arquivo, informações do arquivo ou $this dependendo das flags definidas.
Veja o [FilesystemIterator
constantes](class.filesystemiterator.md#filesystemiterator.constants).

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
