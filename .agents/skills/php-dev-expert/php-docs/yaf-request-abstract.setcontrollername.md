# Define o nome do controlador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.setcontrollername.php

---

# Yaf\_Request\_Abstract::setControllerName

(Yaf >=1.0.0)

Yaf\_Request\_Abstract::setControllerName — Define o nome do controlador

### Descrição

public function **Yaf\_Request\_Abstract::setControllerName**([string](language.types.string.md) `$controller`, [bool](language.types.boolean.md) `$format_name` = true): [void](language.types.void.md)

Define o nome do controlador para solicitação. Isso geralmente é usado pelo roteador personalizado para definir o nome do controlador de resultado da rota.

### Parâmetros

`controller`
:   [string](language.types.string.md) com o nome do controlador, no estilo CamelCase, tipo "Index" ou "Foo\_Bar".

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
