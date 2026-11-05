# Verifica se um ponto de código é permissível em um identificador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isidpart.php

---

# IntlChar::isIDPart

(PHP 7, PHP 8)

IntlChar::isIDPart — Verifica se um ponto de código é permissível em um identificador

### Descrição

public static function **IntlChar::isIDPart**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o caractere especificado é permissível em um identificador.

**`true`** para caracteres com categoria geral "L" (letras), "Nl" (números letras), "Nd" (dígitos decimais),
"Mc" e "Mn" (marcas de combinação), "Pc" (pontuação de conexão) e u\_isIDIgnorable(c).

> **Nota**:
>
> Isto é quase o mesmo que o ID\_Continue do Unicode (**`IntlChar::PROPERTY_ID_CONTINUE`**) exceto que
> o Unicode recomenda ignorar Cf que seja menor que [IntlChar::isIDIgnorable()](intlchar.isidignorable.md).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` puder ocorrer em um identificador, **`false`** se não puder. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isIDPart("A"));
var_dump(IntlChar::isIDPart("$"));
var_dump(IntlChar::isIDPart("\n"));
var_dump(IntlChar::isIDPart("\u{2603}"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(false)
bool(false)
```

### Veja também

- [IntlChar::isIDIgnorable()](intlchar.isidignorable.md) - Verifica se um ponto de código é um caractere ignorável
- [IntlChar::isIDStart()](intlchar.isidstart.md) - Verifica se um ponto de código é permissível como o primeiro caractere em um identificador
- **`IntlChar::PROPERTY_ID_CONTINUE`**

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
