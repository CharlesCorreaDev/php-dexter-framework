# Informa se um script é armazenado em cache no OPCache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.opcache-is-script-cached.php

---

# opcache\_is\_script\_cached

(PHP 5 >= 5.5.11, PHP 7, PHP 8, PECL ZendOpcache >= 7.0.4)

opcache\_is\_script\_cached — Informa se um script é armazenado em cache no OPCache

### Descrição

function **opcache\_is\_script\_cached**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Esta função verifica se um script PHP foi armazenado em cache no OPCache. Isso pode ser
usado para detectar mais facilmente o "aquecimento" do cache para um determinado script.
Esta função verifica apenas o cache na memória, não o cache do arquivo.
Para verificar o cache de arquivo, use
[opcache\_is\_script\_cached\_in\_file\_cache()](function.opcache-is-script-cached-in-file-cache.md).

### Parâmetros

`filename`
:   O caminho para o script PHP a ser verificado.

### Valor Retornado

Retorna **`true`** se `filename` estiver armazenado no cache de memória do OPCache,
**`false`** caso contrário.

### Veja também

- [opcache\_compile\_file()](function.opcache-compile-file.md) - Compila e armazena em cache um script PHP sem executá-lo
- [opcache\_is\_script\_cached\_in\_file\_cache()](function.opcache-is-script-cached-in-file-cache.md) - Informa se um script está armazenado no cache de arquivo do OPCache

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
