# Desenha texto na imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.annotation.php

---

# ImagickDraw::annotation

(PECL imagick 2, PECL imagick 3)

ImagickDraw::annotation — Desenha texto na imagem

### Descrição

public function **ImagickDraw::annotation**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`, [string](language.types.string.md) `$text`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha texto na imagem.

### Parâmetros

`x`
:   A coodernada x onde o texto será desenhado

`y`
:   A coodernada y onde o texto será desenhado

`text`
:   O texto a ser desenhado na imagem

### Valor Retornado

Nenhum valor é retornado.

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
