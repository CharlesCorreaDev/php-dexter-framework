# Obtém um objeto ReflectionClass para o parâmetro que está sendo refletido ou null

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.getclass.php

---

# ReflectionParameter::getClass

(PHP 5, PHP 7, PHP 8)

ReflectionParameter::getClass — Obtém um objeto [ReflectionClass](class.reflectionclass.md) para o parâmetro que está sendo refletido ou **`null`**

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
public function **ReflectionParameter::getClass**(): [?](language.types.null.md)[ReflectionClass](class.reflectionclass.md)

Obtém um objeto [ReflectionClass](class.reflectionclass.md) para o parâmetro que está sendo refletido ou [null](reserved.constants.md#constant.null).

A partir do PHP 8.0.0 esta função está descontinuada e não é recomendada. Em vez disso, use
[ReflectionParameter::getType()](reflectionparameter.gettype.md) para obter o [ReflectionType](class.reflectiontype.md)
do parâmetro e, em seguida, interrogue esse objeto para determinar o tipo de parâmetro.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto [ReflectionClass](class.reflectionclass.md) ou **`null`** se nenhum tipo for declarado,
ou o tipo declarado não é uma classe ou interface.

### Examples

**Exemplo #1 Usando a classe [ReflectionParameter](class.reflectionparameter.md)**

```
<?php
function foo(Exception $a) { }

$functionReflection = new ReflectionFunction('foo');
$parameters = $functionReflection->getParameters();
$aParameter = $parameters[0];

echo $aParameter->getClass()->name;
?>
```

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi preterida em favor de [ReflectionParameter::getType()](reflectionparameter.gettype.md). |

### Veja também

- [ReflectionParameter::getDeclaringClass()](reflectionparameter.getdeclaringclass.md) - Obtém a classe declarada

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
