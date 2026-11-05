# Operadores de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.execution.php

---

## Operadores de Execução

O PHP suporta um operador de execução: acentos graves (``` `` ```). Note que
não são aspas simples! O PHP tentará executar
o conteúdo dentro dos acentos graves como um comando do shell; a saída será
retornada (isto é, ela não será simplesmente mostrada na tela;
ela pode ser atribuída a uma variável). A utilização do operador de execução é idêntica
a da função [shell\_exec()](function.shell-exec.md).

**Exemplo #1 Operador de execução**

```
<?php
$output = `ls -al`;
echo "<pre>$output</pre>";
?>
```

> **Nota**:
>
> O operador de execução fica desabilitado quando
> [shell\_exec()](function.shell-exec.md) está desabilitado.

> **Nota**:
>
> Ao contrário de outras linguagens, acentos graves não têm sentido especial
> dentro de strings delimitadas por aspas.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O operador de execução como um sinônimo para [shell\_exec()](function.shell-exec.md) foi descontinuado. |

### Veja também

- [Funções de execução de programas](ref.exec.md)
- [popen()](function.popen.md)
- [proc\_open()](function.proc-open.md)
- [Utilizando o PHP em linha de comando](features.commandline.md)

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
