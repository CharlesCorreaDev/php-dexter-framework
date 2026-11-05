# Constrói um novo objeto V8Js

> **Fonte / Source:** https://www.php.net/manual/pt_BR/v8js.construct.php

---

# V8Js::\_\_construct

(PECL v8js >= 0.1.0)

V8Js::\_\_construct — Constrói um novo objeto [V8Js](class.v8js.md)

### Descrição

public function **V8Js::\_\_construct**(  
    [string](language.types.string.md) `$object_name` = "PHP",  
    [array](language.types.array.md) `$variables` = array(),  
    [array](language.types.array.md) `$extensions` = array(),  
    [bool](language.types.boolean.md) `$report_uncaught_exceptions` = **`true`**  
)

Constrói um novo objeto [V8Js](class.v8js.md).

### Parâmetros

`object_name`
:   O nome do objeto passado para Javascript.

`variables`
:   Mapa de variáveis ​​PHP que estarão disponíveis em Javascript. Deve ser um [array](language.types.array.md) associativo
    no formato `array("nome-para-js" => "nome-da-variável-php")`. O padrão é um array vazio.

`extensions`
:   Lista de extensões registradas usando [V8Js::registerExtension()](v8js.registerextension.md) que devem estar disponíveis
    no contexto Javascript do objeto [V8Js](class.v8js.md) criado.
    > **Nota**:
    >
    > Extensões registradas para serem habilitadas automaticamente não precisam ser listadas neste array.
    > Além disso, se uma extensão tiver dependências, essas dependências também podem ser omitidas. O padrão é um array vazio.

`report_uncaught_exceptions`
:   Controla se exceções Javascript não capturadas são reportadas imediatamente ou não. O padrão é **`true`**. Se definido como **`false`**
    a exceção não capturada pode ser acessada usando [V8Js::getPendingException()](v8js.getpendingexception.md).

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
