# Simula desfoque de movimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.motionblurimage.php

---

# Gmagick::motionblurimage

(PECL gmagick >= Unknown)

Gmagick::motionblurimage — Simula desfoque de movimento

### Descrição

public function **Gmagick::motionblurimage**([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [float](language.types.float.md) `$angle`): [Gmagick](class.gmagick.md)

Simula desfoque de movimento. A imagem sofre convolução com um operador gaussiano de
determinado raio e desvio padrão (sigma). Para resultados razoáveis, o raio deve ser
maior que o sigma. Com um raio de 0, **Gmagick::motionblurimage()** seleciona um raio adequado
automaticamente. O parâmetro "angle" informa o ângulo do movimento de desfoque.

### Parâmetros

`radius`
:   O raio do gaussiano, em pixels, sem contar o pixel central.

`sigma`
:   O desvio padrão do gaussiano, em pixels.

`angle`
:   O efeito será aplicado no ângulo definido por este parâmetro.

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
