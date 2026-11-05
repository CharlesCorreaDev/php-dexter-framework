# Construtor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yac.construct.php

---

# Yac::\_\_construct

(PECL yac >= 1.0.0)

Yac::\_\_construct — Construtor

### Descrição

public function **Yac::\_\_construct**([string](language.types.string.md) `$prefix` = "")

O parâmetro "prefix" é usado para prefixar chaves. Isso pode ser usado para evitar conflitos entre aplicações.

### Parâmetros

`prefix`
:   [string](language.types.string.md) de prefixo.

### Erros/Exceções

Lança uma [Exception](class.exception.md) se o Yac não estiver habilitado. Lança uma
[Exception](class.exception.md) se `prefix` exceder
o comprimento máximo de 48 (**`YAC_MAX_KEY_LEN`**) bytes.

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
