# Adiciona um comentário à sua imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.commentimage.php

---

# Gmagick::commentimage

(PECL gmagick >= Unknown)

Gmagick::commentimage — Adiciona um comentário à sua imagem

### Descrição

public function **Gmagick::commentimage**([string](language.types.string.md) `$comment`): [Gmagick](class.gmagick.md)

Adiciona um comentário à sua imagem.

### Parâmetros

`comment`
:   O comentário a ser adicionado.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) com comentário adicionado.

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
