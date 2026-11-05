# Compara uma imagem com uma imagem reconstruída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagedistortion.php

---

# Imagick::getImageDistortion

(PECL imagick 2, PECL imagick 3)

Imagick::getImageDistortion — Compara uma imagem com uma imagem reconstruída

### Descrição

public function **Imagick::getImageDistortion**(MagickWand `$reference`, [int](language.types.integer.md) `$metric`): [float](language.types.float.md)

Compara uma imagem com uma imagem reconstruída e retorna a métrica de distorção
especificada.

### Parâmetros

`reference`
:   Objeto Imagick para comparação.

`metric`
:   Uma das [constantes de tipos de métricas](imagick.constants.md#imagick.constants.metric).

### Valor Retornado

Retorna a métrica de distorção usada na imagem (ou a melhor estimativa
dela).

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
