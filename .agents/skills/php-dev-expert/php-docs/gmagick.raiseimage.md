# Cria um efeito simulado de botão 3D

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.raiseimage.php

---

# Gmagick::raiseimage

(PECL gmagick >= Unknown)

Gmagick::raiseimage — Cria um efeito simulado de botão 3D

### Descrição

public function **Gmagick::raiseimage**(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [bool](language.types.boolean.md) `$raise`  
): [Gmagick](class.gmagick.md)

Cria um efeito simulado de botão tridimensional, iluminando e escurecendo as bordas da imagem. Os membros "width" e "height" definem a largura da borda vertical e horizontal do efeito.

### Parâmetros

`width`
:   Largura da área a elevar.

`height`
:   Altura da área a elevar.

`x`
:   Coordenada X.

`y`
:   Coordenada Y.

`raise`
:   Um valor diferente de zero cria um efeito 3D de elevação, caso contrário, tem um efeito de rebaixamento.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md).

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
