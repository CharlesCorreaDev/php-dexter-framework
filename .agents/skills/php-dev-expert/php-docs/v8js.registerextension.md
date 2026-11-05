# Registra extensões Javascript para V8Js

> **Fonte / Source:** https://www.php.net/manual/pt_BR/v8js.registerextension.php

---

# V8Js::registerExtension

(PECL v8js >= 0.1.0)

V8Js::registerExtension — Registra extensões Javascript para V8Js

### Descrição

public static function **V8Js::registerExtension**(  
    [string](language.types.string.md) `$extension_name`,  
    [string](language.types.string.md) `$script`,  
    [array](language.types.array.md) `$dependencies` = array(),  
    [bool](language.types.boolean.md) `$auto_enable` = **`false`**  
): [bool](language.types.boolean.md)

Registra o `script` passado como uma extensão a
ser usada em contextos [V8Js](class.v8js.md).

### Parâmetros

`extension_name`
:   Nome da extensão a ser registrada.

`script`
:   O código Javascript a ser registrado.

`dependencies`
:   Array de nomes de extensões das quais a extensão a ser registrada depende. Qualquer extensão desse tipo é
    ativada automaticamente quando esta extensão é carregada.
    > **Nota**:
    >
    > Todas as extensões, incluindo as dependências, devem ser registradas antes que quaisquer [V8Js](class.v8js.md)
    > sejam criados para utilizá-las.

`auto_enable`
:   Se definido como **`true`**, a extensão será habilitada automaticamente em todos os contextos [V8Js](class.v8js.md).

### Valor Retornado

Retorna **`true`** se a extensão foi registrada com sucesso, **`false`** caso contrário.

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
