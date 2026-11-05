# Anota uma imagem com texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.annotateimage.php

---

# Gmagick::annotateimage

(PECL gmagick >= Unknown)

Gmagick::annotateimage — Anota uma imagem com texto

### Descrição

public function **Gmagick::annotateimage**(  
    [GmagickDraw](class.gmagickdraw.md) `$GmagickDraw`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`,  
    [float](language.types.float.md) `$angle`,  
    [string](language.types.string.md) `$text`  
): [Gmagick](class.gmagick.md)

Anota uma imagem com texto.

### Parâmetros

`GmagickDraw`
:   O objeto [GmagickDraw](class.gmagickdraw.md) que contém configurações para desenhar o texto.

`x`
:   Deslocamento horizontal em pixels à esquerda do texto.

`y`
:   Deslocamento vertical em pixels até a linha de base do texto.

`angle`
:   O ângulo no qual o texto será escrito.

`text`
:   A string a ser desenhada.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) com anotação feita.

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
