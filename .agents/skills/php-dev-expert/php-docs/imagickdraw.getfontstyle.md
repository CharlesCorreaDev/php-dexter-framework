# Retorna o estilo da fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.getfontstyle.php

---

# ImagickDraw::getFontStyle

(PECL imagick 2, PECL imagick 3)

ImagickDraw::getFontStyle — Retorna o estilo da fonte

### Descrição

public function **ImagickDraw::getFontStyle**(): [int](language.types.integer.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Retorna o estilo de fonte usado ao fazer anotações com texto.

### Valor Retornado

Retorna uma constante [STYLE](imagick.constants.md#imagick.constants.styles)
(`imagick::STYLE_*`) associada ao objeto [ImagickDraw](class.imagickdraw.md)
ou 0 se nenhum estilo estiver definido.

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
