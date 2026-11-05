# Para a execução do compilador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.halt-compiler.php

---

# \_\_halt\_compiler

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

\_\_halt\_compiler — 
Para a execução do compilador

### Descrição

function **\_\_halt\_compiler**(): [void](language.types.void.md)

Para a execução do compilador. Pode ser útil para embutir dados em
scripts PHP, como os arquivos de instalação.

A posição do byte do início dos dados pode ser determinada pela
constante **`__COMPILER_HALT_OFFSET__`** que é definida
somente se houver uma função **\_\_halt\_compiler()** presente no
arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Um exemplo de **\_\_halt\_compiler()****

```
<?php

// abre este arquivo
$fp = fopen(__FILE__, 'r');

// procura por dados usando o ponteiro do arquivo
fseek($fp, __COMPILER_HALT_OFFSET__);

// e mostra os dados
var_dump(stream_get_contents($fp));

// final da execução do script
__halt_compiler(); os dados de instalação (ex.: tar, gz, PHP, etc.)
```

### Notas

> **Nota**:
>
> **\_\_halt\_compiler()** somente pode ser usada a partir do escopo
> mais externo.

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
