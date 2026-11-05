# Altera o valor da cor de qualquer pixel que corresponda ao alvo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.colorfloodfillimage.php

---

# Imagick::colorFloodfillImage

(PECL imagick 2, PECL imagick 3)

Imagick::colorFloodfillImage — Altera o valor da cor de qualquer pixel que corresponda ao alvo

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::colorFloodfillImage**(  
    [mixed](language.types.mixed.md) `$fill`,  
    [float](language.types.float.md) `$fuzz`,  
    [mixed](language.types.mixed.md) `$bordercolor`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

Altera o valor da cor de qualquer pixel que corresponda ao alvo e seja um
vizinho imediato.

### Parâmetros

`fill`
:   Objeto ImagickPixel contendo a cor de preenchimento

`fuzz`
:   A quantidade de fuzz. Por exemplo, definir fuzz para 10 e a cor vermelha
    em intensidades de 100 e 102, respectivamente, agora são interpretadas como a
    mesma cor para fins de preenchimento.

`bordercolor`
:   Objeto ImagickPixel contendo a cor da borda

`x`
:   X da posição inicial do preenchimento

`y`
:   Y da posição inicial do preenchimento

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como primeiro e terceiro parâmetro. As versões anteriores permitiam apenas um objeto ImagickPixel. |

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
