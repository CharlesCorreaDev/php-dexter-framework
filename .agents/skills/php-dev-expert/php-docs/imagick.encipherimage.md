# Cifra uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.encipherimage.php

---

# Imagick::encipherImage

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::encipherImage — Cifra uma imagem

### Descrição

public function **Imagick::encipherImage**([string](language.types.string.md) `$passphrase`): [bool](language.types.boolean.md)

Converte pixels simples em pixels criptografados. A imagem não é legível
até que seja decifrada usando [Imagick::decipherImage()](imagick.decipherimage.md)
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.9 ou superior.

### Parâmetros

`passphrase`
:   A senha.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Veja também

- [Imagick::decipherImage()](imagick.decipherimage.md) - Decifra uma imagem

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
