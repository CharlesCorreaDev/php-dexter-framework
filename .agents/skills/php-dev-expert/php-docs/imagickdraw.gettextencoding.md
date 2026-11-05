# Retorna o conjunto de caracteres usado para anotações de texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.gettextencoding.php

---

# ImagickDraw::getTextEncoding

(PECL imagick 2, PECL imagick 3)

ImagickDraw::getTextEncoding — Retorna o conjunto de caracteres usado para anotações de texto

### Descrição

public function **ImagickDraw::getTextEncoding**(): [false](language.types.singleton.md)|[string](language.types.string.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Retorna uma string que especifica o conjunto de caracteres usado para anotações de texto.

### Valor Retornado

Retorna uma string que especifica o conjunto de caracteres
ou false se nenhum conjunto estiver definido.

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
