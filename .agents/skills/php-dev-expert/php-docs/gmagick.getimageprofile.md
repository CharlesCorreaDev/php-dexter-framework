# Retorna o perfil de imagem nomeado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.getimageprofile.php

---

# Gmagick::getimageprofile

(PECL gmagick >= Unknown)

Gmagick::getimageprofile — Retorna o perfil de imagem nomeado

### Descrição

public function **Gmagick::getimageprofile**([string](language.types.string.md) `$name`): [string](language.types.string.md)

Retorna o perfil de imagem nomeado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string contendo o perfil da imagem.

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
