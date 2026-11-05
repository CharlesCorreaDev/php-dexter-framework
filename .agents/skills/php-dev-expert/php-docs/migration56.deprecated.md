# Recursos descontinuados no PHP 5.6.x

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration56.deprecated.php

---

## Recursos descontinuados no PHP 5.6.x

### Chamadas de contextos incompatíveis

Métodos chamados a partir de contextos incompatíveis agora foram descontinuados, e irão
gerar erros de nível **`E_DEPRECATED`** quando chamados, ao invés de
**`E_STRICT`**. Suporte a estas chamadas será removido em uma
versão futura do PHP.

Um exemplo desse tipo de chamada é:

```
<?php
class A {
    function f() { echo get_class($this); }
}

class B {
    function f() { A::f(); }
}

(new B)->f();
?>
```

O exemplo acima produzirá:

```
Deprecated: Non-static method A::f() should not be called statically, assuming $this from incompatible context in - on line 7
B
```

### $HTTP\_RAW\_POST\_DATA e `always_populate_raw_post_data`

`always_populate_raw_post_data`
agora irá gerar um erro de nível **`E_DEPRECATED`** quando
$HTTP\_RAW\_POST\_DATA for preenchida.
Código novo deve usar
[`php://input`](wrappers.php.md#wrappers.php.input)
ao invés de $HTTP\_RAW\_POST\_DATA, que será removida
em uma versão futura. Pode-se optar pelo novo comportamento (no qual
$HTTP\_RAW\_POST\_DATA nunca é definido e portanto nenhum
erro **`E_DEPRECATED`** será gerado) definindo
`always_populate_raw_post_data`
para `-1`.

### Configurações de codificação [iconv](book.iconv.md) e [mbstring](book.mbstring.md)

As opções de configuração de [iconv](book.iconv.md) e
[mbstring](book.mbstring.md) relacionadas
a codificação foram descontinuadas em favor de
[`default_charset`](ini.core.md#ini.default-charset).
As opções descontinuadas são:

- [`iconv.input_encoding`](iconv.configuration.md#ini.iconv.input-encoding)
- [`iconv.output_encoding`](iconv.configuration.md#ini.iconv.output-encoding)
- [`iconv.internal_encoding`](iconv.configuration.md#ini.iconv.internal-encoding)
- [`mbstring.http_input`](mbstring.configuration.md#ini.mbstring.http-input)
- [`mbstring.http_output`](mbstring.configuration.md#ini.mbstring.http-output)
- [`mbstring.internal_encoding`](mbstring.configuration.md#ini.mbstring.internal-encoding)

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
