# Remove o perfil de imagem nomeado e o retorna

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.removeimageprofile.php

---

# Imagick::removeImageProfile

(PECL imagick 2, PECL imagick 3)

Imagick::removeImageProfile — Remove o perfil de imagem nomeado e o retorna

### Descrição

public function **Imagick::removeImageProfile**([string](language.types.string.md) `$name`): [string](language.types.string.md)

Remove o perfil de imagem nomeado e o retorna.

### Parâmetros

`name`

### Valor Retornado

Retorna uma string contendo o perfil da imagem.

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
