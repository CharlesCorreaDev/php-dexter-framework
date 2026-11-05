# Retorna a diferença em uma ou mais imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.compareimagechannels.php

---

# Imagick::compareImageChannels

(PECL imagick 2, PECL imagick 3)

Imagick::compareImageChannels — Retorna a diferença em uma ou mais imagens

### Descrição

public function **Imagick::compareImageChannels**([Imagick](class.imagick.md) `$image`, [int](language.types.integer.md) `$channelType`, [int](language.types.integer.md) `$metricType`): [array](language.types.array.md)

Compara uma ou mais imagens e retorna a imagem diferença.

### Parâmetros

`image`
:   Objeto Imagick contendo a imagem a ser comparada.

`channelType`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

`metricType`
:   Uma das [constantes de tipos de métricas](imagick.constants.md#imagick.constants.metric).

### Valor Retornado

Array consistindo de `new_wand` e
`distortion`.

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
