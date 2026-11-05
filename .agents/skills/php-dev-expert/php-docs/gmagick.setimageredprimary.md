# Define o ponto primário vermelho da cromaticidade da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimageredprimary.php

---

# Gmagick::setimageredprimary

(PECL gmagick >= Unknown)

Gmagick::setimageredprimary — Define o ponto primário vermelho da cromaticidade da imagem

### Descrição

public function **Gmagick::setimageredprimary**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [Gmagick](class.gmagick.md)

Define o ponto primário vermelho da cromaticidade da imagem.

### Parâmetros

`x`
:   Coordenada x do ponto primário vermelho.

`y`
:   Coordenada y do ponto primário vermelho.

### Valor Retornado

O objeto Gmagick em caso de sucesso.

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
