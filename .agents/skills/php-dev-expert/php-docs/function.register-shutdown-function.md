# Registra uma função para ser executada no final da execução do script

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.register-shutdown-function.php

---

# register\_shutdown\_function

(PHP 4, PHP 5, PHP 7, PHP 8)

register\_shutdown\_function — Registra uma função para ser executada no final da execução do script

### Descrição

function **register\_shutdown\_function**([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `...$args`): [void](language.types.void.md)

Registra a função nomeada por `callback` para ser executada após o término da
execução do script ou após a chamada a [exit()](function.exit.md).

Múltiplas chamadas a **register\_shutdown\_function()** podem ser
feitas, e cada uma irá ser chamada na mesma ordem em que foram registradas.
Se [exit()](function.exit.md) for chamada dentro de uma função de
desligamento, o processamento irá parar completamente e nenhuma outra função
de desligamento será chamada.

**Cuidado**

Desde o PHP 8.4.0, uma chamada a [exit()](function.exit.md) sem parâmetros dentro de
uma função de desligamento registrada redefine o código de saída para `0`.
Chamar [exit()](function.exit.md) com um status específico substitui o
código de saída anterior em todas as versões.

As próprias funções de desligamento também podem chamar **register\_shutdown\_function()**
para adicionar uma função de desligamento ao final da fila.

### Parâmetros

`callback`
:   A função de desligamento a ser registrada.

    As chamadas às funções de desligamento são executadas como parte da requisição, portanto
    é possível enviar resultados a partir delas e acessar buffers de saída.

`args`
:   É possível passar parâmetros para a função de desligamento passando
    parâmetros adicionais.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **register\_shutdown\_function()****

```
<?php
function desligamento()
{
    // Esta é uma função de desligamento, aqui
    // podem ser feitas as últimas operações
    // antes que o script seja concluído.

    echo 'Script executado com sucesso', PHP_EOL;
}

register_shutdown_function('desligamento');
?>
```

### Notas

> **Nota**:
>
> O diretório de trabalho do script pode mudar dentro da função de desligamento
> em alguns servidores web, por exemplo, no Apache.

> **Nota**:
>
> As funções de desligamento não serão executadas se o processo for encerrado com um sinal
> SIGTERM ou SIGKILL. Embora um SIGKILL não possa ser interceptado, pode ser usada a função [pcntl\_signal()](function.pcntl-signal.md)
> para instalar um manipulador para um SIGTERM que usa [exit()](function.exit.md) para
> terminar de forma limpa.

> **Nota**:
>
> As funções de desligamento são executadas separadamente do tempo monitorado por
> [max\_execution\_time](info.configuration.md#ini.max-execution-time). Isso significa que
> mesmo que um processo seja encerrado por ter sido executado por muito tempo, as funções de desligamento ainda serão
> chamadas. Além disso, se o `max_execution_time` acabar enquanto
> uma função de desligamento estiver em execução, ela não será encerrada.

### Veja também

- [auto\_append\_file](ini.core.md#ini.auto-append-file)
- [exit()](function.exit.md) - Termina o script atual com um código ou uma mensagem de status
- [fastcgi\_finish\_request()](function.fastcgi-finish-request.md) - Envia todos os dados de resposta ao cliente
- A seção sobre [manipulação de conexões](features.connection-handling.md)

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
