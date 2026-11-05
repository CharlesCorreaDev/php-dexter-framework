# Codifica uma string com uuencode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.convert-uuencode.php

---

# convert\_uuencode

(PHP 5, PHP 7, PHP 8)

convert\_uuencode — Codifica uma string com uuencode

### Descrição

function **convert\_uuencode**([string](language.types.string.md) `$string`): [string](language.types.string.md)

**convert\_uuencode()** codifica uma string usando o algoritmo
uuencode.

Uuencode traduz toda string (incluindo dados binários) em caracteres imprimíveis,
fazendo eles seguro para transmissão em rede. Dados uuencoded fica
35% maior que o original.

> **Nota**:
>
> **convert\_uuencode()** não produz a linha `begin`
> nem a linha `end`, que são parte dos *arquivos* codificados com uuencode.

### Parâmetros

`string`
:   A informação a ser codificada.

### Valor Retornado

Retorna os dados convertidos com uuencode.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Antes desta versão, tentar converter uma string vazia retornava **`false`** sem nenhuma razão particular. |

### Examples

**Exemplo #1 Exemplo da **convert\_uuencode()****

```
<?php
$some_string = "test\ntext text\r\n";

echo convert_uuencode($some_string);
?>
```

O exemplo acima produzirá:

```
0=&5S=`IT97AT('1E>'0-"@``
`
```

### Veja também

- [convert\_uudecode()](function.convert-uudecode.md) - Decodifica uma string codificada com uuencode
- [base64\_encode()](function.base64-encode.md) - Codifica dados com MIME base64

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
