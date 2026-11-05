# Decodifica uma string codificada com uuencode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.convert-uudecode.php

---

# convert\_uudecode

(PHP 5, PHP 7, PHP 8)

convert\_uudecode — Decodifica uma string codificada com uuencode

### Descrição

function **convert\_uudecode**([string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

**convert\_uudecode()** decodifica uma string codificada com uuencode.

> **Nota**:
>
> **convert\_uudecode()** não aceita a linha `begin`
> nem a linha `end`, que são parte dos *arquivos* codificados com uuencode.

### Parâmetros

`string`
:   Os dados codificados com uuencode.

### Valor Retornado

Retorna os dados decodificados como uma string ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo da **convert\_uudecode()****

```
<?php
echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`");
?>
```

O exemplo acima produzirá:

```
I love PHP!
```

### Veja também

- [convert\_uuencode()](function.convert-uuencode.md) - Codifica uma string com uuencode

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
