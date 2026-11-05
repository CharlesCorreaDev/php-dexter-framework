# Desenha um arco no sentido horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-arcn.php

---

# ps\_arcn

(PECL ps >= 1.1.0)

ps\_arcn — Desenha um arco no sentido horário

### Descrição

function **ps\_arcn**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`,  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$alpha`,  
    [float](language.types.float.md) `$beta`  
): [bool](language.types.boolean.md)

Desenha uma parte de um círculo com um ponto médio em
(`x`, `y`). O arco começa em um
ângulo `alpha` e termina em um ângulo
`beta`. Ele é desenhado no sentido horário (use
[ps\_arc()](function.ps-arc.md) para desenhar no sentido anti-horário). O subcaminho adicionado ao
caminho atual começa no arco no ângulo `beta` e
termina no arco em ângulo `alpha`.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`x`
:   A coordenada x do ponto médio do círculo.

`y`
:   A coordenada y do ponto médio do círculo.

`radius`
:   O raio do círculo.

`alpha`
:   O ângulo inicial em graus.

`beta`
:   O ângulo final em graus.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_arc()](function.ps-arc.md) - Desenha um arco no sentido anti-horário

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
