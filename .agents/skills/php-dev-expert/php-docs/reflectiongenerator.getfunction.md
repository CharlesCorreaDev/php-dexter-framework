# Obtém o nome da função do gerador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectiongenerator.getfunction.php

---

# ReflectionGenerator::getFunction

(PHP 7, PHP 8)

ReflectionGenerator::getFunction — Obtém o nome da função do gerador

### Descrição

public function **ReflectionGenerator::getFunction**(): [ReflectionFunctionAbstract](class.reflectionfunctionabstract.md)

Permite que o nome da função do gerador seja obtido retornando uma
classe derivada de [ReflectionFunctionAbstract](class.reflectionfunctionabstract.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma classe [ReflectionFunctionAbstract](class.reflectionfunctionabstract.md). Isso vai
ser [ReflectionFunction](class.reflectionfunction.md) para funções, ou
[ReflectionMethod](class.reflectionmethod.md) para métodos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **ReflectionGenerator::getFunction()** agora pode ser chamada depois que o gerador terminar a execução. |

### Examples

**Exemplo #1 Exemplo de **ReflectionGenerator::getFunction()****

```
<?php

function gen()
{
    yield 1;
}

$gen = gen();

$reflectionGen = new ReflectionGenerator($gen);

var_dump($reflectionGen->getFunction());
```

O exemplo acima produzirá
algo semelhante a:

```
object(ReflectionFunction)#3 (1) {
  ["name"]=>
  string(3) "gen"
}
```

### Veja também

- [ReflectionGenerator::getThis()](reflectiongenerator.getthis.md) - Obtém o valor $this do gerador
- [ReflectionGenerator::getTrace()](reflectiongenerator.gettrace.md) - Obtém o rastreamento do gerador em execução

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
