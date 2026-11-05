# Decifra uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.decipherimage.php

---

# Imagick::decipherImage

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::decipherImage — Decifra uma imagem

### Descrição

public function **Imagick::decipherImage**([string](language.types.string.md) `$passphrase`): [bool](language.types.boolean.md)

Decifra a imagem que foi cifrada antes. A imagem deve ser criptografada
usando [Imagick::encipherImage()](imagick.encipherimage.md).
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.9 ou superior.

### Parâmetros

`passphrase`
:   A senha

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Veja também

- [Imagick::encipherImage()](imagick.encipherimage.md) - Cifra uma imagem

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
