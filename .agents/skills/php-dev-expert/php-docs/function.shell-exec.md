# Executa um comando via shell e retorna a saída inteira como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shell-exec.php

---

# shell\_exec

(PHP 4, PHP 5, PHP 7, PHP 8)

shell\_exec — Executa um comando via shell e retorna a saída inteira como uma string

### Descrição

function **shell\_exec**([string](language.types.string.md) `$command`): [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

Esta função é identica ao [operador de execução](language.operators.execution.md) (descontinuado).

> **Nota**:
>
> No Windows, o tubo subjacente é aberto em modo texto o que pode fazer com
> que a função falhe para saída binária. Considere usar [popen()](function.popen.md)
> alternativamente para estes casos.

### Parâmetros

`command`
:   O comando que será executado.

### Valor Retornado

Uma [string](language.types.string.md) contendo a saída do comando executado, **`false`** se o tubo
não puder ser estabelecido ou **`null`** se um erro ocorrer ou o comando não gerar saída.

> **Nota**:
>
> Esta função pode retornar **`null`** quando um erro ocorre ou quando o programa
> não produz saída. Não é possível detectar falhas de execução usando
> esta função. [exec()](function.exec.md) deve ser usada quando o acesso ao
> código de saída do programa é requerido.

### Erros/Exceções

Um erro de nível **`E_WARNING`** é gerado
quando o tubo não puder ser estabelecido.

### Examples

**Exemplo #1 Um exemplo de **shell\_exec()****

```
<?php
$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";
?>
```

### Veja também

- [exec()](function.exec.md) - Executa um programa externo
- [escapeshellcmd()](function.escapeshellcmd.md) - Escapa meta-caracteres shell

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
