# Retorna o nome da constante do valor padrão se o valor padrão for constante ou nulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.getdefaultvalueconstantname.php

---

# ReflectionParameter::getDefaultValueConstantName

(PHP 5 >= 5.4.6, PHP 7, PHP 8)

ReflectionParameter::getDefaultValueConstantName — Retorna o nome da constante do valor padrão se o valor padrão for constante ou nulo

### Descrição

public function **ReflectionParameter::getDefaultValueConstantName**(): [?](language.types.null.md)[string](language.types.string.md)

Retorna o nome da constante do valor padrão do parâmetro de qualquer função ou método,
seja interno ou definido pelo usuário, se o valor padrão for constante ou nulo.
Se o parâmetro não for opcional, um [ReflectionException](class.reflectionexception.md)
será lançado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna string em caso de sucesso ou **`null`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Este método agora permite obter os nomes das constantes dos valores padrão das funções integradas e métodos de classe integrados. Anteriormente, um [ReflectionException](class.reflectionexception.md) era lançado. |

### Examples

**Exemplo #1 Obtendo nomes constantes de valores padrão de parâmetros de função**

```
<?php
function foo($test, $bar = PHP_INT_MIN)
{
    echo $test . $bar;
}

$function = new ReflectionFunction('foo');

foreach ($function->getParameters() as $param) {
    echo 'Nome: ' . $param->getName() . PHP_EOL;
    if ($param->isOptional()) {
        echo 'Valor padrão: ' . $param->getDefaultValueConstantName() . PHP_EOL;
    }
    echo PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
Nome: test

Nome: bar
Valor padrão: PHP_INT_MIN
```

### Veja também

- [ReflectionParameter::isOptional()](reflectionparameter.isoptional.md) - Verifica se opcional
- [ReflectionParameter::isDefaultValueConstant()](reflectionparameter.isdefaultvalueconstant.md) - Retorna se o valor padrão deste parâmetro é uma constante
- [ReflectionParameter::getDefaultValue()](reflectionparameter.getdefaultvalue.md) - Obtém o valor padrão do parâmetro

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
