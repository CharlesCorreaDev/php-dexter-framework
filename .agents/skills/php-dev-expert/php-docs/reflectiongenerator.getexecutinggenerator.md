# Obtém o objeto Generator em execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectiongenerator.getexecutinggenerator.php

---

# ReflectionGenerator::getExecutingGenerator

(PHP 7, PHP 8)

ReflectionGenerator::getExecutingGenerator — Obtém o objeto [Generator](class.generator.md) em execução

### Descrição

public function **ReflectionGenerator::getExecutingGenerator**(): [Generator](class.generator.md)

Obtém o objeto [Generator](class.generator.md) em execução

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o objeto [Generator](class.generator.md) atualmente em execução.

### Examples

**Exemplo #1 Exemplo de **ReflectionGenerator::getExecutingGenerator()****

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

$gen2 = $reflectionGen->getExecutingGenerator();

var_dump($gen2 === $gen);
var_dump($gen2->current());
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
int(1);
```

### Veja também

- [ReflectionGenerator::getExecutingLine()](reflectiongenerator.getexecutingline.md) - Obtém a linha do gerador atualmente em execução
- [ReflectionGenerator::getExecutingFile()](reflectiongenerator.getexecutingfile.md) - Obtém o nome do arquivo do gerador atualmente em execução

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
