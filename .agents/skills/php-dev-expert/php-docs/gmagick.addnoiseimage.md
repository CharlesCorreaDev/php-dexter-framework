# Adiciona ruído aleatório à imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.addnoiseimage.php

---

# Gmagick::addnoiseimage

(PECL gmagick >= Unknown)

Gmagick::addnoiseimage — Adiciona ruído aleatório à imagem

### Descrição

public function **Gmagick::addnoiseimage**([int](language.types.integer.md) `$noise_type`): [Gmagick](class.gmagick.md)

Adiciona ruído aleatório à imagem.

### Parâmetros

`noise_type`
:   O tipo de ruído. Consulte esta lista de [constantes de ruído](gmagick.constants.md#gmagick.constants.noise).

### Valor Retornado

O objeto Gmagick com o ruído adicionado.

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
