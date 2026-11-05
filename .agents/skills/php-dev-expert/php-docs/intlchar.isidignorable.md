# Verifica se um ponto de código é um caractere ignorável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isidignorable.php

---

# IntlChar::isIDIgnorable

(PHP 7, PHP 8)

IntlChar::isIDIgnorable — Verifica se um ponto de código é um caractere ignorável

### Descrição

public static function **IntlChar::isIDIgnorable**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o caractere especificado deve ser considerado um caractere ignorável em um identificador.

**`true`** para caracteres com categoria geral "Cf" (códigos de formatação) assim como controles ISO que não são espaços em branco (U+0000..U+0008, U+000E..U+001B, U+007F..U+009F).

> **Nota**:
>
> Observe que o Unicode recomenda ignorar Cf (códigos de formatação).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for ignorável em identificadores, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isIDIgnorable("A"));
var_dump(IntlChar::isIDIgnorable(" "));
var_dump(IntlChar::isIDIgnorable("\u{007F}"));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(false)
bool(true)
```

### Veja também

- [IntlChar::isIDStart()](intlchar.isidstart.md) - Verifica se um ponto de código é permissível como o primeiro caractere em um identificador
- [IntlChar::isIDPart()](intlchar.isidpart.md) - Verifica se um ponto de código é permissível em um identificador
- **`IntlChar::PROPERTY_DEFAULT_IGNORABLE_CODE_POINT`**

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
