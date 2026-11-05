# Adiciona ou remove um perfil de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.profileimage.php

---

# Imagick::profileImage

(PECL imagick 2, PECL imagick 3)

Imagick::profileImage — Adiciona ou remove um perfil de uma imagem

### Descrição

public function **Imagick::profileImage**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$profile` = ?): [bool](language.types.boolean.md)

Adiciona ou remove um perfil ICC, IPTC
ou genérico de uma imagem.
Se `profile` for **`null`**,
o perfil que tiver sido adicionado será removido da imagem em vez de adicionado.

Para remover todos os perfis da imagem, use `'*'`
no parâmetro `name` e **`null`** no
parâmetro `profile`.

### Parâmetros

`name`
:   O nome do perfil.

`profile`
:   Os dados do perfil.
    Se o valor for definido para **`null`**, o perfil especificado será removido.

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
