# Compõe uma imagem em outra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.compositeimage.php

---

# Gmagick::compositeimage

(PECL gmagick >= Unknown)

Gmagick::compositeimage — Compõe uma imagem em outra

### Descrição

public function **Gmagick::compositeimage**(  
    [Gmagick](class.gmagick.md) `$source`,  
    [int](language.types.integer.md) `$COMPOSE`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [Gmagick](class.gmagick.md)

Compõe uma imagem em outra na posição especificada.

### Parâmetros

`source`
:   Objeto [Gmagick](class.gmagick.md) que contém a imagem a ser composta.

`COMPOSE`
:   Operador de composição.

`x`
:   A posição X da imagem composta.

`y`
:   A posição Y da imagem composta.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) com composição.

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
