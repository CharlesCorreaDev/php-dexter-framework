# Define o nome do módulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.setmodulename.php

---

# Yaf\_Request\_Abstract::setModuleName

(Yaf >=1.0.0)

Yaf\_Request\_Abstract::setModuleName — Define o nome do módulo

### Descrição

public function **Yaf\_Request\_Abstract::setModuleName**([string](language.types.string.md) `$module`, [bool](language.types.boolean.md) `$format_name` = true): [void](language.types.void.md)

Define o nome do módulo para a requisição, geralmente usado pelo roteador personalizado para definir o nome do módulo de resultado da rota.

### Parâmetros

`module`
:   [string](language.types.string.md) contendo o nome do módulo. Deve ser em camelCase, como "Index" ou "Foo\_Bar"

`format_name`
:   Isto foi introduzido no Yaf 3.2.0. Por padrão o Yaf formatará o nome no modo camelCase.
    Se estiver definido como **`false`**, Yaf definirá o nome original na requisição.

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
