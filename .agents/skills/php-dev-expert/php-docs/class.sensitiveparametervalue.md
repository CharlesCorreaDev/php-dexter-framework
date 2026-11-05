# A classe SensitiveParameterValue

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.sensitiveparametervalue.php

---

# A classe SensitiveParameterValue

(PHP 8 >= 8.2.0)

## Introdução

A classe **SensitiveParameterValue** permite empacotar valores
sensíveis para protegê-los de exposição acidental.

Valores de parâmetros que possuem o atributo [SensitiveParameter](class.sensitiveparameter.md)
serão automaticamente empacotados dentro de um objeto **SensitiveParameterValue**
entre os rastreamentos de pilha.

## Resumo da classe

final
class ****SensitiveParameterValue****
{

/\* Propriedades \*/

private
readonly
[mixed](language.types.mixed.md)
[$value](class.sensitiveparametervalue.md#sensitiveparametervalue.props.value);

/\* Métodos \*/

public function [\_\_construct](sensitiveparametervalue.construct.md)([mixed](language.types.mixed.md) `$value`)

public function [\_\_debugInfo](sensitiveparametervalue.debuginfo.md)(): [array](language.types.array.md)

public function [getValue](sensitiveparametervalue.getvalue.md)(): [mixed](language.types.mixed.md)

}

## Propriedades

value
:   O valor sensível a ser protegido de exposição acidental.

## Índice

- [SensitiveParameterValue::\_\_construct](sensitiveparametervalue.construct.md) — Constrói um novo objeto SensitiveParameterValue
- [SensitiveParameterValue::\_\_debugInfo](sensitiveparametervalue.debuginfo.md) — Protege os valores sensíveis de exposição acidental
- [SensitiveParameterValue::getValue](sensitiveparametervalue.getvalue.md) — Retorna o valor sensível

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
