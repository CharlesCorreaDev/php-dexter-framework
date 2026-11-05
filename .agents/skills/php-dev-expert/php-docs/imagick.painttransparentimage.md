# Altera qualquer pixel que corresponda à cor definida pelo preenchimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.painttransparentimage.php

---

# Imagick::paintTransparentImage

(PECL imagick 2, PECL imagick 3)

Imagick::paintTransparentImage — Altera qualquer pixel que corresponda à cor definida pelo preenchimento

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::paintTransparentImage**([mixed](language.types.mixed.md) `$target`, [float](language.types.float.md) `$alpha`, [float](language.types.float.md) `$fuzz`): [bool](language.types.boolean.md)

Altera qualquer pixel que corresponda à cor definida pelo preenchimento.

### Parâmetros

`target`
:   Altere esta cor de destino para o valor de opacidade especificado na imagem.

`alpha`
:   O nível de transparência: 1.0 é totalmente opaco e 0.0 é totalmente
    transparente.

`fuzz`
:   O membro fuzz da imagem define quanta tolerância é aceitável para considerar
    duas cores iguais.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como primeiro parâmetro. As versões anteriores permitiam apenas um objeto ImagickPixel. |

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
