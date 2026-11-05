# Retorna um caractere pelo valor do ponto de código Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-chr.php

---

# mb\_chr

(PHP 7 >= 7.2.0, PHP 8)

mb\_chr — Retorna um caractere pelo valor do ponto de código Unicode

### Descrição

function **mb\_chr**([int](language.types.integer.md) `$codepoint`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna uma string contendo o caractere especificado pelo valor do ponto de código Unicode,
codificado na codificação especificada.

Esta função complementa [mb\_ord()](function.mb-ord.md).

### Parâmetros

`codepoint`
:   Um valor de ponto de código Unicode, por exemplo, `128024` para *U+1F418 ELEPHANT*

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Uma string contendo o caractere solicitado, se puder ser representado na codificação especificada
ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
$values = [65, 63, 0x20AC, 128024];
foreach ($values as $value) {
    var_dump(mb_chr($value, 'UTF-8'));
    var_dump(mb_chr($value, 'ISO-8859-1'));
}
?>
```

O exemplo acima produzirá:

```
string(1) "A"
string(1) "A"
string(1) "?"
string(1) "?"
string(3) "€"
bool(false)
string(4) "🐘"
bool(false)
```

### Veja também

- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna
- [mb\_ord()](function.mb-ord.md) - Obtém o ponto de código Unicode do caractere
- [IntlChar::ord()](intlchar.ord.md) - Retorna o valor do ponto de código Unicode do caractere
- [chr()](function.chr.md) - Gera uma string de um byte a partir de um número

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
