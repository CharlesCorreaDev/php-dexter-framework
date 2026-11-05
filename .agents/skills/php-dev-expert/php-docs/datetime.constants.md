# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.constants.php

---

# Constantes predefinidas

As constantes **`DATE_*`**
estão definidas e oferecem uma representação
padrão de datas, que podem ser utilizadas em conjunto com funções de formatação de data
(como a função [date()](function.date.md)).

**Valores possíveis do parâmetro `returnFormat` para
[date\_sunrise()](function.date-sunrise.md) e
[date\_sunset()](function.date-sunset.md)**

**Aviso**

Estas constantes estão descontinuadas a partir do PHP 8.4.0.
As funções correspondentes [date\_sunrise()](function.date-sunrise.md) e
[date\_sunset()](function.date-sunset.md) estão descontinuadas a partir do PHP 8.1.0.

**`SUNFUNCS_RET_TIMESTAMP`** ([int](language.types.integer.md))
:   Timestamp

**`SUNFUNCS_RET_STRING`** ([int](language.types.integer.md))
:   Horas:minutos (exemplo: `08:02`)

**`SUNFUNCS_RET_DOUBLE`** ([int](language.types.integer.md))
:   Horas como número em ponto flutuante (exemplo `8.75`)

**Constantes **`DATE_*`****

**`DATE_ATOM`** ([string](language.types.string.md))
:   Atômico (exemplo: `2005-08-15T15:52:01+00:00`); compatível com ISO-8601, RFC 3339 e esquema XML

**`DATE_COOKIE`** ([string](language.types.string.md))
:   Cookies HTTP (exemplo: `Monday, 15-Aug-2005 15:52:01 UTC`)

**`DATE_ISO8601`** ([string](language.types.string.md))
:   Tipo ISO-8601 (exemplo: `2005-08-15T15:52:01+0000`)

    > **Nota**:
    >
    > Este formato não é compatível com ISO-8601, mas é deixado desta forma por
    > motivo de compatibilidade. Use
    > **`DATE_ISO8601_EXPANDED`**,
    > **`DATE_ATOM`** para compatibilidade com ISO-8601
    > em seu lugar (ref. ISO8601:2004 seção 4.3.3 cláusula d).

**`DATE_ISO8601_EXPANDED`** ([string](language.types.string.md))
:   ISO-8601 Expandida (exemplo: `+10191-07-26T08:59:52+01:00`)

    > **Nota**:
    >
    > Este formato permite intervalos de anos fora dos limites padrão da ISO-8601
    > de `0000`-`9999` através da inclusão
    > se um caractere de sinal. Ele também garante que a parte de fuso horário
    > (`+01:00`) seja compatível com a ISO-8601.

**`DATE_RFC822`** ([string](language.types.string.md))
:   RFC 822 (exemplo: `Mon, 15 Aug 05 15:52:01 +0000`)

**`DATE_RFC850`** ([string](language.types.string.md))
:   RFC 850 (exemplo: `Monday, 15-Aug-05 15:52:01 UTC`)

**`DATE_RFC1036`** ([string](language.types.string.md))
:   RFC 1036 (exemplo: `Mon, 15 Aug 05 15:52:01 +0000`)

**`DATE_RFC1123`** ([string](language.types.string.md))
:   RFC 1123 (exemplo: `Mon, 15 Aug 2005 15:52:01 +0000`)

**`DATE_RFC7231`** ([string](language.types.string.md))
:   RFC 7231 (a partir do PHP 7.0.19 e 7.1.5)
    (exemplo: `Sat, 30 Apr 2016 17:52:13 GMT`)

**`DATE_RFC2822`** ([string](language.types.string.md))
:   RFC 2822 (exemplo: `Mon, 15 Aug 2005 15:52:01 +0000`)

**`DATE_RFC3339`** ([string](language.types.string.md))
:   O mesmo que **`DATE_ATOM`**.

**`DATE_RFC3339_EXTENDED`** ([string](language.types.string.md))
:   Formato RFC 3339 ESTENDIDO
    (exemplo: `2005-08-15T15:52:01.000+00:00`)

**`DATE_RSS`** ([string](language.types.string.md))
:   RSS (exemplo: `Mon, 15 Aug 2005 15:52:01 +0000`).
    Sinônimo de **`DATE_RFC1123`**.

**`DATE_W3C`** ([string](language.types.string.md))
:   World Wide Web Consortium (exemplo: `2005-08-15T15:52:01+00:00`).
    Sinônimo de **`DATE_RFC3339`**.

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
