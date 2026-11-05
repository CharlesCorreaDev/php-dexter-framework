# Define a cor de fundo da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagebackgroundcolor.php

---

# Imagick::setImageBackgroundColor

(PECL imagick 2, PECL imagick 3)

Imagick::setImageBackgroundColor — Define a cor de fundo da imagem

### Descrição

public function **Imagick::setImageBackgroundColor**([mixed](language.types.mixed.md) `$background`): [bool](language.types.boolean.md)

Define a cor de fundo da imagem.

### Parâmetros

`background`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como parâmetro. As versões anteriores permitiam apenas um objeto ImagickPixel. |

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
