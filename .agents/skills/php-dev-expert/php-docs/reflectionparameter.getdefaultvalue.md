# Obtém o valor padrão do parâmetro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.getdefaultvalue.php

---

# ReflectionParameter::getDefaultValue

(PHP 5 >= 5.0.3, PHP 7, PHP 8)

ReflectionParameter::getDefaultValue — Obtém o valor padrão do parâmetro

### Descrição

public function **ReflectionParameter::getDefaultValue**(): [mixed](language.types.mixed.md)

Obtém o valor padrão do parâmetro para qualquer função ou método interno ou definido pelo usuário.
Se o parâmetro não for opcional, um [ReflectionException](class.reflectionexception.md)
será lançado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor padrão dos parâmetros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Este método agora permite obter o valor padrão dos parâmetros das funções integradas e métodos de classe integrados. Anteriormente, um [ReflectionException](class.reflectionexception.md) era lançado. |

### Examples

**Exemplo #1 Obtendo valores padrão dos parâmetros de função**

```
<?php
function foo($test, $bar = 'baz')
{
    echo $test . $bar;
}

$function = new ReflectionFunction('foo');

foreach ($function->getParameters() as $param) {
    echo 'Nome: ' . $param->getName() . PHP_EOL;
    if ($param->isOptional()) {
        echo 'Valor padrão: ' . $param->getDefaultValue() . PHP_EOL;
    }
    echo PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
Nome: test

Nome: bar
Valor padrão: baz
```

### Veja também

- [ReflectionParameter::isOptional()](reflectionparameter.isoptional.md) - Verifica se opcional
- [ReflectionParameter::isDefaultValueAvailable()](reflectionparameter.isdefaultvalueavailable.md) - Verifica se um valor padrão está disponível
- [ReflectionParameter::getDefaultValueConstantName()](reflectionparameter.getdefaultvalueconstantname.md) - Retorna o nome da constante do valor padrão se o valor padrão for constante ou nulo
- [ReflectionParameter::isPassedByReference()](reflectionparameter.ispassedbyreference.md) - Verifica se foi passado por referência

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
