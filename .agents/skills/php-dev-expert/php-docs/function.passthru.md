# Executa um programa externo e mostra a saída bruta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.passthru.php

---

# passthru

(PHP 4, PHP 5, PHP 7, PHP 8)

passthru — Executa um programa externo e mostra a saída bruta

### Descrição

function **passthru**([string](language.types.string.md) `$command`, [int](language.types.integer.md) `&$result_code` = **`null`**): [?](language.types.null.md)[false](language.types.singleton.md)

A função **passthru()** é similar à função
[exec()](function.exec.md), e executa um comando especificado em
`command`. Esta função
deve ser usada no lugar de [exec()](function.exec.md) ou
[system()](function.system.md) quando a saída do comando Unix
for dado binário que precisa ser passado diretamente de volta ao
navegador. Um uso como para isto é executar algo como os
utilitários pbmplus que podem enviar um fluxo de imagem diretamente. Através
da configuração de Content-type para `image/gif` e
da chamada ao programa pbmplus para saída de um arquivo gif, pode-se criar
scripts PHP que mostram imagens diretamente.

### Parâmetros

`command`
:   O comando que será executado.

`result_code`
:   Se o argumento `result_code` estiver presente, o
    estado de retorno do comando Unix será colocado aqui.

### Valor Retornado

Retorna **`null`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Emitirá um **`E_WARNING`** se **passthru()**
for incapaz de executar o comando especificado no parâmetro `command`.

Lança uma exceção [ValueError](class.valueerror.md) se `command`
estiver vazio ou se contiver bytes nulos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Se `command` estiver vazio ou contiver bytes nulos, **passthru()** agora lança uma exceção [ValueError](class.valueerror.md). Anteriormente, emitia um **`E_WARNING`** e retornava **`false`**. |

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
- [system()](function.system.md) - Executa um programa externo e mostra a saída
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [escapeshellcmd()](function.escapeshellcmd.md) - Escapa meta-caracteres shell
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
