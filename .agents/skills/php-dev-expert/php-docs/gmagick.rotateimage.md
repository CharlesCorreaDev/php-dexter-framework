# Rotaciona uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.rotateimage.php

---

# Gmagick::rotateimage

(PECL gmagick >= Unknown)

Gmagick::rotateimage — Rotaciona uma imagem

### Descrição

public function **Gmagick::rotateimage**([mixed](language.types.mixed.md) `$color`, [float](language.types.float.md) `$degrees`): [Gmagick](class.gmagick.md)

Rotaciona uma imagem no número especificado de graus. Os triângulos vazios que sobrarem da rotação da imagem são preenchidos com a cor de fundo.

### Parâmetros

`color`
:   A cor de fundo.

`degrees`
:   O número de graus para rotacionar a imagem.

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
