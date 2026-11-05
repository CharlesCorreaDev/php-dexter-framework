# Define o ponto primário azul da cromaticidade da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimageblueprimary.php

---

# Gmagick::setimageblueprimary

(PECL gmagick >= Unknown)

Gmagick::setimageblueprimary — Define o ponto primário azul da cromaticidade da imagem

### Descrição

public function **Gmagick::setimageblueprimary**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [Gmagick](class.gmagick.md)

Define o ponto primário azul da cromaticidade da imagem.

### Parâmetros

`x`
:   A coordenada x do ponto primário azul.

`y`
:   A coordenada y do ponto primário azul.

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
