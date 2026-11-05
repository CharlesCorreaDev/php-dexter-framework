# A classe ReflectionConstant

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionconstant.php

---

# A classe ReflectionConstant

(PHP 8 >= 8.4.0)

## Introdução

A classe **ReflectionConstant** reporta
informação sobre uma constante global.

## Resumo da classe

class ****ReflectionConstant****
implements
[Reflector](class.reflector.md) {

/\* Propriedades \*/

public
[string](language.types.string.md)
[$name](class.reflectionconstant.md#reflectionconstant.props.name);

/\* Métodos \*/

public function [\_\_construct](reflectionconstant.construct.md)([string](language.types.string.md) `$name`)

public function [getAttributes](reflectionconstant.getattributes.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

public function [getExtension](reflectionconstant.getextension.md)(): [?](language.types.null.md)[ReflectionExtension](class.reflectionextension.md)

public function [getExtensionName](reflectionconstant.getextensionname.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getFileName](reflectionconstant.getfilename.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getName](reflectionconstant.getname.md)(): [string](language.types.string.md)

public function [getNamespaceName](reflectionconstant.getnamespacename.md)(): [string](language.types.string.md)

public function [getShortName](reflectionconstant.getshortname.md)(): [string](language.types.string.md)

public function [getValue](reflectionconstant.getvalue.md)(): [mixed](language.types.mixed.md)

public function [isDeprecated](reflectionconstant.isdeprecated.md)(): [bool](language.types.boolean.md)

public function [\_\_toString](reflectionconstant.tostring.md)(): [string](language.types.string.md)

}

## Propriedades

name
:   Nome da constante. Somente leitura, lança
    uma exceção [ReflectionException](class.reflectionexception.md) em tentativa de escrita.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | A classe não é mais final. |

## Veja também

- [ReflectionClassConstant](class.reflectionclassconstant.md)

## Índice

- [ReflectionConstant::\_\_construct](reflectionconstant.construct.md) — Constrói um objeto ReflectionConstant
- [ReflectionConstant::getAttributes](reflectionconstant.getattributes.md) — Obtém atributos
- [ReflectionConstant::getExtension](reflectionconstant.getextension.md) — Obtém ReflectionExtension da extensão de definição
- [ReflectionConstant::getExtensionName](reflectionconstant.getextensionname.md) — Obtém o nome da extensão definidora
- [ReflectionConstant::getFileName](reflectionconstant.getfilename.md) — Obtém o nome do arquivo de definição
- [ReflectionConstant::getName](reflectionconstant.getname.md) — Obtém o nome
- [ReflectionConstant::getNamespaceName](reflectionconstant.getnamespacename.md) — Obtém o nome do namespace
- [ReflectionConstant::getShortName](reflectionconstant.getshortname.md) — Obtém o nome abreviado
- [ReflectionConstant::getValue](reflectionconstant.getvalue.md) — Obtém o valor
- [ReflectionConstant::isDeprecated](reflectionconstant.isdeprecated.md) — Verifica se foi descontinuada
- [ReflectionConstant::\_\_toString](reflectionconstant.tostring.md) — Retorna representação em string

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
