# Escapa uma string para ser usada como um argumento shell

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.escapeshellarg.php

---

# escapeshellarg

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

escapeshellarg — Escapa uma string para ser usada como um argumento shell

### Descrição

function **escapeshellarg**([string](language.types.string.md) `$arg`): [string](language.types.string.md)

**escapeshellarg()** adiciona aspas simples em torno de uma string
e escapa quaisquer aspas simples existentes permitindo passar uma
string diretamente a uma função shell e tê-la tratada como um único
argumento seguro. Esta função deve ser usada para escapar argumentos
individuais a funções shell vindos de entrada de usuário. As funções shell
incluem [exec()](function.exec.md), [system()](function.system.md) e o
[operador de execução](language.operators.execution.md).

Diferentemente, no Windows, **escapeshellarg()** substitui sinais de
porcentagem, sinais de exclamação (subsitituição atrasada de variáveis) e aspas duplas
com espaços e adiciona aspas duplas em torno da string.
Posteriormente, cada sequência de barras invertidas consecutivas (`\`)
é escapada por uma barra invertida adicional.

O comportamento desta função com strings multibyte depende da configuração
atual da localidade **`LC_CTYPE`**. Caracteres não reconhecidos serão
descartados. Veja [setlocale()](function.setlocale.md).

### Parâmetros

`arg`
:   O argumento que será escapado.

### Valor Retornado

A string escapada.

### Examples

**Exemplo #1 Exemplo de **escapeshellarg()****

```
<?php
system('ls '.escapeshellarg($dir));
?>
```

### Veja também

- [setlocale()](function.setlocale.md) - Define informação de localidade
- [escapeshellcmd()](function.escapeshellcmd.md) - Escapa meta-caracteres shell
- [exec()](function.exec.md) - Executa um programa externo
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [system()](function.system.md) - Executa um programa externo e mostra a saída
- [Operador de execução](language.operators.execution.md)

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
