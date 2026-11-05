# Informa se o token é de determinado tipo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/phptoken.is.php

---

# PhpToken::is

(PHP 8)

PhpToken::is — Informa se o token é de determinado tipo

### Descrição

public function **PhpToken::is**([int](language.types.integer.md)|[string](language.types.string.md)|[array](language.types.array.md) `$kind`): [bool](language.types.boolean.md)

Informa se o token é do tipo definido no parâmetro `kind`.

### Parâmetros

`kind`
:   Pode ser um único valor para corresponder ao ID ou conteúdo textual do token, ou um array de valores.

### Valor Retornado

Um valor booleano se o token for do tipo informado.

### Examples

**Exemplo #1 Exemplo de **PhpToken::is()****

```
<?php
$token = new PhpToken(T_ECHO, 'echo');
var_dump($token->is(T_ECHO));        // -> bool(true)
var_dump($token->is('echo'));        // -> bool(true)
var_dump($token->is(T_FOREACH));     // -> bool(false)
var_dump($token->is('foreach'));     // -> bool(false)
```

**Exemplo #2 Uso com array**

```
<?php
function isClassType(PhpToken $token): bool {
    return $token->is([T_CLASS, T_INTERFACE, T_TRAIT]);
}

$interface = new PhpToken(T_INTERFACE, 'interface');
var_dump(isClassType($interface));   // -> bool(true)

$function = new PhpToken(T_FUNCTION, 'function');
var_dump(isClassType($function));    // -> bool(false)
```

### Veja também

- [token\_name()](function.token-name.md) - Pega o nome simbólico de um dado token do PHP

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
