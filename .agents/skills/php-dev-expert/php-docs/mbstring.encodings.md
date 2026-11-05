# Sumários de Codificações Suportadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mbstring.encodings.php

---

# Sumários de Codificações Suportadas

**Sumários de Codificações Suportadas**

| Nome no registro de conjunto de caracteres da IANA | Conjunto de caracteres subjacente | Descrição | Nota Adicional |
| --- | --- | --- | --- |
| ISO-10646-UCS-4 | ISO 10646 | O Conjunto de Caracteres Universal com espaço de código de 31 bits, padronizado como UCS-4 pela ISO/IEC 10646. Mantido sincronizado com a versão mais recente do mapa de códigos Unicode. | Se este nome for usado na facilidade de conversão de codificação, o conversor tenta identificar pelo BOM precedente (marcador de ordem de byte) em qual endian os bytes subsequentes estão representados. |
| ISO-10646-UCS-4 | UCS-4 | Ver acima. | Ao contrário do `UCS-4`, as strings são sempre assumidas estar na forma big endian. |
| ISO-10646-UCS-4 | UCS-4 | Ver acima. | Ao contrário do `UCS-4`, as strings são sempre assumidas estar na forma little endian. |
| ISO-10646-UCS-2 | UCS-2 | O Conjunto de Caracteres Universal com espaço de código de 16 bits, padronizado como UCS-2 pela ISO/IEC 10646. Mantido sincronizado com a versão mais recente do mapa de códigos Unicode. | Se este nome for usado na facilidade de conversão de codificação, o conversor tenta identificar pelo BOM precedente (marcador de ordem de byte) em qual endian os bytes subsequentes estão representados. |
| ISO-10646-UCS-2 | UCS-2 | Ver acima. | Ao contrário do `UCS-2`, as strings são sempre assumidas estar na forma big endian. |
| ISO-10646-UCS-2 | UCS-2 | Ver acima. | Ao contrário do `UCS-2`, as strings são sempre assumidas estar na forma big endian. |
| UTF-32 | Unicode | Formato de Transformação Unicode de largura de unidade de 32 bits, cujo espaço de codificação refere-se ao padrão de conjunto de códigos Unicode. Este esquema de codificação não era idêntico ao UCS-4 porque o espaço de código do Unicode era limitado a um valor de 21 bits. | Se este nome for usado na facilidade de conversão de codificação, o conversor tenta identificar pelo BOM precedente (marcador de ordem de byte) em qual endian os bytes subsequentes estão representados. |
| UTF-32BE | Unicode | Ver acima | Ao contrário do `UTF-32`, as strings são sempre assumidas estar na forma big endian. |
| UTF-32LE | Unicode | Ver acima | Ao contrário do `UTF-32`, as strings são sempre assumidas estar na forma little endian. |
| UTF-16 | Unicode | Formato de Transformação Unicode de largura de unidade de 16 bits. Vale a pena observar que o UTF-16 não é mais a mesma especificação que UCS-2 porque o mecanismo de substituição foi introduzido desde o Unicode 2.0 e UTF-16 agora se refere a um espaço de código de 21 bits. | Se este nome for usado na facilidade de conversão de codificação, o conversor tenta identificar pelo BOM precedente (marcador de ordem de byte) em qual endian os bytes subsequentes estão representados. |
| UTF-16BE | Unicode | Ver acima. | Ao contrário do `UTF-16`, as strings são sempre assumidas estar na forma big endian. |
| UTF-16LE | Unicode | Ver acima. | Ao contrário do `UTF-16`, as strings são sempre assumidas estar na forma little endian. |
| UTF-8 | Unicode / UCS | Formato de Transformação Unicode de largura de unidade de 8 bits. | none |
| UTF-7 | Unicode | Um formato de transformação seguro para e-mails do Unicode, especificado em [» RFC2152](https://datatracker.ietf.org/doc/html/rfc2152). | none |
| (none) | Unicode | Uma variante de UTF-7 especializada para uso no [» protocolo IMAP](https://datatracker.ietf.org/doc/html/rfc3501). | none |
| US-ASCII (preferred MIME name) / iso-ir-6 / ANSI\_X3.4-1986 / ISO\_646.irv:1991 / ASCII / ISO646-US / us / IBM367 / CP367 / csASCII | ASCII / ISO 646 | Código Padrão Americano para Intercâmbio de Informações é uma codificação comumente usada de 7 bits. Também padronizado como um padrão internacional, ISO 646. | (none) |
| EUC-JP (preferred MIME name) / Extended\_UNIX\_Code\_Packed\_Format\_for\_Japanese / csEUCPkdFmtJapanese | Compound of US-ASCII / JIS X0201:1997 (hankaku kana part) / JIS X0208:1990 / JIS X0212:1990 | Como pode ser visto, o nome é derivado de uma abreviação de Formato Padrão de Código UNIX Packed para Japonês, esta codificação é principalmente usada em UNIX ou plataformas semelhantes. O esquema de codificação original, Extended UNIX Code, é projetado com base no ISO 2022. | O conjunto de caracteres referido pelo EUC-JP é diferente do IBM932 / CP932, que são usados pelo OS/2® e Microsoft® Windows®. Para a troca de informações com essas plataformas, use EUCJP-WIN em vez disso. |
| Shift\_JIS (preferred MIME name) / MS\_Kanji / csShift\_JIS | Compound of JIS X0201:1997 / JIS X0208:1997 | Shift\_JIS foi desenvolvido no início dos anos 80, na época dos processadores de palavras japoneses pessoais foram lançados no mercado, a fim de manter compatibilidades com o esquema de codificação legado JIS X 0201:1976. De acordo com a definição da IANA, o conjunto de códigos do Shift\_JIS é ligeiramente diferente de IBM932 / CP932. No entanto, os nomes "SJIS" / "Shift\_JIS" são frequentemente usados erroneamente para se referir a esses conjuntos de códigos. | Para o mapa de código CP932, use SJIS-WIN em vez disso. |
| (nenhum) | Composto de JIS X0201:1997 / JIS X0208:1997 / extensões IBM / extensões NEC | Embora esta "codificação" use o mesmo esquema de codificação que EUC-JP, o conjunto de caracteres subjacente é diferente. Ou seja, alguns pontos de código mapeiam para caracteres diferentes do EUC-JP. | nenhum |
| Windows-31J / csWindows31J | Composto de JIS X0201:1997 / JIS X0208:1997 / extensões IBM / extensões NEC | Embora esta "codificação" use o mesmo esquema de codificação que Shift\_JIS, o conjunto de caracteres subjacente é diferente. Isso significa que alguns códigos pontos mapeiam para caracteres diferentes do Shift\_JIS. | (none) |
| ISO-2022-JP (preferred MIME name) / csISO2022JP | US-ASCII / JIS X0201:1976 / JIS X0208:1978 / JIS X0208:1983 | [» RFC1468](https://datatracker.ietf.org/doc/html/rfc1468) | (nenhum) |
| JIS | | | |
| ISO-8859-1 | | | |
| ISO-8859-2 | | | |
| ISO-8859-3 | | | |
| ISO-8859-4 | | | |
| ISO-8859-5 | | | |
| ISO-8859-6 | | | |
| ISO-8859-7 | | | |
| ISO-8859-8 | | | |
| ISO-8859-9 | | | |
| ISO-8859-10 | | | |
| ISO-8859-13 | | | |
| ISO-8859-14 | | | |
| ISO-8859-15 | | | |
| ISO-8859-16 | | | |
| byte2be | | | |
| byte2le | | | |
| byte4be | | | |
| byte4le | | | |
| BASE64 | | | |
| HTML-ENTITIES | | | |
| 7bit | | | |
| 8bit | | | |
| EUC-CN | | | |
| CP936 | | | |
| HZ | | | |
| EUC-TW | | | |
| CP950 | | | |
| BIG-5 | | | |
| EUC-KR | | | |
| UHC (CP949) | | | |
| ISO-2022-KR | | | |
| Windows-1251 (CP1251) | | | |
| Windows-1252 (CP1252) | | | |
| CP866 (IBM866) | | | |
| KOI8-R | | | |
| KOI8-U | | | |

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
