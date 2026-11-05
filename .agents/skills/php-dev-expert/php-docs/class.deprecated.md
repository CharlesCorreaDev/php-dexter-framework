# O atributo Deprecated

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.deprecated.php

---

# O atributo Deprecated

(PHP 8 >= 8.4.0)

## Introdução

Este atributo é usado para marcar uma funcionalidade como descontinuada.
Usar uma funcionalidade descontinuada causará a emissão de um erro **`E_USER_DEPRECATED`**.

## Resumo da classe

#[[\Attribute](class.attribute.md)]  
final
class ****Deprecated****
{

/\* Propriedades \*/

public
readonly
?[string](language.types.string.md)
[$message](class.deprecated.md#deprecated.props.message);

public
readonly
?[string](language.types.string.md)
[$since](class.deprecated.md#deprecated.props.since);

/\* Métodos \*/

public function [\_\_construct](deprecated.construct.md)([?](language.types.null.md)[string](language.types.string.md) `$message` = [null](reserved.constants.md#constant.null), [?](language.types.null.md)[string](language.types.string.md) `$since` = [null](reserved.constants.md#constant.null))

}

## Propriedades

message
:   Uma mensagem opcional explicando o motivo da descontinuação e a possível funcionalidade de substituição.
    Será incluída na mensagem de descontinuação emitida.

since
:   Uma string opcional que indica desde quando a funcionalidade foi descontinuada.
    Os conteúdos não são validados pelo PHP e podem conter um número de versão,
    uma data ou qualquer outro valor que seja considerado apropriado.
    Será incluída na mensagem de descontinuação emitida.

    A funcionalidade que fizer parte do PHP usará a versão principal.secundária como o valor de since,
    por exemplo `'8.4'`

## Examples

```
<?php

#[\Deprecated(message: "use safe_replacement() instead", since: "1.5")]
function unsafe_function()
{
   echo "Isto não é seguro", PHP_EOL;
}

unsafe_function();

?>
```

A saída do exemplo acima no PHP 8.4 é semelhante a:

```
Deprecated: Function unsafe_function() is deprecated since 1.5, use safe_replacement() instead in example.php on line 9
Isto não é seguro
```

## Veja também

- [Visão geral de atributos](language.attributes.md)
- [ReflectionFunctionAbstract::isDeprecated()](reflectionfunctionabstract.isdeprecated.md)
- [ReflectionClassConstant::isDeprecated()](reflectionclassconstant.isdeprecated.md)
- **`E_USER_DEPRECATED`**

## Índice

- [Deprecated::\_\_construct](deprecated.construct.md) — Constrói uma nova instância do atributo Deprecated

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
