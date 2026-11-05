# Obtém representação em texto da entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.tostring.php

---

# RarEntry::\_\_toString

(PECL rar >= 2.0.0)

RarEntry::\_\_toString — Obtém representação em texto da entrada

### Descrição

public function **RarEntry::\_\_toString**(): [string](language.types.string.md)

**RarEntry::\_\_toString()** retorna uma representação textual para esta entrada. Inclui se
a entrada é um arquivo ou diretório (links simbólicos e outros objetos especiais serão tratados como arquivos),
o nome UTF-8 da entrada e seu CRC. A forma e o conteúdo desta representação podem ser alterados no futuro,
portanto não podem ser considerados confiáveis.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma representação textual para a entrada.

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
