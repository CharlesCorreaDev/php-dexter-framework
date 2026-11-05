# Analisa as cores dentro de imagens de referência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.quantizeimages.php

---

# Gmagick::quantizeimages

(PECL gmagick >= Unknown)

Gmagick::quantizeimages — Analisa as cores dentro de imagens de referência

### Descrição

public function **Gmagick::quantizeimages**(  
    [int](language.types.integer.md) `$numColors`,  
    [int](language.types.integer.md) `$colorspace`,  
    [int](language.types.integer.md) `$treeDepth`,  
    [bool](language.types.boolean.md) `$dither`,  
    [bool](language.types.boolean.md) `$measureError`  
): [Gmagick](class.gmagick.md)

Analisa as cores dentro de uma sequência de imagens e escolhe um número fixo de
cores para representar a imagem. O objetivo do algoritmo é minimizar a,
diferença de cor entre a imagem de entrada e de saída e, ao mesmo tempo, minimizar o tempo de processamento.

### Parâmetros

`numColors`
:   O número de cores.

`colorspace`
:   Executa a redução de cores neste espaço de cores, normalmente RGBColorspace.

`treeDepth`
:   Normalmente, esse valor inteiro é zero ou um. Zero ou um diz à função
    para escolher uma profundidade de árvore ideal de Log4(número\_de\_cores). Uma árvore com essa profundidade geralmente
    permite a melhor representação da imagem de referência com a menor quantidade de memória
    e a velocidade computacional mais rápida. Em alguns casos, como uma imagem com baixa dispersão de
    cores (poucos números de cores), é necessário um valor diferente de Log4(number\_colors).
    Para expandir completamente a árvore de cores, use o valor 8.

`dither`
:   Um valor diferente de zero distribui a diferença entre uma imagem original e o algoritmo de redução de cor correspondente para pixels vizinhos ao longo de uma curva de Hilbert.

`measureError`
:   Um valor diferente de zero mede a diferença entre as imagens original e quantizada. Essa diferença é o erro total de quantização. O erro é calculado somando todos os pixels de uma imagem a distância ao quadrado no espaço RGB entre cada valor de pixel de referência e seu valor quantizado.

### Valor Retornado

O objeto Gmagick em caso de sucesso.

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
