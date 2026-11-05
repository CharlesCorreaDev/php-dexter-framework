# Redefine página de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.resetimagepage.php

---

# Imagick::resetImagePage

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::resetImagePage — Redefine página de imagem

### Descrição

public function **Imagick::resetImagePage**([string](language.types.string.md) `$page`): [bool](language.types.boolean.md)

A definição da página como uma string. A string deve ser no formato WxH+x+y.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

### Parâmetros

`page`
:   A definição da página. Por exemplo, `7168x5147+0+0`.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
