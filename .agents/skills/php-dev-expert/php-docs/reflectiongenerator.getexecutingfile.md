# Obtém o nome do arquivo do gerador atualmente em execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectiongenerator.getexecutingfile.php

---

# ReflectionGenerator::getExecutingFile

(PHP 7, PHP 8)

ReflectionGenerator::getExecutingFile — Obtém o nome do arquivo do gerador atualmente em execução

### Descrição

public function **ReflectionGenerator::getExecutingFile**(): [string](language.types.string.md)

Obtenha o caminho completo e o nome do arquivo do gerador em execução no momento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o caminho completo e o nome do arquivo do gerador em execução no momento.

### Examples

**Exemplo #1 Exemplo de **ReflectionGenerator::getExecutingFile()****

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

echo "Arquivo: {$reflectionGen->getExecutingFile()}";
```

O exemplo acima produzirá
algo semelhante a:

```
Arquivo: /path/to/file/example.php
```

### Veja também

- [ReflectionGenerator::getExecutingLine()](reflectiongenerator.getexecutingline.md) - Obtém a linha do gerador atualmente em execução
- [ReflectionGenerator::getExecutingGenerator()](reflectiongenerator.getexecutinggenerator.md) - Obtém o objeto Generator em execução

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
