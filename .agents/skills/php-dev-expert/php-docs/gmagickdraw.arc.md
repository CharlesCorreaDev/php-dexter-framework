# Desenha um arco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.arc.php

---

# GmagickDraw::arc

(PECL gmagick >= Unknown)

GmagickDraw::arc — Desenha um arco

### Descrição

public function **GmagickDraw::arc**(  
    [float](language.types.float.md) `$sx`,  
    [float](language.types.float.md) `$sy`,  
    [float](language.types.float.md) `$ex`,  
    [float](language.types.float.md) `$ey`,  
    [float](language.types.float.md) `$sd`,  
    [float](language.types.float.md) `$ed`  
): [GmagickDraw](class.gmagickdraw.md)

Desenha um arco dentro de um retângulo delimitador especificado na imagem.

### Parâmetros

`sx`
:   Coordenada x inicial do retângulo delimitador.

`sy`
:   Coordenada y inicial do retângulo delimitador.

`ex`
:   Coordenada x final do retângulo delimitador.

`ey`
:   Coordenada y final do retângulo delimitador.

`sd`
:   Ângulo inicial do arco.

`ed`
:   Ângulo final do arco.

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
