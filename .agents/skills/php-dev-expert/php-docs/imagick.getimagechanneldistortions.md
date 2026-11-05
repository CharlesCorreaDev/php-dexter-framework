# Obtém distorções de canal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagechanneldistortions.php

---

# Imagick::getImageChannelDistortions

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::getImageChannelDistortions — Obtém distorções de canal

### Descrição

public function **Imagick::getImageChannelDistortions**([Imagick](class.imagick.md) `$reference`, [int](language.types.integer.md) `$metric`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [float](language.types.float.md)

Compara um ou mais canais de uma imagem com uma reconstruída e retorna as métricas de distorção especificadas.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

### Parâmetros

`reference`
:   Objeto Imagick contendo a imagem de referência.

`metric`
:   Consulte esta lista de [constantes de tipos de métricas](imagick.constants.md#imagick.constants.metric).

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

### Valor Retornado

Retorna um [float](language.types.float.md) descrevendo a distorção do canal.

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
