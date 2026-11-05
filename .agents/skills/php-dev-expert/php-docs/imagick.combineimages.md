# Combina uma ou mais imagens em uma única imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.combineimages.php

---

# Imagick::combineImages

(PECL imagick 2, PECL imagick 3)

Imagick::combineImages — Combina uma ou mais imagens em uma única imagem

### Descrição

public function **Imagick::combineImages**([int](language.types.integer.md) `$channelType`): [Imagick](class.imagick.md)

Combina uma ou mais imagens em uma única imagem. Os valores de
escala de cinza dos pixels de cada imagem na sequência são atribuídos
na ordem dos canais especificados da imagem combinada. A
ordem típica seria imagem 1 => Vermelho, 2 => Verde,
3 => Azul, etc.

### Parâmetros

`channelType`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

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
