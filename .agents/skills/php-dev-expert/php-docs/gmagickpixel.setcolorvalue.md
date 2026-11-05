# Define o valor normalizado de um dos canais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickpixel.setcolorvalue.php

---

# GmagickPixel::setcolorvalue

(PECL gmagick >= Unknown)

GmagickPixel::setcolorvalue — Define o valor normalizado de um dos canais

### Descrição

public function **GmagickPixel::setcolorvalue**([int](language.types.integer.md) `$color`, [float](language.types.float.md) `$value`): [GmagickPixel](class.gmagickpixel.md)

Define o valor do canal especificado deste objeto para o valor fornecido, que deve estar entre 0 e 1.
Esta função pode ser usada para fornecer um canal de opacidade para um objeto [GmagickPixel](class.gmagickpixel.md).

### Parâmetros

`color`
:   Uma das constantes de cor de canal Gmagick.

`value`
:   O valor a ser definido para este canal, variando de 0 a 1.

### Valor Retornado

O objeto [GmagickPixel](class.gmagickpixel.md).

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
