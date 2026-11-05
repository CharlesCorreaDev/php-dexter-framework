# Escapa meta-caracteres shell

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.escapeshellcmd.php

---

# escapeshellcmd

(PHP 4, PHP 5, PHP 7, PHP 8)

escapeshellcmd — Escapa meta-caracteres shell

### Descrição

function **escapeshellcmd**([string](language.types.string.md) `$command`): [string](language.types.string.md)

**escapeshellcmd()** escapa qualquer caractere em uma string
que possa ser utilizada para enganar um comando shell para executar
comandos arbritários. Esta função deve ser utilizada para ter certeza
que quaisquer dados vindos do usuário são escapado antes que
estes dados sejam passados para as funções [exec()](function.exec.md) ou
[system()](function.system.md), ou para o [operador
de execução](language.operators.execution.md).

Os seguintes caracteres são precedidos por uma barra invertida:
`` &#;`|*?~<>^()[]{}$\ ``, `\x0A`
e `\xFF`. `'` e `"`
são escapados apenas se não estiverem em pares. No windows, todos estes caracteres
mais `%` e `!` são precedidos por um circunflexo
(`^`).

O comportamento desta função com strings multibyte depende da configuração
atual da localidade **`LC_CTYPE`**. Caracteres não reconhecidos serão
descartados. Veja [setlocale()](function.setlocale.md).

### Parâmetros

`command`
:   O comando que será escapado.

### Valor Retornado

A string escapada.

### Examples

**Exemplo #1 Exemplo de **escapeshellcmd()****

```
<?php
// Permitindo número arbitrário de argumentos intencionalmente.
$command = './configure '.$_POST['configure_options'];

$escaped_command = escapeshellcmd($command);

system($escaped_command);
?>
```

### Notas

**Aviso**

**escapeshellcmd()** deve ser usada na string de comando
inteira, e ainda assim permite ao intruso passar
um número arbitrário de argumentos. Para escapar um único argumento,
a função [escapeshellarg()](function.escapeshellarg.md) deve ser usada em seu lugar.

**Aviso**

Espaços não serão escapados por **escapeshellcmd()**,
o que pode ser problemático em caminhos do Windows como:
`C:\Program Files\ProgramName\program.exe`.
Isto pode ser mitigado usando-se o seguinte trecho de código:

```
<?php
$cmd = preg_replace('`(?<!^) `', '^ ', escapeshellcmd($cmd));
```

### Veja também

- [setlocale()](function.setlocale.md) - Define informação de localidade
- [escapeshellarg()](function.escapeshellarg.md) - Escapa uma string para ser usada como um argumento shell
- [exec()](function.exec.md) - Executa um programa externo
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [system()](function.system.md) - Executa um programa externo e mostra a saída
- [operador de execução](language.operators.execution.md)

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
