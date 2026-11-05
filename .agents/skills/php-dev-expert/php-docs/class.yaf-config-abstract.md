# A classe Yaf_Config_Abstract

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-config-abstract.php

---

# A classe Yaf\_Config\_Abstract

(Yaf >=1.0.0)

## Introdução

## Resumo da classe

abstract
class **Yaf\_Config\_Abstract**
{

/\* Propriedades \*/

protected
[$\_config](class.yaf-config-abstract.md#yaf-config-abstract.props.config);

protected
[$\_readonly](class.yaf-config-abstract.md#yaf-config-abstract.props.readonly);

/\* Métodos \*/

abstract public function [get](yaf-config-abstract.get.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

abstract public function [readonly](yaf-config-abstract.readonly.md)(): [bool](language.types.boolean.md)

abstract public function [set](yaf-config-abstract.set.md)(): [Yaf\_Config\_Abstract](class.yaf-config-abstract.md)

abstract public function [toArray](yaf-config-abstract.toarray.md)(): [array](language.types.array.md)

}

## Propriedades

\_config

\_readonly

## Índice

- [Yaf\_Config\_Abstract::get](yaf-config-abstract.get.md) — Obtém uma configuração
- [Yaf\_Config\_Abstract::readonly](yaf-config-abstract.readonly.md) — Informa se a configuração é somente-leitura
- [Yaf\_Config\_Abstract::set](yaf-config-abstract.set.md) — Define uma configuração
- [Yaf\_Config\_Abstract::toArray](yaf-config-abstract.toarray.md) — Converte para um array

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
