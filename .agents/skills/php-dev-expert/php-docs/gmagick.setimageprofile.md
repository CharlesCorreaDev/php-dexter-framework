# Adiciona um perfil nomeado ao objeto Gmagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimageprofile.php

---

# Gmagick::setimageprofile

(PECL gmagick >= Unknown)

Gmagick::setimageprofile — Adiciona um perfil nomeado ao objeto Gmagick

### Descrição

public function **Gmagick::setimageprofile**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$profile`): [Gmagick](class.gmagick.md)

Adiciona um perfil nomeado ao objeto Gmagick. Se já existir um perfil com o mesmo nome, ele será substituído.
Este método difere do método Gmagick::profileimage() porque não aplica nenhum perfil de cores CMS.

### Parâmetros

`name`
:   Nome do perfil a ser adicionado ou removido: ICC, IPTC ou perfil genérico.

`profile`
:   O perfil.

### Valor Retornado

O objeto Gmagick em caso de sucesso.

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
