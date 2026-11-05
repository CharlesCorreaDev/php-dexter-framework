# Retorna estatísticas para cada canal na imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagechannelstatistics.php

---

# Imagick::getImageChannelStatistics

(PECL imagick 2, PECL imagick 3)

Imagick::getImageChannelStatistics — Retorna estatísticas para cada canal na imagem

### Descrição

public function **Imagick::getImageChannelStatistics**(): [array](language.types.array.md)

Retorna estatísticas para cada canal na imagem. As estatísticas incluem
a profundidade do canal, seus mínimos e máximos, a média e o desvio
padrão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
