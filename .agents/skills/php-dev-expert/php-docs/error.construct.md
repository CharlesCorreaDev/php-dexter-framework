# Constrói o objeto error

> **Fonte / Source:** https://www.php.net/manual/pt_BR/error.construct.php

---

# Error::\_\_construct

(PHP 7, PHP 8)

Error::\_\_construct — Constrói o objeto error

### Descrição

public function **Error::\_\_construct**([string](language.types.string.md) `$message` = "", [int](language.types.integer.md) `$code` = 0, [?](language.types.null.md)[Throwable](class.throwable.md) `$previous` = **`null`**)

Constrói um erro.

### Parâmetros

`message`
:   A mensagem de erro.

`code`
:   O código do erro.

`previous`
:   O throwable anterior, utilizado para o encadeamento de exceção.

### Notas

> **Nota**:
>
> O parâmetro `message` *NÃO* é
> binary safe.

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
