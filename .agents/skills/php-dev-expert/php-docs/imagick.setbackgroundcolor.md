# Define a cor de fundo padrão do objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setbackgroundcolor.php

---

# Imagick::setBackgroundColor

(PECL imagick 2, PECL imagick 3)

Imagick::setBackgroundColor — Define a cor de fundo padrão do objeto

### Descrição

public function **Imagick::setBackgroundColor**([mixed](language.types.mixed.md) `$background`): [bool](language.types.boolean.md)

Define a cor de fundo padrão do objeto.

### Parâmetros

`background`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
