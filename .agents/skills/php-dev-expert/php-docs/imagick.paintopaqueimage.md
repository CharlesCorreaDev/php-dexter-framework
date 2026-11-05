# Altera qualquer pixel que corresponda à cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.paintopaqueimage.php

---

# Imagick::paintOpaqueImage

(PECL imagick 2, PECL imagick 3)

Imagick::paintOpaqueImage — Altera qualquer pixel que corresponda à cor

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::paintOpaqueImage**(  
    [mixed](language.types.mixed.md) `$target`,  
    [mixed](language.types.mixed.md) `$fill`,  
    [float](language.types.float.md) `$fuzz`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

Altera qualquer pixel que corresponda à cor definida pelo preenchimento.

### Parâmetros

`target`
:   Altere esta cor de destino para a cor de preenchimento da imagem. Um
    objeto ImagickPixel ou uma string que representa a cor de destino.

`fill`
:   Um objeto ImagickPixel ou uma string que representa a cor de preenchimento.

`fuzz`
:   O membro fuzz da imagem define quanta tolerância é aceitável para
    considerar duas cores iguais.

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como primeiro e segundo parâmetro. As versões anteriores permitiam apenas um objeto ImagickPixel. |

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
