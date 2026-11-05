# O construtor Imagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.construct.php

---

# Imagick::\_\_construct

(PECL imagick 2, PECL imagick 3)

Imagick::\_\_construct — O construtor Imagick

### Descrição

public function **Imagick::\_\_construct**([mixed](language.types.mixed.md) `$files` = ?)

Cria uma instância do Imagick para uma imagem ou conjunto de imagens especificado.

### Parâmetros

`files`
:   O caminho para uma imagem a ser carregada ou um array de caminhos. Os caminhos podem incluir
    curingas para nomes de arquivos ou podem ser URLs.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
