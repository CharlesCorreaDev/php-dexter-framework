# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/info.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração do PHP**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [assert.active](info.configuration.md#ini.assert.active) | "1" | **`INI_ALL`** | Descontinuado desde o PHP 8.3.0 |
| [assert.bail](info.configuration.md#ini.assert.bail) | "0" | **`INI_ALL`** | Descontinuado desde o PHP 8.3.0 |
| [assert.warning](info.configuration.md#ini.assert.warning) | "1" | **`INI_ALL`** | Descontinuado desde o PHP 8.3.0 |
| [assert.callback](info.configuration.md#ini.assert.callback) | NULL | **`INI_ALL`** | Descontinuado desde o PHP 8.3.0 |
| [assert.quiet\_eval](info.configuration.md#ini.assert.quiet-eval) | "0" | **`INI_ALL`** | Removido desde o PHP 8.0.0 |
| [assert.exception](info.configuration.md#ini.assert.exception) | "1" | **`INI_ALL`** | Anteriormente ao PHP 8.0.0 o padrão era `"0"`. Desencorajado desde o PHP 8.3.0 |
| [enable\_dl](info.configuration.md#ini.enable-dl) | "1" | **`INI_SYSTEM`** | Este recurso descontinuado *será* certamente *removido* no futuro. |
| [max\_execution\_time](info.configuration.md#ini.max-execution-time) | "30" | **`INI_ALL`** |  |
| [max\_input\_time](info.configuration.md#ini.max-input-time) | "-1" | **`INI_PERDIR`** |  |
| [max\_input\_nesting\_level](info.configuration.md#ini.max-input-nesting-level) | "64" | **`INI_PERDIR`** |  |
| [max\_input\_vars](info.configuration.md#ini.max-input-vars) | 1000 | **`INI_PERDIR`** |  |
| [zend.enable\_gc](info.configuration.md#ini.zend.enable-gc) | "1" | **`INI_ALL`** |  |
| [zend.max\_allowed\_stack\_size](info.configuration.md#ini.zend.max-allowed-stack-size) | "0" | **`INI_SYSTEM`** | Disponível a partir do PHP 8.3.0. |
| [zend.reserved\_stack\_size](info.configuration.md#ini.zend.reserved-stack-size) | "0" | **`INI_SYSTEM`** | Disponível a partir do PHP 8.3.0. |
| [fiber.stack\_size](info.configuration.md#ini.fiber.stack-size) |  | **`INI_ALL`** | Disponível a partir do PHP 8.1.0. |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`assert.active` [bool](language.types.boolean.md)
:   Ativa a avaliação de [assert()](function.assert.md).
    [zend.assertions](ini.core.md#ini.zend.assertions) deve ser
    utilizado para controlar o comportamento de [assert()](function.assert.md).

    **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso
    é fortemente desencorajado.

`assert.bail` [bool](language.types.boolean.md)
:   Termina a execução de scripts se uma asserção falharem.

    **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso
    é fortemente desencorajado.

`assert.warning` [bool](language.types.boolean.md)
:   Emite um warning para cada falha de assert.

    **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso
    é fortemente desencorajado.

`assert.callback` [string](language.types.string.md)
:   Função a chamar em caso de asserts falharem.

    **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso
    é fortemente desencorajado.

`assert.quiet_eval` [bool](language.types.boolean.md)
:   **Aviso**

    Este recurso foi *REMOVIDO* a partir do PHP 8.0.0.

    Utilize a configuração atual de [error\_reporting()](function.error-reporting.md) durante
    a avaliação de expressões assert. Se ativo então nenhum erro é mostrado
    (padrão é error\_reporting(0)) nas avaliações. Se desativa erros são
    mostrados de acordo com as configurações de [error\_reporting()](function.error-reporting.md)

`assert.exception` [bool](language.types.boolean.md)
:   Lança uma exceção [AssertionError](class.assertionerror.md) no caso de um assert
    falhar.

    **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso
    é fortemente desencorajado.

`enable_dl` [bool](language.types.boolean.md)
:   Esta diretiva permite ativar ou desativar o carregamento
    dinâmico de extensões do PHP com [dl()](function.dl.md)
    .

    A razão principal para desligar o carregamento dinâmico é
    segurança. Com carregamento dinâmico é possível ignorar todas as restrições de
    [open\_basedir](ini.core.md#ini.open-basedir).
    O padrão é permitir carregamento dinâmico.

`max_execution_time` [int](language.types.integer.md)
:   Isso configura o tempo máximo, em segundos, que um script é permitido
    executar antes de ser terminado. Isso ajuda a prevenir que scripts
    mal escritos de lotar os servidores. O padrão
    é de `30` segundos. Quando rodando o PHP
    a partir da [linha de
    comando](features.commandline.md) o padrão é zero `0`.

    O tempo máximo de execução não é afetado por chamadas de sistema,
    operações em fluxos, etc. Veja a documentação da função
    [set\_time\_limit()](function.set-time-limit.md) para mais
    detalhes.

    Quando o PHP é compilado com
    [--enable-zend-max-execution-timers](configure.about.md#configure.enable-zend-max-execution-timers)
    (o padrão para builds ZTS desde o PHP 8.3.0), o limite é rastreado
    com temporizadores POSIX por thread que medem o tempo decorrido, então o tempo
    gasto dormindo ou esperando por E/S conta para ele. O rastreamento padrão
    baseado em `setitimer(ITIMER_PROF)` mede
    o tempo de CPU em vez disso.

    Seu servidor web pode ter outras configurações de timeout que também
    interrompam a execução do PHP. Apache possui uma diretiva
    `Timeout` e o IIS tem uma função de timeout CGI.
    Ambos com padrão de 300 segundos. Veja a documentação do servidor web
    para mais detalhes.

`max_input_time` [int](language.types.integer.md)
:   Configura o tempo máximo, em segundos, que um script é permitido dispensar
    interpretando dados de entrada, como GET e POST. O cronômetro começa no
    momento que o PHP é chamado pelo servidor e termina quando a execução começa.
    A configuração padrão é `-1`, o que significa que o valor de
    [max\_execution\_time](info.configuration.md#ini.max-execution-time)
    será usado. Defina como `0` para permitir tempo ilimitado.

`max_input_nesting_level` [int](language.types.integer.md)
:   Configura a profundidade máxima de níveis das
    [variáveis de entrada](language.variables.external.md) (
    [$\_GET](reserved.variables.get.md), [$\_POST](reserved.variables.post.md)).

`max_input_vars` [int](language.types.integer.md)
:   Configura quantas [variáveis de
    entrada](language.variables.external.md) serão aceitas, com o limte aplicado a cada super global
    $\_GET, $\_POST e $\_COOKIE separadamente). O uso dessa diretiva
    mitiga a possibilidade de ataques de negação de serviço que utilizam colisões de hash.
    Se houver mais variáveis do que o especificado nessa diretiva
    um **`E_WARNING`** é lançado, e variáveis de
    entrada adicionais são ignorados.

`zend.enable_gc` [bool](language.types.boolean.md)
:   Ativa ou desativa o coletor de refefências circulares.

`zend.max_allowed_stack_size` [int](language.types.integer.md)
:   O espaço máximo de pilha nativa que o sistema operacional permite que
    o programa consuma.
    Tentar consumir mais do que o sistema operacional permite
    normalmente resulta em uma falha grave, sem informações de depuração facilmente
    disponíveis.
    Para facilitar a depuração, o mecanismo lança uma exceção
    [Error](class.error.md)
    antes que isso aconteça (quando o programa usa mais que
    [zend.max\_allowed\_stack\_size](info.configuration.md#ini.zend.max-allowed-stack-size)-[zend.reserved\_stack\_size](info.configuration.md#ini.zend.reserved-stack-size)
    bytes de pilha).

    A recursão no código definido pelo usuário não consome espaço de pilha nativo.
    No entanto, funções internas e métodos mágicos sim.
    A recursão muito profunda envolvendo essas funções pode fazer com que o programa
    esgote todo o espaço de pilha nativa disponível.

    Os valores possíveis para este parâmetro são:

    - `0`:
      Detecta automaticamente o espaço máximo de pilha nativa que o sistema operacional
      permite que o programa consuma.
      Este é o padrão.
      Quando a detecção não é possível, um padrão conhecido do sistema é usado.
    - `-1`: Desativa a verificação do tamanho da pilha no mecanismo.
    - Inteiro positivo: um tamanho fixo, em bytes.
      Definir esse valor muito alto tem o mesmo efeito que desabilitar a verificação do
      tamanho da pilha.

    Como o tamanho da pilha dos
    [fibers](language.fibers.md)
    é determinado por
    [fiber.stack\_size](info.configuration.md#ini.fiber.stack-size),
    o valor deste parâmetro é usado em vez do
    [zend.max\_allowed\_stack\_size](info.configuration.md#ini.zend.max-allowed-stack-size)
    ao verificar o uso da pilha durante a execução de um Fiber.

    > **Nota**:
    >
    > Isso não está relacionado a estouros de *buffer* de pilha e não é um recurso
    > de segurança.

`zend.reserved_stack_size` [int](language.types.integer.md)
:   O tamanho da pilha reservada, em bytes.
    Isso é subtraído do
    [tamanho máximo permitido da pilha](info.configuration.md#ini.zend.max-allowed-stack-size),
    como um buffer, ao verificar o tamanho da pilha.

    Os valores possíveis para este parâmetro são:

    - `0`: Detecta automaticamente um tamanho razoável.
    - Inteiro positivo: um tamanho fixo, em bytes.

`fiber.stack_size` [int](language.types.integer.md)
:   O tamanho da pilha nativa, em bytes, alocado para cada
    [Fiber](language.fibers.md).

    O valor padrão é 1MiB em sistemas com tamanho de ponteiro inferior a
    8 bytes ou 2MiB caso contrário.

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
