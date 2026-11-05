# A classe V8Js

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.v8js.php

---

# A classe [V8Js](class.v8js.md)

(PECL v8js >= 0.1.0)

## Introdução

Esta é a classe principal para a extensão V8Js. Cada instância criada a partir
desta classe tem seu próprio contexto no qual todo o JavaScript é compilado e
executado.

Veja [V8Js::\_\_construct()](v8js.construct.md) para mais informações.

## Resumo da classe

class **V8Js**
{

/\* Constantes \*/

const
[string](language.types.string.md)
[V8\_VERSION](class.v8js.md#v8js.constants.v8-version);

const
[int](language.types.integer.md)
[FLAG\_NONE](class.v8js.md#v8js.constants.flag-none) = 1;

const
[int](language.types.integer.md)
[FLAG\_FORCE\_ARRAY](class.v8js.md#v8js.constants.flag-force-array) = 2;

/\* Métodos \*/

public function [\_\_construct](v8js.construct.md)(  
    [string](language.types.string.md) `$object_name` = "PHP",  
    [array](language.types.array.md) `$variables` = array(),  
    [array](language.types.array.md) `$extensions` = array(),  
    [bool](language.types.boolean.md) `$report_uncaught_exceptions` = **`true`**  
)

public function [executeString](v8js.executestring.md)([string](language.types.string.md) `$script`, [string](language.types.string.md) `$identifier` = "V8Js::executeString()", [int](language.types.integer.md) `$flags` = **`V8Js::FLAG_NONE`**): [mixed](language.types.mixed.md)

public static function [getExtensions](v8js.getextensions.md)(): [array](language.types.array.md)

public function [getPendingException](v8js.getpendingexception.md)(): [V8JsException](class.v8jsexception.md)

public static function [registerExtension](v8js.registerextension.md)(  
    [string](language.types.string.md) `$extension_name`,  
    [string](language.types.string.md) `$script`,  
    [array](language.types.array.md) `$dependencies` = array(),  
    [bool](language.types.boolean.md) `$auto_enable` = **`false`**  
): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`V8Js::V8_VERSION`**
:   A versão do V8 Javascript Engine.

**`V8Js::FLAG_NONE`**
:   Nenhuma opção.

**`V8Js::FLAG_FORCE_ARRAY`**
:   Força todos Objetos JS a serem arrays associativos em PHP.

## Índice

- [V8Js::\_\_construct](v8js.construct.md) — Constrói um novo objeto V8Js
- [V8Js::executeString](v8js.executestring.md) — Executa uma string como código Javascript
- [V8Js::getExtensions](v8js.getextensions.md) — Retorna um array de extensões registradas
- [V8Js::getPendingException](v8js.getpendingexception.md) — Retorna exceção Javascript pendente não capturada
- [V8Js::registerExtension](v8js.registerextension.md) — Registra extensões Javascript para V8Js

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
