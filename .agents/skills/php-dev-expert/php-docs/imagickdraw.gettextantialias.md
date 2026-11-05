# Retorna a configuração atual de antialias do texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.gettextantialias.php

---

# ImagickDraw::getTextAntialias

(PECL imagick 2, PECL imagick 3)

ImagickDraw::getTextAntialias — Retorna a configuração atual de antialias do texto

### Descrição

public function **ImagickDraw::getTextAntialias**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Retorna a configuração atual de suavização de texto, que determina se o texto será
suavizado. O texto é suavizado por padrão.

### Valor Retornado

Retorna **`true`** se o texto for suavizado e **`false`** se não.

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
