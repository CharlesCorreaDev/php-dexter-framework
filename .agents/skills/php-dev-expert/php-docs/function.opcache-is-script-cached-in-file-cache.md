# Informa se um script está armazenado no cache de arquivo do OPCache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.opcache-is-script-cached-in-file-cache.php

---

# opcache\_is\_script\_cached\_in\_file\_cache

(PHP 8 >= 8.5.0)

opcache\_is\_script\_cached\_in\_file\_cache — Informa se um script está armazenado no cache de arquivo do OPCache

### Descrição

function **opcache\_is\_script\_cached\_in\_file\_cache**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Esta função verifica se um script PHP foi armazenado no cache do OPCache. Isso pode ser
usado para detectar melhor o "aquecimento" do cache para um script em particular.
Esta função apenas verifica o cache de arquivo, não o cache de memória. Para
verificar o de memória, use [opcache\_is\_script\_cached()](function.opcache-is-script-cached.md).

### Parâmetros

`filename`
:   O caminho para o script PHP a ser verificado.

### Valor Retornado

Retorna **`true`** se `filename` estiver em cache no OPCache,
**`false`** caso contrário.

### Veja também

- [opcache\_compile\_file()](function.opcache-compile-file.md) - Compila e armazena em cache um script PHP sem executá-lo
- [opcache\_is\_script\_cached()](function.opcache-is-script-cached.md) - Informa se um script é armazenado em cache no OPCache

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
