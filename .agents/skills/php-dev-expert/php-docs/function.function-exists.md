# Retorna true se a função informada estiver definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.function-exists.php

---

# function\_exists

(PHP 4, PHP 5, PHP 7, PHP 8)

function\_exists — Retorna **`true`** se a função informada estiver definida

### Descrição

function **function\_exists**([string](language.types.string.md) `$function`): [bool](language.types.boolean.md)

Verifica a lista de funções definidas, tanto as internas quanto as
definidas pelo usuário, procurando por `function`.

### Parâmetros

`function`
:   O nome da função, como uma string.

### Valor Retornado

Retorna **`true`** se `function` existir e for uma
função, **`false`** caso contrário.

> **Nota**:
>
> Esta função retornará **`false`** para instruções de linguagem, como
> [include\_once](function.include-once.md) e [echo](function.echo.md).

### Examples

**Exemplo #1 Exemplo de **function\_exists()****

```
<?php
if (function_exists('imap_open')) {
    echo "Funções IMAP estão disponíveis.<br />\n";
} else {
    echo "Funções IMAP não estão disponíveis.<br />\n";
}
?>
```

### Notas

> **Nota**:
>
> Um nome de função pode existir mesmo se a própria função não puder ser usada devido
> a opções de configuração ou compilação (por exemplo, as funções [image](ref.image.md)).

### Veja também

- [method\_exists()](function.method-exists.md) - Verifica se o método da classe existe
- [is\_callable()](function.is-callable.md) - Verifica se um valor pode ser chamado como uma função a partir do escopo atual
- [get\_defined\_functions()](function.get-defined-functions.md) - Retorna um array com todas as funções definidas
- [class\_exists()](function.class-exists.md) - Verifica se uma classe foi definida
- [extension\_loaded()](function.extension-loaded.md) - Descobre se uma extensão está carregada

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
