# Define o canal alfa da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagealphachannel.php

---

# Imagick::setImageAlphaChannel

(PECL imagick 2 >= 2.1.0, PECL imagick 3)

Imagick::setImageAlphaChannel — Define o canal alfa da imagem

### Descrição

public function **Imagick::setImageAlphaChannel**([int](language.types.integer.md) `$mode`): [bool](language.types.boolean.md)

Ativa ou desativa o canal alfa da imagem. O parâmetro `mode`
deve ser uma das constantes **`Imagick::ALPHACHANNEL_*`**.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.8 ou superior.

### Parâmetros

`mode`
:   Uma das constantes **`Imagick::ALPHACHANNEL_*`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Veja também

- [Imagick::setImageMatte()](imagick.setimagematte.md) - Define o canal fosco da imagem
- [Constantes de Canal Alfa do Imagick](imagick.constants.md#imagick.constants.alphachannel)

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
