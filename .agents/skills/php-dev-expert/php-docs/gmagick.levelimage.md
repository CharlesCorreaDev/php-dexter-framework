# Ajusta os níveis de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.levelimage.php

---

# Gmagick::levelimage

(PECL gmagick >= Unknown)

Gmagick::levelimage — Ajusta os níveis de uma imagem

### Descrição

public function **Gmagick::levelimage**(  
    [float](language.types.float.md) `$blackPoint`,  
    [float](language.types.float.md) `$gamma`,  
    [float](language.types.float.md) `$whitePoint`,  
    [int](language.types.integer.md) `$channel` = Gmagick::CHANNEL\_DEFAULT  
): [mixed](language.types.mixed.md)

Ajusta os níveis de uma imagem dimensionando as cores que ficam entre os pontos brancos e pretos
especificados para toda a faixa de Quantum disponível. Os parâmetros fornecidos representam os pontos preto, médio
e branco. O ponto preto especifica a cor mais escura da imagem. As cores mais escuras que o ponto
preto são definidas como zero. O ponto médio especifica uma correção de gama a ser aplicada à imagem. O ponto branco
especifica a cor mais clara da imagem. As cores mais claras que o ponto branco são definidas com o
valor máximo de Quantum.

### Parâmetros

`blackPoint`
:   O ponto preto da imagem.

`gamma`
:   O valor de gama.

`whitePoint`
:   O ponto branco da imagem.

`channel`
:   Pode ser fornecida qualquer constante de canal válida para o modo de canal.
    Para aplicar a mais de um canal, constantes de tipo de canal devem ser combinadas usando
    operadores binários. Consulte esta lista de [constantes de canal](gmagick.constants.md#gmagick.constants.channel).

### Valor Retornado

Objeto [Gmagick](class.gmagick.md) com imagem nivelada.

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
