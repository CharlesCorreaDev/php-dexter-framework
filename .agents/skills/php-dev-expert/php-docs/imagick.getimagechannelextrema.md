# Obtém os extremos de um ou mais canais de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagechannelextrema.php

---

# Imagick::getImageChannelExtrema

(PECL imagick 2, PECL imagick 3)

Imagick::getImageChannelExtrema — Obtém os extremos de um ou mais canais de imagem

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::getImageChannelExtrema**([int](language.types.integer.md) `$channel`): [array](language.types.array.md)

Obtém os extremos de um ou mais canais de imagem. O valor de retorno é
um array associativo com as chaves "minima" (mínimos) e "maxima" (máximos).

### Parâmetros

`channel`
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
