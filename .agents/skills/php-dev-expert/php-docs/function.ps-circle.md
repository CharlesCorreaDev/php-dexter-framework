# Desenha um círculo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-circle.php

---

# ps\_circle

(PECL ps >= 1.1.0)

ps\_circle — Desenha um círculo

### Descrição

function **ps\_circle**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`,  
    [float](language.types.float.md) `$radius`  
): [bool](language.types.boolean.md)

Desenha um círculo com seu ponto médio em (`x`,
`y`). O círculo começa e termina na posição
(`x`+`radius`,
`y`). Se esta função for chamada fora de um caminho, ela
iniciará um novo caminho. Se for chamada dentro de um caminho, ela adicionará o círculo
como um subcaminho. Se a última operação de desenho não terminar no ponto
(`x`+`radius`,
`y`), haverá uma lacuna no caminho.

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

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_arc()](function.ps-arc.md) - Desenha um arco no sentido anti-horário
- [ps\_arcn()](function.ps-arcn.md) - Desenha um arco no sentido horário

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
