# Recuperar variáveis de configuração internas da extensão iconv

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iconv-get-encoding.php

---

# iconv\_get\_encoding

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

iconv\_get\_encoding — Recuperar variáveis de configuração internas da extensão iconv

### Descrição

function **iconv\_get\_encoding**([string](language.types.string.md) `$type` = "all"): [array](language.types.array.md)|[string](language.types.string.md)|[false](language.types.singleton.md)

Recuperar variáveis de configuração internas da extensão iconv

### Parâmetros

`type`
:   O valor do parâmetro opcional `type` pode ser:

    - all
    - input\_encoding
    - output\_encoding
    - internal\_encoding

### Valor Retornado

Retorna o valor atual da variável de configuração interna se bem sucedido
ou **`false`** em caso de falha.

Se `type` for omitido ou definido como "all",
**iconv\_get\_encoding()** retorna um array que
armazena todas essas variáveis.

### Examples

**Exemplo #1 Exemplo **iconv\_get\_encoding()****

```
<pre>
<?php
iconv_set_encoding("internal_encoding", "UTF-8");
iconv_set_encoding("output_encoding", "ISO-8859-1");
var_dump(iconv_get_encoding('all'));
?>
</pre>
```

O exemplo acima produzirá:

```
Array
(
    [input_encoding] => ISO-8859-1
    [output_encoding] => ISO-8859-1
    [internal_encoding] => UTF-8
)
```

### Veja também

- [iconv\_set\_encoding()](function.iconv-set-encoding.md) - Define a configuração atual para conversão de codificação de caracteres
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
