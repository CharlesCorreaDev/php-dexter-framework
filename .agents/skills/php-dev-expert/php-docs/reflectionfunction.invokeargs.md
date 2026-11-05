# Invoca argumentos de função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunction.invokeargs.php

---

# ReflectionFunction::invokeArgs

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

ReflectionFunction::invokeArgs — Invoca argumentos de função

### Descrição

public function **ReflectionFunction::invokeArgs**([array](language.types.array.md) `$args`): [mixed](language.types.mixed.md)

Invoca a função e passa seus argumentos como array.

### Parâmetros

`args`
:   Os argumentos passados para a função como um array, bem como
    [call\_user\_func\_array()](function.call-user-func-array.md) funciona.

### Valor Retornado

Retorna o resultado da função invocada

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | As chaves `args` agora serão interpretadas como nomes de parâmetros, em vez de serem ignoradas silenciosamente. |

### Examples

**Exemplo #1 Exemplo de **ReflectionFunction::invokeArgs()****

```
<?php
function title($title, $name)
{
    return sprintf("%s. %s\r\n", $title, $name);
}

$function = new ReflectionFunction('title');

echo $function->invokeArgs(array('Dr', 'Phil'));
?>
```

O exemplo acima produzirá:

```
Dr. Phil
```

**Exemplo #2 **ReflectionFunction::invokeArgs()** com exemplo de referências**

```
<?php
function get_false_conditions(array $conditions, array &$false_conditions)
{
    foreach ($conditions as $condition) {
        if (!$condition) {
            $false_conditions[] = $condition;
        }
    }
}

$function_ref     = new ReflectionFunction('get_false_conditions');

$conditions       = array(true, false, -1, 0, 1);
$false_conditions = array();

$function_ref->invokeArgs(array($conditions, &$false_conditions));

var_dump($false_conditions);
?>
```

O exemplo acima produzirá:

```
array(2) {
  [0]=>
  bool(false)
  [1]=>
  int(0)
}
```

### Notas

> **Nota**:
>
> Se a função tiver argumentos que precisam
> ser referências, então eles devem ser referências na lista de argumentos passada.

### Veja também

- [ReflectionFunction::invoke()](reflectionfunction.invoke.md) - Invoca função
- [ReflectionFunctionAbstract::getNumberOfParameters()](reflectionfunctionabstract.getnumberofparameters.md) - Obtém o número de parâmetros
- [\_\_invoke()](language.oop5.magic.md#object.invoke)
- [call\_user\_func\_array()](function.call-user-func-array.md) - Chama uma função de retorno com um array de parâmetros

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
