# Obtém a média e o desvio padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagechannelmean.php

---

# Imagick::getImageChannelMean

(PECL imagick 2, PECL imagick 3)

Imagick::getImageChannelMean — Obtém a média e o desvio padrão

### Descrição

public function **Imagick::getImageChannelMean**([int](language.types.integer.md) `$channel`): [array](language.types.array.md)

Obtém a média e o desvio padrão de um ou mais canais de imagem.

### Parâmetros

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

### Valor Retornado

Retorna um array com os membros `"mean"` (média) e `"standardDeviation"`
(desvio padrão).

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
