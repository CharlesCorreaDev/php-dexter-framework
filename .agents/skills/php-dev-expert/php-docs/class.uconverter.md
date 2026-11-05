# A classe UConverter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.uconverter.php

---

# A classe UConverter

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

## Introdução

## Resumo da classe

class ****UConverter****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[REASON\_UNASSIGNED](class.uconverter.md#uconverter.constants.reason-unassigned);

public
const
[int](language.types.integer.md)
[REASON\_ILLEGAL](class.uconverter.md#uconverter.constants.reason-illegal);

public
const
[int](language.types.integer.md)
[REASON\_IRREGULAR](class.uconverter.md#uconverter.constants.reason-irregular);

public
const
[int](language.types.integer.md)
[REASON\_RESET](class.uconverter.md#uconverter.constants.reason-reset);

public
const
[int](language.types.integer.md)
[REASON\_CLOSE](class.uconverter.md#uconverter.constants.reason-close);

public
const
[int](language.types.integer.md)
[REASON\_CLONE](class.uconverter.md#uconverter.constants.reason-clone);

public
const
[int](language.types.integer.md)
[UNSUPPORTED\_CONVERTER](class.uconverter.md#uconverter.constants.unsupported-converter);

public
const
[int](language.types.integer.md)
[SBCS](class.uconverter.md#uconverter.constants.sbcs);

public
const
[int](language.types.integer.md)
[DBCS](class.uconverter.md#uconverter.constants.dbcs);

public
const
[int](language.types.integer.md)
[MBCS](class.uconverter.md#uconverter.constants.mbcs);

public
const
[int](language.types.integer.md)
[LATIN\_1](class.uconverter.md#uconverter.constants.latin-1);

public
const
[int](language.types.integer.md)
[UTF8](class.uconverter.md#uconverter.constants.utf8);

public
const
[int](language.types.integer.md)
[UTF16\_BigEndian](class.uconverter.md#uconverter.constants.utf16-bigendian);

public
const
[int](language.types.integer.md)
[UTF16\_LittleEndian](class.uconverter.md#uconverter.constants.utf16-littleendian);

public
const
[int](language.types.integer.md)
[UTF32\_BigEndian](class.uconverter.md#uconverter.constants.utf32-bigendian);

public
const
[int](language.types.integer.md)
[UTF32\_LittleEndian](class.uconverter.md#uconverter.constants.utf32-littleendian);

public
const
[int](language.types.integer.md)
[EBCDIC\_STATEFUL](class.uconverter.md#uconverter.constants.ebcdic-stateful);

public
const
[int](language.types.integer.md)
[ISO\_2022](class.uconverter.md#uconverter.constants.iso-2022);

public
const
[int](language.types.integer.md)
[LMBCS\_1](class.uconverter.md#uconverter.constants.lmbcs-1);

public
const
[int](language.types.integer.md)
[LMBCS\_2](class.uconverter.md#uconverter.constants.lmbcs-2);

public
const
[int](language.types.integer.md)
[LMBCS\_3](class.uconverter.md#uconverter.constants.lmbcs-3);

public
const
[int](language.types.integer.md)
[LMBCS\_4](class.uconverter.md#uconverter.constants.lmbcs-4);

public
const
[int](language.types.integer.md)
[LMBCS\_5](class.uconverter.md#uconverter.constants.lmbcs-5);

public
const
[int](language.types.integer.md)
[LMBCS\_6](class.uconverter.md#uconverter.constants.lmbcs-6);

public
const
[int](language.types.integer.md)
[LMBCS\_8](class.uconverter.md#uconverter.constants.lmbcs-8);

public
const
[int](language.types.integer.md)
[LMBCS\_11](class.uconverter.md#uconverter.constants.lmbcs-11);

public
const
[int](language.types.integer.md)
[LMBCS\_16](class.uconverter.md#uconverter.constants.lmbcs-16);

public
const
[int](language.types.integer.md)
[LMBCS\_17](class.uconverter.md#uconverter.constants.lmbcs-17);

public
const
[int](language.types.integer.md)
[LMBCS\_18](class.uconverter.md#uconverter.constants.lmbcs-18);

public
const
[int](language.types.integer.md)
[LMBCS\_19](class.uconverter.md#uconverter.constants.lmbcs-19);

public
const
[int](language.types.integer.md)
[LMBCS\_LAST](class.uconverter.md#uconverter.constants.lmbcs-last);

public
const
[int](language.types.integer.md)
[HZ](class.uconverter.md#uconverter.constants.hz);

public
const
[int](language.types.integer.md)
[SCSU](class.uconverter.md#uconverter.constants.scsu);

public
const
[int](language.types.integer.md)
[ISCII](class.uconverter.md#uconverter.constants.iscii);

public
const
[int](language.types.integer.md)
[US\_ASCII](class.uconverter.md#uconverter.constants.us-ascii);

public
const
[int](language.types.integer.md)
[UTF7](class.uconverter.md#uconverter.constants.utf7);

public
const
[int](language.types.integer.md)
[BOCU1](class.uconverter.md#uconverter.constants.bocu1);

public
const
[int](language.types.integer.md)
[UTF16](class.uconverter.md#uconverter.constants.utf16);

public
const
[int](language.types.integer.md)
[UTF32](class.uconverter.md#uconverter.constants.utf32);

public
const
[int](language.types.integer.md)
[CESU8](class.uconverter.md#uconverter.constants.cesu8);

public
const
[int](language.types.integer.md)
[IMAP\_MAILBOX](class.uconverter.md#uconverter.constants.imap-mailbox);

/\* Métodos \*/

public function [\_\_construct](uconverter.construct.md)([?](language.types.null.md)[string](language.types.string.md) `$destination_encoding` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$source_encoding` = **`null`**)

public function [convert](uconverter.convert.md)([string](language.types.string.md) `$str`, [bool](language.types.boolean.md) `$reverse` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [fromUCallback](uconverter.fromucallback.md)(  
    [int](language.types.integer.md) `$reason`,  
    [array](language.types.array.md) `$source`,  
    [int](language.types.integer.md) `$codePoint`,  
    [int](language.types.integer.md) `&$error`  
): [string](language.types.string.md)|[int](language.types.integer.md)|[array](language.types.array.md)|[null](language.types.null.md)

public static function [getAliases](uconverter.getaliases.md)([string](language.types.string.md) `$name`): [array](language.types.array.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

public static function [getAvailable](uconverter.getavailable.md)(): [array](language.types.array.md)

public function [getDestinationEncoding](uconverter.getdestinationencoding.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

public function [getDestinationType](uconverter.getdestinationtype.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

public function [getErrorCode](uconverter.geterrorcode.md)(): [int](language.types.integer.md)

public function [getErrorMessage](uconverter.geterrormessage.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getSourceEncoding](uconverter.getsourceencoding.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

public function [getSourceType](uconverter.getsourcetype.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

public static function [getStandards](uconverter.getstandards.md)(): [?](language.types.null.md)[array](language.types.array.md)

public function [getSubstChars](uconverter.getsubstchars.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

public static function [reasonText](uconverter.reasontext.md)([int](language.types.integer.md) `$reason`): [string](language.types.string.md)

public function [setDestinationEncoding](uconverter.setdestinationencoding.md)([string](language.types.string.md) `$encoding`): [bool](language.types.boolean.md)

public function [setSourceEncoding](uconverter.setsourceencoding.md)([string](language.types.string.md) `$encoding`): [bool](language.types.boolean.md)

public function [setSubstChars](uconverter.setsubstchars.md)([string](language.types.string.md) `$chars`): [bool](language.types.boolean.md)

public function [toUCallback](uconverter.toucallback.md)(  
    [int](language.types.integer.md) `$reason`,  
    [string](language.types.string.md) `$source`,  
    [string](language.types.string.md) `$codeUnits`,  
    [int](language.types.integer.md) `&$error`  
): [string](language.types.string.md)|[int](language.types.integer.md)|[array](language.types.array.md)|[null](language.types.null.md)

public static function [transcode](uconverter.transcode.md)(  
    [string](language.types.string.md) `$str`,  
    [string](language.types.string.md) `$toEncoding`,  
    [string](language.types.string.md) `$fromEncoding`,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

}

## Constantes predefinidas

**`UConverter::REASON_UNASSIGNED`** [int](language.types.integer.md)

**`UConverter::REASON_ILLEGAL`** [int](language.types.integer.md)

**`UConverter::REASON_IRREGULAR`** [int](language.types.integer.md)

**`UConverter::REASON_RESET`** [int](language.types.integer.md)

**`UConverter::REASON_CLOSE`** [int](language.types.integer.md)

**`UConverter::REASON_CLONE`** [int](language.types.integer.md)

**`UConverter::UNSUPPORTED_CONVERTER`** [int](language.types.integer.md)

**`UConverter::SBCS`** [int](language.types.integer.md)

**`UConverter::DBCS`** [int](language.types.integer.md)

**`UConverter::MBCS`** [int](language.types.integer.md)

**`UConverter::LATIN_1`** [int](language.types.integer.md)

**`UConverter::UTF8`** [int](language.types.integer.md)

**`UConverter::UTF16_BigEndian`** [int](language.types.integer.md)

**`UConverter::UTF16_LittleEndian`** [int](language.types.integer.md)

**`UConverter::UTF32_BigEndian`** [int](language.types.integer.md)

**`UConverter::UTF32_LittleEndian`** [int](language.types.integer.md)

**`UConverter::EBCDIC_STATEFUL`** [int](language.types.integer.md)

**`UConverter::ISO_2022`** [int](language.types.integer.md)

**`UConverter::LMBCS_1`** [int](language.types.integer.md)

**`UConverter::LMBCS_2`** [int](language.types.integer.md)

**`UConverter::LMBCS_3`** [int](language.types.integer.md)

**`UConverter::LMBCS_4`** [int](language.types.integer.md)

**`UConverter::LMBCS_5`** [int](language.types.integer.md)

**`UConverter::LMBCS_6`** [int](language.types.integer.md)

**`UConverter::LMBCS_8`** [int](language.types.integer.md)

**`UConverter::LMBCS_11`** [int](language.types.integer.md)

**`UConverter::LMBCS_16`** [int](language.types.integer.md)

**`UConverter::LMBCS_17`** [int](language.types.integer.md)

**`UConverter::LMBCS_18`** [int](language.types.integer.md)

**`UConverter::LMBCS_19`** [int](language.types.integer.md)

**`UConverter::LMBCS_LAST`** [int](language.types.integer.md)

**`UConverter::HZ`** [int](language.types.integer.md)

**`UConverter::SCSU`** [int](language.types.integer.md)

**`UConverter::ISCII`** [int](language.types.integer.md)

**`UConverter::US_ASCII`** [int](language.types.integer.md)

**`UConverter::UTF7`** [int](language.types.integer.md)

**`UConverter::BOCU1`** [int](language.types.integer.md)

**`UConverter::UTF16`** [int](language.types.integer.md)

**`UConverter::UTF32`** [int](language.types.integer.md)

**`UConverter::CESU8`** [int](language.types.integer.md)

**`UConverter::IMAP_MAILBOX`** [int](language.types.integer.md)

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [UConverter::\_\_construct](uconverter.construct.md) — Cria um objeto UConverter
- [UConverter::convert](uconverter.convert.md) — Converte uma string de um conjunto de caracteres (charset) para outro
- [UConverter::fromUCallback](uconverter.fromucallback.md) — Função de retorno de origem padrão
- [UConverter::getAliases](uconverter.getaliases.md) — Obtém o pseudônimo de um nome
- [UConverter::getAvailable](uconverter.getavailable.md) — Obtém os nomes canônicos dos conversores disponíveis
- [UConverter::getDestinationEncoding](uconverter.getdestinationencoding.md) — Obtém a codificação de destino
- [UConverter::getDestinationType](uconverter.getdestinationtype.md) — Obtém o tipo do conversor de destino
- [UConverter::getErrorCode](uconverter.geterrorcode.md) — Obtém o código do último erro gerado pelo objeto
- [UConverter::getErrorMessage](uconverter.geterrormessage.md) — Obtém a mensagem do último erro gerado pelo objeto
- [UConverter::getSourceEncoding](uconverter.getsourceencoding.md) — Obtém a codificação de origem
- [UConverter::getSourceType](uconverter.getsourcetype.md) — Obtém o tipo do conversor de origem
- [UConverter::getStandards](uconverter.getstandards.md) — Obtém os nomes dos conversores padrão associados
- [UConverter::getSubstChars](uconverter.getsubstchars.md) — Obtém os caracteres de substituição
- [UConverter::reasonText](uconverter.reasontext.md) — Obtém uma representação em string da razão da chamada de retorno
- [UConverter::setDestinationEncoding](uconverter.setdestinationencoding.md) — Define a codificação de destino
- [UConverter::setSourceEncoding](uconverter.setsourceencoding.md) — Define a codificação da origem
- [UConverter::setSubstChars](uconverter.setsubstchars.md) — Define os caracteres de substituição
- [UConverter::toUCallback](uconverter.toucallback.md) — Função de retorno padrão de destino
- [UConverter::transcode](uconverter.transcode.md) — Converte uma string de uma codificação de caracteres para outra

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
