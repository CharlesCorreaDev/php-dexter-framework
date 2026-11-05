# Remove o perfil de imagem nomeado e o retorna

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.removeimageprofile.php

---

# Gmagick::removeimageprofile

(PECL gmagick >= Unknown)

Gmagick::removeimageprofile — Remove o perfil de imagem nomeado e o retorna

### Descrição

public function **Gmagick::removeimageprofile**([string](language.types.string.md) `$name`): [string](language.types.string.md)

Remove o perfil de imagem nomeado e o retorna.

### Parâmetros

`name`
:   Nome do perfil a ser retornado: ICC, IPTC ou perfil genérico.

### Valor Retornado

O perfil nomeado.

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
