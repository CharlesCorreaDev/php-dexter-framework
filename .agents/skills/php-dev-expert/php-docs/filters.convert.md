# Filtros de Conversão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filters.convert.php

---

## Filtros de Conversão

Como todos os filtros string.\*, os filtros convert.\* realizam ações
similares aos seus nomes.
Para mais informações sobre um determinado filtro, veja a página do manual para
a função correspondente.

## convert.base64-encode e convert.base64-decode

O uso desses filtros é equivalente a processar todos os dados do fluxo com as
funções [base64\_encode()](function.base64-encode.md) e [base64\_decode()](function.base64-decode.md)
respectivamente.
`convert.base64-encode` suporta parâmetros no formato de
um array associativo. Se `line-length` for passado, a
saída do base64 será dividida em pedaços de `line-length`
caracteres cada. Se `line-break-chars` for passado, cada
pedaço será delimitado pelos caracteres passados. Esses parâmetros dão o
mesmo efeito que usar [base64\_encode()](function.base64-encode.md) com
[chunk\_split()](function.chunk-split.md).

**Exemplo #1
convert.base64-encode &
convert.base64-decode**

```
<?php
$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'convert.base64-encode');
fwrite($fp, "Isto é um teste.\n");
fclose($fp);
/* Saída:    SXN0byDDqSB1bSB0ZXN0ZS4K  */

$param = array('line-length' => 8, 'line-break-chars' => "\r\n");
$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'convert.base64-encode', STREAM_FILTER_WRITE, $param);
fwrite($fp, "Isto é um teste.\n");
fclose($fp);
/* Saída  :  SXN0byDD
          :  qSB1bSB0
          :  ZXN0ZS4K  */

$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'convert.base64-decode');
fwrite($fp, "SXN0byDDqSB1bSB0ZXN0ZS4K");
fclose($fp);
/* Saída:    Isto é um teste.  */
?>
```

## convert.quoted-printable-encode e convert.quoted-printable-decode

O uso da versão de decodificação desse filtro é equivalente ao processamento de todos os dados
do fluxo pela função [quoted\_printable\_decode()](function.quoted-printable-decode.md).
Não há nenhuma função equivalente a `convert.quoted-printable-encode`.
`convert.quoted-printable-encode` suporta parâmetros passados como
um array associativo. Além dos parâmetros suportados por
`convert.base64-encode`, `convert.quoted-printable-encode`
também suporta os argumentos booleanos `binary` e
`force-encode-first`.
`convert.base64-decode` suporta apenas o
parâmetro `line-break-chars` como uma dica de tipo
para retirar do conteúdo codificado.

**Exemplo #2
convert.quoted-printable-encode &
convert.quoted-printable-decode**

```
<?php
$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'convert.quoted-printable-encode');
fwrite($fp, "Isto é um teste.\n");
/* Saída:    Isto =C3=A9 um teste.=0A  */
?>
```

## convert.iconv.\*

Os filtros `convert.iconv.*` estarão disponíveis se
o suporte a [iconv](book.iconv.md) estiver habilitado, e se sua utilização é
equivalente a processar todos os dados do fluxo através do [iconv()](function.iconv.md).
Esses filtros não suportam parâmetros, em vez disso esperam que as codificações
de entrada e saída sejam informados no nome do filtro, por exemplo,
`convert.iconv.<input-encoding>.<output-encoding>` ou
`convert.iconv.<input-encoding>/<output-encoding>`
(ambas notações são equivalentes).

**Exemplo #3 convert.iconv.\***

```
<?php
$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'convert.iconv.utf-16le.utf-8');
fwrite($fp, "T\0h\0i\0s\0 \0i\0s\0 \0a\0 \0t\0e\0s\0t\0.\0\n\0");
fclose($fp);
/* Exibe: This is a test. */
?>
```

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
