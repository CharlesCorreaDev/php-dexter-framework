# Altera o valor de transparência de uma cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.mattefloodfillimage.php

---

# Imagick::matteFloodfillImage

(PECL imagick 2, PECL imagick 3)

Imagick::matteFloodfillImage — Altera o valor de transparência de uma cor

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::matteFloodfillImage**(  
    [float](language.types.float.md) `$alpha`,  
    [float](language.types.float.md) `$fuzz`,  
    [mixed](language.types.mixed.md) `$bordercolor`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

Altera o valor de transparência de qualquer pixel que corresponda
ao alvo e seja um vizinho imediato. Se o método
**`FillToBorderMethod`** for especificado, o valor da transparência
será alterado para qualquer pixel vizinho que não corresponda
à cor de borda da imagem (parâmetro "bordercolor").

### Parâmetros

`alpha`
:   O nível de transparência: 1.0 é totalmente opaco e 0.0 é totalmente
    transparente.

`fuzz`
:   O membro "fuzz" da imagem define quanta tolerância é aceitável para
    considerar duas cores iguais.

`bordercolor`
:   Um objeto [ImagickPixel](class.imagickpixel.md) ou string representando a cor de borda.

`x`
:   A coordenada x inicial da operação.

`y`
:   A coordenada y inicial da operação.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como terceiro parâmetro. Versões anteriores permitiam apenas um objeto [ImagickPixel](class.imagickpixel.md). |

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
