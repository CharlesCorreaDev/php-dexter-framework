# Retorna um valor associado à chave especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getoption.php

---

# Imagick::getOption

(PECL imagick 2, PECL imagick 3)

Imagick::getOption — Retorna um valor associado à chave especificada

### Descrição

public function **Imagick::getOption**([string](language.types.string.md) `$key`): [string](language.types.string.md)

Retorna um valor associado ao objeto para a chave especificada.

### Parâmetros

`key`
:   O nome da opção

### Valor Retornado

Retorna um valor associado a uma varinha e à chave especificada.

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
