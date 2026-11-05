# A enumeração Uri\WhatWg\UrlValidationErrorType

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enum.uri-whatwg-urlvalidationerrortype.php

---

# A enumeração Uri\WhatWg\UrlValidationErrorType

(PHP 8 >= 8.5.0)

## Introdução

Os erros de validação possíveis definidos no [» Padrão URL WHATWG](https://url.spec.whatwg.org/).

## Resumo da enumeração

namespace **Uri\WhatWg**;

enum ****UrlValidationErrorType****  
{

case DomainToAscii
; //Erro durante o processo de conversão do nome de domínio para uma string ASCII.

case DomainToUnicode
; //Erro durante o processo de conversão do nome de domínio para uma string Unicode.

case DomainInvalidCodePoint
; //O host da entrada contém um code point de domínio proibido.

case HostInvalidCodePoint
; //Um host opaco (em uma URL que não é especial) contém um code point de host proibido.

case Ipv4EmptyPart
; //Um endereço IPv4 termina com um `U+002E` (`.`).

case Ipv4TooManyParts
; //Um endereço IPv4 não consiste em exatamente 4 partes.

case Ipv4NonNumericPart
; //Uma parte de um endereço IPv4 não é numérica.

case Ipv4NonDecimalPart
; //O endereço IPv4 contém números expressos usando dígitos hexadecimais ou octais.

case Ipv4OutOfRangePart
; //Uma parte de um endereço IPv4 excede `255`.

case Ipv6Unclosed
; //Um endereço IPv6 está sem o `U+005D` (`]`) de fechamento.

case Ipv6InvalidCompression
; //Um endereço IPv6 começa com uma compressão inadequada.

case Ipv6TooManyPieces
; //Um endereço IPv6 contém mais de 8 partes.

case Ipv6MultipleCompression
; //Um endereço IPv6 está comprimido em mais de um ponto.

case Ipv6InvalidCodePoint
; //
Um endereço IPv6 contém um ponto de código que não é um dígito hexadecimal ASCII
nem um `U+003A` (`:`). Ou termina inesperadamente.

case Ipv6TooFewPieces
; //Um endereço IPv6 não comprimido contém menos de 8 partes.

case Ipv4InIpv6TooManyPieces
; //Um endereço IPv6 com sintaxe de endereço IPv4: o endereço IPv6 tem mais de 6 partes.

case Ipv4InIpv6InvalidCodePoint
; //Um endereço IPv6 com sintaxe de endereço IPv4.

case Ipv4InIpv6OutOfRangePart
; //Um endereço IPv6 com sintaxe de endereço IPv4: uma parte IPv4 excede `255`.

case Ipv4InIpv6TooFewParts
; //Um endereço IPv6 com sintaxe de endereço IPv4: um endereço IPv4 contém poucas partes.

case InvalidUrlUnit
; //Um code point que não é uma unidade de URL foi encontrado.

case SpecialSchemeMissingFollowingSolidus
; //O esquema da entrada não é seguido por `//`.

case MissingSchemeNonRelativeUrl
; //
A entrada está sem um esquema, porque não começa com um caractere alfabético ASCII, e nenhuma URL base foi fornecida
ou a URL base não pode ser usada como URL base porque possui um path opaco.

case InvalidReverseSoldius
; //A URL tem um esquema especial e usa `U+005C` (`\`)
em vez de `U+002F` (`/`).

case InvalidCredentials
; //A entrada inclui credenciais.

case HostMissing
; //A entrada tem um esquema especial, mas não contém um host.

case PortOutOfRange
; //A porta da entrada é muito grande.

case PortInvalid
; //A porta da entrada é inválida.

case FileInvalidWindowsDriveLetter
; //
A entrada é uma string de URL relativa que começa com uma letra de unidade do Windows e
o esquema da URL base é `file`.

case FileInvalidWindowsDriveLetterHost
; //O host de uma URL `file:` é uma letra de unidade do Windows.

}

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
