# Comparando geradores com objetos Iterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.generators.comparison.php

---

## Comparando geradores com objetos [Iterator](class.iterator.md)

A principal vantagem dos geradores é a sua simplicidade. Muito menos código
clichê tem de ser reescrito em comparação com a implementação de uma classe
[Iterator](class.iterator.md), e o código geralmente é muito mais legível.
Por exemplo, a seguinte função e classe são equivalentes:

```
<?php
function getLinesFromFile($fileName) {
    if (!$fileHandle = fopen($fileName, 'r')) {
        return;
    }

    while (false !== $line = fgets($fileHandle)) {
        yield $line;
    }

    fclose($fileHandle);
}

// ao invés de:

class LineIterator implements Iterator {
    protected $fileHandle;

    protected $line;
    protected $i;

    public function __construct($fileName) {
        if (!$this->fileHandle = fopen($fileName, 'r')) {
            throw new RuntimeException('Não foi possível abrir o arquivo "' . $fileName . '"');
        }
    }

    public function rewind() {
        fseek($this->fileHandle, 0);
        $this->line = fgets($this->fileHandle);
        $this->i = 0;
    }

    public function valid() {
        return false !== $this->line;
    }

    public function current() {
        return $this->line;
    }

    public function key() {
        return $this->i;
    }

    public function next() {
        if (false !== $this->line) {
            $this->line = fgets($this->fileHandle);
            $this->i++;
        }
    }

    public function __destruct() {
        fclose($this->fileHandle);
    }
}
```

No entanto, essa flexibilidade tem um custo: os geradores somente movem-se
para frente e não podem ser rebobinados após a iteração ter sido iniciada.
Isso também significa que o geradores não pode ser iterado múltiplas vezes:
o gerador precisará ser reconstruído chamando a função geradora novamente.

### Veja também

- [Iteração de Objetos](language.oop5.iterations.md)

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
