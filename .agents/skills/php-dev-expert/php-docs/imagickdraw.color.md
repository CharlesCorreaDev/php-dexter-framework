# Desenha cores na imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.color.php

---

# ImagickDraw::color

(PECL imagick 2, PECL imagick 3)

ImagickDraw::color — Desenha cores na imagem

### Descrição

public function **ImagickDraw::color**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`, [int](language.types.integer.md) `$paint`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha a cor na imagem usando a cor de preenchimento atual, começando na
posição especificada e usando o método de pintura especificado.

### Parâmetros

`x`
:   Coordernada x da pintura.

`y`
:   Coordernada y da pintura.

`paint`
:   Uma das constantes [PAINT](imagick.constants.md#imagick.constants.paint)
    (`imagick::PAINT_*`).

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
