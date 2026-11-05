# Desenha uma linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.line.php

---

# GmagickDraw::line

(PECL gmagick >= Unknown)

GmagickDraw::line — Desenha uma linha

### Descrição

public function **GmagickDraw::line**(  
    [float](language.types.float.md) `$sx`,  
    [float](language.types.float.md) `$sy`,  
    [float](language.types.float.md) `$ex`,  
    [float](language.types.float.md) `$ey`  
): [GmagickDraw](class.gmagickdraw.md)

Desenha uma linha na imagem usando a cor, a opacidade e a largura do traço atuais.

### Parâmetros

`sx`
:   Coordenada x do ponto inicial.

`sy`
:   Coordenada y do ponto inicial.

`ex`
:   Coordenada x do ponto final.

`ey`
:   Coordenada y do ponto final.

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
