# Obtém o ponto de código Unicode do caractere

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ord.php

---

# mb\_ord

(PHP 7 >= 7.2.0, PHP 8)

mb\_ord — Obtém o ponto de código Unicode do caractere

### Descrição

function **mb\_ord**([string](language.types.string.md) `$string`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o valor do ponto de código Unicode do caractere fornecido.

Esta função complementa [mb\_chr()](function.mb-chr.md).

### Parâmetros

`string`
:   Uma string

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

O ponto de código Unicode para o primeiro caractere de `string` ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Examples

**Exemplo #1 Um exemplo básico de **mb\_ord()****

```
<?php
var_dump(mb_ord("A", "UTF-8"));
var_dump(mb_ord("🐘", "UTF-8"));
var_dump(mb_ord("\x80", "ISO-8859-1"));
var_dump(mb_ord("\x80", "Windows-1252"));
?>
```

O exemplo acima produzirá:

int(65)  
int(128024)  
int(128)  
int(8364)

### Veja também

- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna
- [mb\_chr()](function.mb-chr.md) - Retorna um caractere pelo valor do ponto de código Unicode
- [IntlChar::ord()](intlchar.ord.md) - Retorna o valor do ponto de código Unicode do caractere
- [ord()](function.ord.md) - Converte o primeiro byte de uma string para um valor entre 0 e 255

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
