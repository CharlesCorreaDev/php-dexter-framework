# Classe ReflectionExtension

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionextension.php

---

# Classe ReflectionExtension

(PHP 5, PHP 7, PHP 8)

## Introdução

A classe **ReflectionExtension** reporta
informações sobre uma extensão.

## Resumo da classe

class ****ReflectionExtension****
implements
[Reflector](class.reflector.md) {

/\* Propriedades \*/

public
[string](language.types.string.md)
[$name](class.reflectionextension.md#reflectionextension.props.name);

/\* Métodos \*/

public function [\_\_construct](reflectionextension.construct.md)([string](language.types.string.md) `$name`)

private function [\_\_clone](reflectionextension.clone.md)(): [void](language.types.void.md)

public static function [export](reflectionextension.export.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$return` = **`false`**): [string](language.types.string.md)

public function [getClasses](reflectionextension.getclasses.md)(): [array](language.types.array.md)

public function [getClassNames](reflectionextension.getclassnames.md)(): [array](language.types.array.md)

public function [getConstants](reflectionextension.getconstants.md)(): [array](language.types.array.md)

public function [getDependencies](reflectionextension.getdependencies.md)(): [array](language.types.array.md)

public function [getFunctions](reflectionextension.getfunctions.md)(): [array](language.types.array.md)

public function [getINIEntries](reflectionextension.getinientries.md)(): [array](language.types.array.md)

public function [getName](reflectionextension.getname.md)(): [string](language.types.string.md)

public function [getVersion](reflectionextension.getversion.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [info](reflectionextension.info.md)(): [void](language.types.void.md)

public function [isPersistent](reflectionextension.ispersistent.md)(): [bool](language.types.boolean.md)

public function [isTemporary](reflectionextension.istemporary.md)(): [bool](language.types.boolean.md)

public function [\_\_toString](reflectionextension.tostring.md)(): [string](language.types.string.md)

}

## Propriedades

name
:   Nome da extensão, o mesmo que chamar o
    [ReflectionExtension::getName()](reflectionextension.getname.md)
    (método)

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | [ReflectionExtension::export()](reflectionextension.export.md) foi removido. |

## Índice

- [ReflectionExtension::\_\_clone](reflectionextension.clone.md) — Clone
- [ReflectionExtension::\_\_construct](reflectionextension.construct.md) — Constrói um ReflectionExtension
- [ReflectionExtension::export](reflectionextension.export.md) — Exportação
- [ReflectionExtension::getClasses](reflectionextension.getclasses.md) — Obtém classes
- [ReflectionExtension::getClassNames](reflectionextension.getclassnames.md) — Obtém nomes de classes
- [ReflectionExtension::getConstants](reflectionextension.getconstants.md) — Obtém constantes
- [ReflectionExtension::getDependencies](reflectionextension.getdependencies.md) — Obtém dependências
- [ReflectionExtension::getFunctions](reflectionextension.getfunctions.md) — Obtém funções de extensão
- [ReflectionExtension::getINIEntries](reflectionextension.getinientries.md) — Obtém entradas de extensão ini
- [ReflectionExtension::getName](reflectionextension.getname.md) — Obtém o nome da extensão
- [ReflectionExtension::getVersion](reflectionextension.getversion.md) — Obtém a versão da extensão
- [ReflectionExtension::info](reflectionextension.info.md) — Imprime informações da extensão
- [ReflectionExtension::isPersistent](reflectionextension.ispersistent.md) — Retorna se esta extensão é persistente
- [ReflectionExtension::isTemporary](reflectionextension.istemporary.md) — Retorna se esta extensão é temporária
- [ReflectionExtension::\_\_toString](reflectionextension.tostring.md) — Para string

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
