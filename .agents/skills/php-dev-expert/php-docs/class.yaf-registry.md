# A classe Yaf_Registry

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-registry.php

---

# A classe Yaf\_Registry

(Yaf >=1.0.0)

## Introdução

Todos os métodos de **Yaf\_Registry** são declarados como estáticos, tornando-o
universalmente acessível. Isso fornece a capacidade de obter ou definir quaisquer dados
personalizados de qualquer maneira no código, conforme necessário.

## Resumo da classe

class **Yaf\_Registry**
{

/\* Propriedades \*/

static
[$\_instance](class.yaf-registry.md#yaf-registry.props.instance);

protected
[$\_entries](class.yaf-registry.md#yaf-registry.props.entries);

/\* Métodos \*/

private function [\_\_construct](yaf-registry.construct.md)()

public static function [del](yaf-registry.del.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public static function [get](yaf-registry.get.md)([string](language.types.string.md) `$name`): [mixed](language.types.mixed.md)

public static function [has](yaf-registry.has.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public static function [set](yaf-registry.set.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

}

## Propriedades

\_instance

\_entries

## Índice

- [Yaf\_Registry::\_\_construct](yaf-registry.construct.md) — Yaf\_Registry implementa singleton
- [Yaf\_Registry::del](yaf-registry.del.md) — Remove um item do registro
- [Yaf\_Registry::get](yaf-registry.get.md) — Obtém um item do registro
- [Yaf\_Registry::has](yaf-registry.has.md) — Verifica se um item existe
- [Yaf\_Registry::set](yaf-registry.set.md) — Adiciona um item ao registro

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
