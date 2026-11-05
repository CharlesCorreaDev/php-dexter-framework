# Constrói um objeto ReflectionGenerator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectiongenerator.construct.php

---

# ReflectionGenerator::\_\_construct

(PHP 7, PHP 8)

ReflectionGenerator::\_\_construct — Constrói um objeto ReflectionGenerator

### Descrição

public function **ReflectionGenerator::\_\_construct**([Generator](class.generator.md) `$generator`)

Constrói um objeto [ReflectionGenerator](class.reflectiongenerator.md).

### Parâmetros

`generator`
:   Um objeto gerador.

### Examples

**Exemplo #1 Exemplo de **ReflectionGenerator::\_\_construct()****

```
<?php

function gen()
{
    yield 1;
}

$gen = gen();

$reflectionGen = new ReflectionGenerator($gen);

echo <<< output
{$reflectionGen->getFunction()->name}
Linha: {$reflectionGen->getExecutingLine()}
Arquivo: {$reflectionGen->getExecutingFile()}
output;
```

O exemplo acima produzirá
algo semelhante a:

```
gen
Linha: 5
Arquivo: /path/to/file/example.php
```

### Veja também

- [ReflectionGenerator::getFunction()](reflectiongenerator.getfunction.md) - Obtém o nome da função do gerador
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
