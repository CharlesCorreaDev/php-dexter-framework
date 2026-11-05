# Define os fatores de amostragem da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setsamplingfactors.php

---

# Gmagick::setsamplingfactors

(PECL gmagick >= Unknown)

Gmagick::setsamplingfactors — Define os fatores de amostragem da imagem

### Descrição

public function **Gmagick::setsamplingfactors**([array](language.types.array.md) `$factors`): [Gmagick](class.gmagick.md)

Define os fatores de amostragem da imagem.

### Parâmetros

`factors`
:   Um array de [float](language.types.float.md)s representando o fator de amostragem para cada componente de cor (na ordem RGB).

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
