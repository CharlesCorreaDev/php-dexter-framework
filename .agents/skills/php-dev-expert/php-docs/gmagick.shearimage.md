# Criando um paralelogramo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.shearimage.php

---

# Gmagick::shearimage

(PECL gmagick >= Unknown)

Gmagick::shearimage — Criando um paralelogramo

### Descrição

public function **Gmagick::shearimage**([mixed](language.types.mixed.md) `$color`, [float](language.types.float.md) `$xShear`, [float](language.types.float.md) `$yShear`): [Gmagick](class.gmagick.md)

Desliza uma borda de uma imagem ao longo do eixo X ou Y, criando um paralelogramo.
Um cisalhamento na direção X desliza uma aresta ao longo do eixo X, enquanto um cisalhamento na direção Y desliza uma aresta ao longo do eixo Y.
A quantidade de cisalhamento é controlada por um ângulo de cisalhamento. Para cisalhamentos na direção X, x\_shear é medido em relação ao
eixo Y e, da mesma forma, para cisalhamentos na direção Y, y\_shear é medido em relação ao eixo X. Os triângulos vazios que sobrarem
do cisalhamento da imagem são preenchidos com a cor de fundo.

### Parâmetros

`color`
:   A varinha de pixel de fundo.

`xShear`
:   O número de graus para cisalhar a imagem no eixo X.

`yShear`
:   O número de graus para cisalhar a imagem no eixo Y.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md).

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
