# Retorna o perfil nomeado de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageprofile.php

---

# Imagick::getImageProfile

(PECL imagick 2, PECL imagick 3)

Imagick::getImageProfile — Retorna o perfil nomeado de imagem

### Descrição

public function **Imagick::getImageProfile**([string](language.types.string.md) `$name`): [string](language.types.string.md)

Retorna o perfil nomeado de imagem.

### Parâmetros

`name`
:   O nome do perfil a retornar.

### Valor Retornado

Retorna uma string contendo o perfil de imagem.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
