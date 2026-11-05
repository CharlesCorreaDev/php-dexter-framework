# Obtém o valor $this do gerador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectiongenerator.getthis.php

---

# ReflectionGenerator::getThis

(PHP 7, PHP 8)

ReflectionGenerator::getThis — Obtém o valor `$this` do gerador

### Descrição

public function **ReflectionGenerator::getThis**(): [?](language.types.null.md)[object](language.types.object.md)

Obtém o valor `$this` ao qual o gerador tem acesso.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o valor `$this` ou **`null`** se o gerador não foi
criado em um contexto de classe.

### Examples

**Exemplo #1 Exemplo de **ReflectionGenerator::getThis()****

```
<?php

class GenExample
{
    public function gen()
    {
        yield 1;
    }
}

$gen = (new GenExample)->gen();

$reflectionGen = new ReflectionGenerator($gen);

var_dump($reflectionGen->getThis());
```

O exemplo acima produzirá
algo semelhante a:

```
object(GenExample)#3 (0) {
}
```

### Veja também

- [ReflectionGenerator::getFunction()](reflectiongenerator.getfunction.md) - Obtém o nome da função do gerador
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
