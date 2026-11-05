# Define nome de ação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.setactionname.php

---

# Yaf\_Request\_Abstract::setActionName

(Yaf >=1.0.0)

Yaf\_Request\_Abstract::setActionName — Define nome de ação

### Descrição

public function **Yaf\_Request\_Abstract::setActionName**([string](language.types.string.md) `$action`, [bool](language.types.boolean.md) `$format_name` = true): [void](language.types.void.md)

Define nome de ação para a requisição. Isto é normalmente usado por roteador customizado para definir nome de controlador de resultado roteado.

### Parâmetros

`action`
:   [string](language.types.string.md) contendo o nome da ação. Deve ser em letras minúsculas, como "index" ou "foo\_bar".

`format_name`
:   Isto foi introduzido no Yaf 3.2.0. Por padrão o Yaf formatará o nome em letras minúsculas,
    se estiver definido como **`false`**, Yaf definirá o nome original na requisição.

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
