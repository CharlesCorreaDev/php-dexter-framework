# Linguagem Humana e
 Suporte a Codificação de Caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/refs.international.php

---

# Linguagem Humana e Suporte a Codificação de Caracteres

- [Enchant](book.enchant.md) — Enchant - Biblioteca de verificação ortográfica
  - [Instalação/Configuração](enchant.setup.md)
  - [Constantes predefinidas](enchant.constants.md)
  - [Examples](enchant.examples.md)
  - [Funções de Enchant](ref.enchant.md)
  - [EnchantBroker](class.enchantbroker.md) — A classe EnchantBroker
  - [EnchantDictionary](class.enchantdictionary.md) — A classe EnchantDictionary
- [Gender](book.gender.md) — Determina o gênero dos primeiros nomes
  - [Instalação/Configuração](gender.setup.md)
  - [Examples](gender.examples.md)
  - [Gender\Gender](class.gender.md) — A classe Gender\Gender
- [Gettext](book.gettext.md)
  - [Instalação/Configuração](gettext.setup.md)
  - [Funções da Gettext](ref.gettext.md)
- [iconv](book.iconv.md)
  - [Instalação/Configuração](iconv.setup.md)
  - [Constantes predefinidas](iconv.constants.md)
  - [iconv Funções](ref.iconv.md)
- [intl](book.intl.md) — Funções de Internacionalização
  - [Instalação/Configuração](intl.setup.md)
  - [Constantes predefinidas](intl.constants.md)
  - [Examples](intl.examples.md)
  - [Collator](class.collator.md) — A classe Collator
  - [NumberFormatter](class.numberformatter.md) — A classe NumberFormatter
  - [Locale](class.locale.md) — A classe Locale
  - [Normalizer](class.normalizer.md) — A classe Normalizer
  - [MessageFormatter](class.messageformatter.md) — A classe MessageFormatter
  - [IntlCalendar](class.intlcalendar.md) — A classe IntlCalendar
  - [IntlGregorianCalendar](class.intlgregoriancalendar.md) — A classe IntlGregorianCalendar
  - [IntlTimeZone](class.intltimezone.md) — A classe IntlTimeZone
  - [IntlDateFormatter](class.intldateformatter.md) — A classe IntlDateFormatter
  - [ResourceBundle](class.resourcebundle.md) — A classe ResourceBundle
  - [Spoofchecker](class.spoofchecker.md) — A classe Spoofchecker
  - [Transliterator](class.transliterator.md) — A classe Transliterator
  - [IntlBreakIterator](class.intlbreakiterator.md) — A classe IntlBreakIterator
  - [IntlRuleBasedBreakIterator](class.intlrulebasedbreakiterator.md) — A classe IntlRuleBasedBreakIterator
  - [IntlCodePointBreakIterator](class.intlcodepointbreakiterator.md) — A classe IntlCodePointBreakIterator
  - [IntlDatePatternGenerator](class.intldatepatterngenerator.md) — A classe IntlDatePatternGenerator
  - [IntlListFormatter](class.intllistformatter.md) — A classe IntlListFormatter
  - [IntlPartsIterator](class.intlpartsiterator.md) — A classe IntlPartsIterator
  - [UConverter](class.uconverter.md) — A classe UConverter
  - [Funções de Grapheme](ref.intl.grapheme.md)
  - [Funções de IDN](ref.intl.idn.md)
  - [IntlChar](class.intlchar.md)
  - [IntlException](class.intlexception.md) — Classe de exceção para erros da extensão Intl
  - [IntlIterator](class.intliterator.md) — A classe IntlIterator
  - [Funções de Intl](ref.intl.md)
- [String Multibyte](book.mbstring.md)
  - [Instalação/Configuração](mbstring.setup.md)
  - [Constantes predefinidas](mbstring.constants.md)
  - [Sumários de Codificações Suportadas](mbstring.encodings.md)
  - [Noções Básicas de Codificações Multibyte Japonesas](mbstring.ja-basic.md)
  - [Entrada e Saída HTTP](mbstring.http.md)
  - [Codificações de Caracteres Suportadas](mbstring.supported-encodings.md)
  - [Recurso de Sobrecarga de Funções](mbstring.overload.md)
  - [Requisitos de Codificação de Caracteres em PHP](mbstring.php4.req.md)
  - [Strings Multibyte e Funções](ref.mbstring.md)
- [Pspell](book.pspell.md)
  - [Instalação/Configuração](pspell.setup.md)
  - [Constantes predefinidas](pspell.constants.md)
  - [Funções de Pspell](ref.pspell.md)
  - [PSpell\Dictionary](class.pspell-dictionary.md) — A classe PSpell\Dictionary
  - [PSpell\Config](class.pspell-config.md) — A classe PSpell\Config
- [Recode](book.recode.md) — Recodificação GNU
  - [Instalação/Configuração](recode.setup.md)
  - [Funções de Recode](ref.recode.md)

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
