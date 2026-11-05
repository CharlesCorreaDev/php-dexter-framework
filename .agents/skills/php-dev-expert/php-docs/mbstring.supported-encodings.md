# Codificações de Caracteres Suportadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mbstring.supported-encodings.php

---

# Codificações de Caracteres Suportadas

Atualmente, as seguintes codificações de caracteres são suportadas pelo
módulo `mbstring`. Qualquer uma dessas codificações
pode ser especificada no parâmetro `encoding` das
funções `mbstring`.

As seguintes codificações de caracteres são suportadas nesta
extensão PHP:

- UCS-4\*
- UCS-4BE
- UCS-4LE\*
- UCS-2
- UCS-2BE
- UCS-2LE
- UTF-32\*
- UTF-32BE\*
- UTF-32LE\*
- UTF-16\*
- UTF-16BE\*
- UTF-16LE\*
- UTF-7
- UTF7-IMAP
- UTF-8\*
- ASCII\*
- EUC-JP\*
- SJIS\*
- eucJP-win\*
- SJIS-win\*
- ISO-2022-JP
- ISO-2022-JP-MS
- CP932
- CP51932
- SJIS-mac (alias: MacJapanese)
- SJIS-Mobile#DOCOMO (alias: SJIS-DOCOMO)
- SJIS-Mobile#KDDI (alias: SJIS-KDDI)
- SJIS-Mobile#SOFTBANK (alias: SJIS-SOFTBANK)
- UTF-8-Mobile#DOCOMO (alias: UTF-8-DOCOMO)
- UTF-8-Mobile#KDDI-A
- UTF-8-Mobile#KDDI-B (alias: UTF-8-KDDI)
- UTF-8-Mobile#SOFTBANK (alias: UTF-8-SOFTBANK)
- ISO-2022-JP-MOBILE#KDDI (alias: ISO-2022-JP-KDDI)
- JIS
- JIS-ms
- CP50220
- CP50220raw
- CP50221
- CP50222
- ISO-8859-1\*
- ISO-8859-2\*
- ISO-8859-3\*
- ISO-8859-4\*
- ISO-8859-5\*
- ISO-8859-6\*
- ISO-8859-7\*
- ISO-8859-8\*
- ISO-8859-9\*
- ISO-8859-10\*
- ISO-8859-13\*
- ISO-8859-14\*
- ISO-8859-15\*
- ISO-8859-16\*
- byte2be
- byte2le
- byte4be
- byte4le
- BASE64
- HTML-ENTITIES (alias: HTML)
- 7bit
- 8bit
- EUC-CN\*
- CP936
- GB18030
- HZ
- EUC-TW\*
- CP950
- BIG-5\*
- EUC-KR\*
- UHC (alias: CP949)
- ISO-2022-KR
- Windows-1251 (alias: CP1251)
- Windows-1252 (alias: CP1252)
- CP866 (alias: IBM866)
- KOI8-R\*
- KOI8-U\*
- ArmSCII-8 (alias: ArmSCII8)

\* denota codificações também utilizáveis em expressões regulares.

Qualquer entrada php.ini que aceite um nome de codificação
também pode usar os valores "`auto`" e
"`pass`".
Funções `mbstring` que aceitam um nome de codificação
também podem usar o valor "`auto`".

Se "`pass`" estiver definido, nenhuma conversão
de codificação de caracteres será realizada.

Se "`auto`" estiver definido, ele é expandido para
a lista de codificações definidas de acordo com o [NLS](mbstring.configuration.md).
Por exemplo, se o NLS estiver definido como `Japanese`,
o valor é assumido como
"`ASCII,JIS,UTF-8,EUC-JP,SJIS`".

Veja também [mb\_detect\_order()](function.mb-detect-order.md)

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
