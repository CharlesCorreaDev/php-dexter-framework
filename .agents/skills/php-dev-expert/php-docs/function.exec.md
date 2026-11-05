# Executa um programa externo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.exec.php

---

# exec

(PHP 4, PHP 5, PHP 7, PHP 8)

exec — Executa um programa externo

### Descrição

function **exec**([string](language.types.string.md) `$command`, [array](language.types.array.md) `&$output` = **`null`**, [int](language.types.integer.md) `&$result_code` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

**exec()** executa o comando informado em
`command`.

### Parâmetros

`command`
:   O comando que será executado.

`output`
:   Se o argumento `output` estiver presente, então o
    array especificado será prenchido com cada linha da saída do
    comando. Espaço ao final, como `\n`, não é
    incluído neste array. Note que se o array já contiver alguns
    elementos, **exec()** irá adicionar ao final do array.
    Se nnão houver intenção de que a função adicione elementos, use
    [unset()](function.unset.md) no array antes de passá-lo para
    **exec()**.

`result_code`
:   Se o argumento `result_code` estiver presente
    junto com o argumento `output`, então o
    estado de retorno do comando executado será escrito nesta
    variável.

### Valor Retornado

A última linha do resultado do comando. Se for necessário executar um
comando e ter todos os dados dele passados diretamente de volta sem
qualquer interferência, use a função [passthru()](function.passthru.md).

Retorna **`false`** em caso de falha.

Para obter a saída do comando executado, certifique-se de definir e usar
o parâmetro `output`.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** se **exec()**
for incapaz de executar o comando em `command`.

Lança uma exceção [ValueError](class.valueerror.md) se `command`
estiver vazio ou contiver bytes nulos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Se `command` estiver vazio ou contiver bytes nulos, **exec()** agora lança uma exceção [ValueError](class.valueerror.md). Anteriormente emitia um erro de nível **`E_WARNING`** e retornava **`false`**. |

### Examples

**Exemplo #1 Um exemplo **exec()****

```
<?php
// Mostra o nome de quem é o dono do processo php/httpd
// (em um sistema com o executável "whoami" no path)
exec('whoami', $output, $result_code);
echo "Retornou com estado $result_code e saída:\n";
print_r($output);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Retornou com estado 0 e saída:
Array
(
    [0] => cmb
)
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

> **Nota**:
>
> No Windows, a função **exec()**
> primeiro iniciará o cmd.exe para executar o comando. Se desejar iniciar um programa externo sem iniciar o cmd.exe,
> use a função [proc\_open()](function.proc-open.md) com o parâmetro `bypass_shell` definido.

### Veja também

- [system()](function.system.md) - Executa um programa externo e mostra a saída
- [passthru()](function.passthru.md) - Executa um programa externo e mostra a saída bruta
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
