# Desenha uma elipse na imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.ellipse.php

---

# GmagickDraw::ellipse

(PECL gmagick >= Unknown)

GmagickDraw::ellipse — Desenha uma elipse na imagem

### Descrição

public function **GmagickDraw::ellipse**(  
    [float](language.types.float.md) `$ox`,  
    [float](language.types.float.md) `$oy`,  
    [float](language.types.float.md) `$rx`,  
    [float](language.types.float.md) `$ry`,  
    [float](language.types.float.md) `$start`,  
    [float](language.types.float.md) `$end`  
): [GmagickDraw](class.gmagickdraw.md)

Desenha uma elipse na imagem.

### Parâmetros

`ox`
:   Coordenada x da origem.

`oy`
:   Coordenada y da origem.

`rx`
:   Raio no eixo x.

`ry`
:   Raio no eixo y.

`start`
:   Ângulo inicial em graus.

`end`
:   Ângulo final em graus.

### Valor Retornado

O objeto [GmagickDraw](class.gmagickdraw.md).

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
