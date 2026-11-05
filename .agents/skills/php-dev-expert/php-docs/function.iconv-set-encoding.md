# Define a configuração atual para conversão de codificação de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iconv-set-encoding.php

---

# iconv\_set\_encoding

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

iconv\_set\_encoding — Define a configuração atual para conversão de codificação de caracteres

### Descrição

function **iconv\_set\_encoding**([string](language.types.string.md) `$type`, [string](language.types.string.md) `$encoding`): [bool](language.types.boolean.md)

Altera o valor da variável de configuração interna especificada por
`type` para `encoding`.

### Parâmetros

`type`
:   O valor de `type` pode ser qualquer um destes:

    - input\_encoding
    - output\_encoding
    - internal\_encoding

`encoding`
:   O conjunto de caracteres.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo **iconv\_set\_encoding()****

```
<?php
iconv_set_encoding("internal_encoding", "UTF-8");
iconv_set_encoding("output_encoding", "ISO-8859-1");
?>
```

### Veja também

- [iconv\_get\_encoding()](function.iconv-get-encoding.md) - Recuperar variáveis de configuração internas da extensão iconv
- [ob\_iconv\_handler()](function.ob-iconv-handler.md) - Converte codificação de caracteres como manipulador de buffer de saída

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
