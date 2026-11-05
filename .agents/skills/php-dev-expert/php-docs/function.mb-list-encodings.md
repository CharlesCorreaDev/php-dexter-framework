# Retorna um array de todas as codificações suportadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-list-encodings.php

---

# mb\_list\_encodings

(PHP 5, PHP 7, PHP 8)

mb\_list\_encodings — Retorna um array de todas as codificações suportadas

### Descrição

function **mb\_list\_encodings**(): [array](language.types.array.md)

Retorna um array contendo todas as [codificações suportadas](mbstring.supported-encodings.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array indexado numericamente.

### Erros/Exceções

Esta função não emite erros.

### Examples

**Exemplo #1 Exemplo de **mb\_list\_encodings()****

```
<?php

print_r(mb_list_encodings());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => pass
    [1] => auto
    [2] => wchar
    [3] => byte2be
    [4] => byte2le
    [5] => byte4be
    [6] => byte4le
    [7] => BASE64
    [8] => UUENCODE
    [9] => HTML-ENTITIES
    [10] => Quoted-Printable
    [11] => 7bit
    [12] => 8bit
    [13] => UCS-4
    [14] => UCS-4BE
    [15] => UCS-4LE
    [16] => UCS-2
    [17] => UCS-2BE
    [18] => UCS-2LE
    [19] => UTF-32
    [20] => UTF-32BE
    [21] => UTF-32LE
    [22] => UTF-16
    [23] => UTF-16BE
    [24] => UTF-16LE
    [25] => UTF-8
    [26] => UTF-7
    [27] => UTF7-IMAP
    [28] => ASCII
    [29] => EUC-JP
    [30] => SJIS
    [31] => eucJP-win
    [32] => SJIS-win
    [33] => JIS
    [34] => ISO-2022-JP
    [35] => Windows-1252
    [36] => ISO-8859-1
    [37] => ISO-8859-2
    [38] => ISO-8859-3
    [39] => ISO-8859-4
    [40] => ISO-8859-5
    [41] => ISO-8859-6
    [42] => ISO-8859-7
    [43] => ISO-8859-8
    [44] => ISO-8859-9
    [45] => ISO-8859-10
    [46] => ISO-8859-13
    [47] => ISO-8859-14
    [48] => ISO-8859-15
    [49] => EUC-CN
    [50] => CP936
    [51] => HZ
    [52] => EUC-TW
    [53] => BIG-5
    [54] => EUC-KR
    [55] => UHC
    [56] => ISO-2022-KR
    [57] => Windows-1251
    [58] => CP866
    [59] => KOI8-R
)
```

### Veja também

- [mb\_encoding\_aliases()](function.mb-encoding-aliases.md) - Obtém aliases de um tipo de codificação conhecido

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
