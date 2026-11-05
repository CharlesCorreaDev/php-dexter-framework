# Executa um programa externo e mostra a saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.system.php

---

# system

(PHP 4, PHP 5, PHP 7, PHP 8)

system — Executa um programa externo e mostra a saída

### Descrição

function **system**([string](language.types.string.md) `$command`, [int](language.types.integer.md) `&$result_code` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

**system()** é igual à versão C desta
função, executa o comando informado em
`command` e mostra o resultado.

A chamada a **system()** também tenta automaticamente
descarregar o buffer de saída do servidor web após cada linha de saída se
o PHP estiver sendo executado como módulo do servidor.

Se for necessário executar um comando e obter todos os dados do
comando passados diretamente sem nenhuma interferência, use a
função [passthru()](function.passthru.md).

### Parâmetros

`command`
:   O comando que será executado.

`result_code`
:   Se o argumento `result_code` estiver presente, o
    estado de retorno do comando executado será escrito nesta
    variável.

### Valor Retornado

Retorna a última linha da saída do comando em caso de sucesso, e **`false`**
em caso de falha.

### Examples

**Exemplo #1 Exemplo de **system()****

```
<?php
echo '<pre>';

// Mostra todo o resultado do comando do shell "ls", e retorna
// a última linha da saída em $last_line. Guarda o valor de retorno
// do comando shell em $retval.
$last_line = system('ls', $retval);

// Mostrando informação adicional
echo '
</pre>
<hr />Última linha da saída: '.$last_line.'
<hr />Valor de Retorno: '.$retval;
?>
```

### Notas

**Aviso**

Ao permitir que os dados fornecidos pelo usuário sejam
passados para esta função, use
[escapeshellarg()](function.escapeshellarg.md) ou [escapeshellcmd()](function.escapeshellcmd.md)
para garantir que os usuários não possam induzir o sistema a executar comandos
arbitrários.

> **Nota**:
>
> Se um programa for iniciado com esta função,
> para que continue rodando em segundo plano, a saída do
> programa deve ser redirecionada para um arquivo ou outro fluxo de saída. Deixar de fazer isso
> fará com que o PHP trave até que a execução do programa termine.

### Veja também

- [exec()](function.exec.md) - Executa um programa externo
- [passthru()](function.passthru.md) - Executa um programa externo e mostra a saída bruta
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [escapeshellcmd()](function.escapeshellcmd.md) - Escapa meta-caracteres shell
- [pcntl\_exec()](function.pcntl-exec.md) - Executa o programa especificado no espaço do processo atual
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
