# Adiciona nova imagem à lista de imagens de objetos Gmagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.addimage.php

---

# Gmagick::addimage

(PECL gmagick >= Unknown)

Gmagick::addimage — Adiciona nova imagem à lista de imagens de objetos Gmagick

### Descrição

public function **Gmagick::addimage**([Gmagick](class.gmagick.md) `$source`): [Gmagick](class.gmagick.md)

Adiciona uma nova imagem ao objeto Gmagick a partir da posição atual do objeto de origem. Após a operação, a posição do iterador é movida para o final da lista.

### Parâmetros

`source`
:   O objeto Gmagick de origem

### Valor Retornado

O objeto Gmagick com a imagem adicionada

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
