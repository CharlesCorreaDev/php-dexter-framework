# Desenha um retângulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-rect.php

---

# ps\_rect

(PECL ps >= 1.1.0)

ps\_rect — Desenha um retângulo

### Descrição

function **ps\_rect**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`,  
    [float](language.types.float.md) `$width`,  
    [float](language.types.float.md) `$height`  
): [bool](language.types.boolean.md)

Desenha um retângulo com seu canto inferior esquerdo em (`x`,
`y`). O retângulo começa e termina em seu canto inferior esquerdo.
Se esta função for chamada fora de um caminho, ela iniciará um novo caminho.
Se for chamada dentro de um caminho, ela adicionará o retângulo como um subcaminho. Se
a última operação de desenho não terminar no canto inferior esquerdo, então haverá
uma lacuna no caminho.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`x`
:   Coordenada x do canto inferior esquerdo do retângulo.

`y`
:   Coordenada y do canto inferior esquerdo do retângulo.

`width`
:   A largura da imagem.

`height`
:   A altura da imagem.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_arc()](function.ps-arc.md) - Desenha um arco no sentido anti-horário
- [ps\_circle()](function.ps-circle.md) - Desenha um círculo
- [ps\_lineto()](function.ps-lineto.md) - Desenha uma linha

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
