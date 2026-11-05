# Adiciona ou remove um perfil de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.profileimage.php

---

# Gmagick::profileimage

(PECL gmagick >= Unknown)

Gmagick::profileimage — Adiciona ou remove um perfil de uma imagem

### Descrição

public function **Gmagick::profileimage**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$profile`): [Gmagick](class.gmagick.md)

Adiciona ou remove um perfil ICC, IPTC ou genérico de uma imagem. Se o perfil for **`null`**, ele será removido da imagem adicionada.
Use um nome `*` e um perfil **`null`** para remover todos os perfis da imagem.

### Parâmetros

`name`
:   Nome do perfil a ser adicionado ou removido: ICC, IPTC ou perfil genérico.

`profile`
:   O perfil.

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
