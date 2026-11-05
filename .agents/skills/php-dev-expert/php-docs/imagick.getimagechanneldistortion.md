# Compara canais de uma imagem com uma imagem reconstruída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagechanneldistortion.php

---

# Imagick::getImageChannelDistortion

(PECL imagick 2, PECL imagick 3)

Imagick::getImageChannelDistortion — Compara canais de uma imagem com uma imagem reconstruída

### Descrição

public function **Imagick::getImageChannelDistortion**([Imagick](class.imagick.md) `$reference`, [int](language.types.integer.md) `$channel`, [int](language.types.integer.md) `$metric`): [float](language.types.float.md)

Compara um ou mais canais de uma imagem com uma reconstruída
e retorna a métrica de distorção especificada.

### Parâmetros

`reference`
:   Objeto Imagick a ser comparado.

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

`metric`
:   Uma das [constantes de tipos de métricas](imagick.constants.md#imagick.constants.metric).

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
