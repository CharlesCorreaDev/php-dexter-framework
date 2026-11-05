# A classe ReflectionZendExtension

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionzendextension.php

---

# A classe ReflectionZendExtension

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

## Introdução

A classe **ReflectionZendExtension** reporta
informações sobre uma extensão zend.

## Resumo da classe

class ****ReflectionZendExtension****
implements
[Reflector](class.reflector.md) {

/\* Propriedades \*/

public
[string](language.types.string.md)
[$name](class.reflectionzendextension.md#reflectionzendextension.props.name);

/\* Métodos \*/

public function [\_\_construct](reflectionzendextension.construct.md)([string](language.types.string.md) `$name`)

private function [\_\_clone](reflectionzendextension.clone.md)(): [void](language.types.void.md)

public static function [export](reflectionzendextension.export.md)([string](language.types.string.md) `$name`, [bool](language.types.boolean.md) `$return` = ?): [string](language.types.string.md)

public function [getAuthor](reflectionzendextension.getauthor.md)(): [string](language.types.string.md)

public function [getCopyright](reflectionzendextension.getcopyright.md)(): [string](language.types.string.md)

public function [getName](reflectionzendextension.getname.md)(): [string](language.types.string.md)

public function [getURL](reflectionzendextension.geturl.md)(): [string](language.types.string.md)

public function [getVersion](reflectionzendextension.getversion.md)(): [string](language.types.string.md)

public function [\_\_toString](reflectionzendextension.tostring.md)(): [string](language.types.string.md)

}

## Propriedades

name
:   Nome da extensão. Somente leitura, lança
    [ReflectionException](class.reflectionexception.md) ao tentar escrever.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | [ReflectionZendExtension::export()](reflectionzendextension.export.md) foi removido. |

## Índice

- [ReflectionZendExtension::\_\_clone](reflectionzendextension.clone.md) — Clone
- [ReflectionZendExtension::\_\_construct](reflectionzendextension.construct.md) — Constrói um objeto ReflectionZendExtension
- [ReflectionZendExtension::export](reflectionzendextension.export.md) — Exporta
- [ReflectionZendExtension::getAuthor](reflectionzendextension.getauthor.md) — Obtém o autor
- [ReflectionZendExtension::getCopyright](reflectionzendextension.getcopyright.md) — Obtém os direitos autorais
- [ReflectionZendExtension::getName](reflectionzendextension.getname.md) — Obtém o nome
- [ReflectionZendExtension::getURL](reflectionzendextension.geturl.md) — Obtém a URL
- [ReflectionZendExtension::getVersion](reflectionzendextension.getversion.md) — Obtém a versão
- [ReflectionZendExtension::\_\_toString](reflectionzendextension.tostring.md) — Para string

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
