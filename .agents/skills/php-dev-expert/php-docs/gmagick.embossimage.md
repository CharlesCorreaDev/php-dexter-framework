# Retorna uma imagem em tons de cinza com efeito tridimensional

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.embossimage.php

---

# Gmagick::embossimage

(PECL gmagick >= Unknown)

Gmagick::embossimage — Retorna uma imagem em tons de cinza com efeito tridimensional

### Descrição

public function **Gmagick::embossimage**([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`): [Gmagick](class.gmagick.md)

Retorna uma imagem em tons de cinza com efeito tridimensional. A imagem sofre convolução com um operador gaussiano de determinado raio e desvio padrão (sigma). Para resultados razoáveis, o raio deve ser maior que o sigma. Use um raio de 0 e o raio mais adequado será definido automaticamente.

### Parâmetros

`radius`
:   O raio do efeito.

`sigma`
:   O desvio padrão do efeito.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) em relevo.

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
