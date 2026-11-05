# Desenha um arco elíptico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathellipticarcabsolute.php

---

# ImagickDraw::pathEllipticArcAbsolute

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pathEllipticArcAbsolute — Desenha um arco elíptico

### Descrição

public function **ImagickDraw::pathEllipticArcAbsolute**(  
    [float](language.types.float.md) `$rx`,  
    [float](language.types.float.md) `$ry`,  
    [float](language.types.float.md) `$x_axis_rotation`,  
    [bool](language.types.boolean.md) `$large_arc`,  
    [bool](language.types.boolean.md) `$sweep`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha um arco elíptico do ponto atual até (x, y) usando coordenadas
absolutas. O tamanho e a orientação da elipse são definidos por dois
raios (rx, ry) e um xAxisRotation, que indica como a elipse como
um todo é rotacionada em relação ao sistema de coordenadas atual. O centro
(cx, cy) da elipse é calculado automaticamente para satisfazer as
restrições impostas pelos outros parâmetros. largeArcFlag e sweepFlag
contribuem para os cálculos automáticos e ajudam a determinar como o arco
é desenhado. Se `large_arc` for **`true`**, o maior dos arcos disponíveis será
desenhado. Se `sweep` for true, o arco correspondente a uma rotação
no sentido horário será desenhado.

### Parâmetros

`rx`
:   raio x

`ry`
:   raio y

`x_axis_rotation`
:   rotação do eixo x

`large_arc`
:   opção de arco grande

`sweep`
:   opção de varredura

`x`
:   coordenada x

`y`
:   coordenada y

### Valor Retornado

Nenhum valor é retornado.

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
