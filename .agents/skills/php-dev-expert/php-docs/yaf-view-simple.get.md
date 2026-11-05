# Obtém variável atribuída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-view-simple.get.php

---

# Yaf\_View\_Simple::\_\_get

(Yaf >=1.0.0)

Yaf\_View\_Simple::\_\_get — Obtém variável atribuída

### Descrição

public function **Yaf\_View\_Simple::\_\_get**([string](language.types.string.md) `$name` = ?): [void](language.types.void.md)

Obtém variável atribuída.
> **Nota**:
>
> Este parâmetro pode ser vazio desde o Yaf 2.1.11.

### Parâmetros

`name`
:   O nome da variável atribuída.

    Se for vazio, todas as variáveis atribuídas serão retornadas.

### Valor Retornado

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
