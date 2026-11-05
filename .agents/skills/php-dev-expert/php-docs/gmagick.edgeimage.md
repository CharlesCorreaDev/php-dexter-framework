# Melhora as bordas da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.edgeimage.php

---

# Gmagick::edgeimage

(PECL gmagick >= Unknown)

Gmagick::edgeimage — Melhora as bordas da imagem

### Descrição

public function **Gmagick::edgeimage**([float](language.types.float.md) `$radius`): [Gmagick](class.gmagick.md)

Aprimora as bordas da imagem com um filtro de convolução de um determinado raio. Use o raio 0 e ele será selecionado automaticamente.

### Parâmetros

`radius`
:   O raio da operação.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) com bordas aprimoradas.

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
