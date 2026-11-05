# Adiciona um perfil nomeado ao objeto Imagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimageprofile.php

---

# Imagick::setImageProfile

(PECL imagick 2, PECL imagick 3)

Imagick::setImageProfile — Adiciona um perfil nomeado ao objeto Imagick

### Descrição

public function **Imagick::setImageProfile**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$profile`): [bool](language.types.boolean.md)

Adiciona um perfil nomeado ao objeto Imagick. Se já existir
um perfil com o mesmo nome, ele será substituído. Este
método difere do método Imagick::ProfileImage() porque
não aplica nenhum perfil de cores CMS.

### Parâmetros

`name`

`profile`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
