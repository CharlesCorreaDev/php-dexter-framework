# Define funções de armazenamento de sessão à nível de usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-set-save-handler.php

---

# session\_set\_save\_handler

(PHP 4, PHP 5, PHP 7, PHP 8)

session\_set\_save\_handler — Define funções de armazenamento de sessão à nível de usuário

### Descrição

function **session\_set\_save\_handler**(  
    [callable](language.types.callable.md) `$open`,  
    [callable](language.types.callable.md) `$close`,  
    [callable](language.types.callable.md) `$read`,  
    [callable](language.types.callable.md) `$write`,  
    [callable](language.types.callable.md) `$destroy`,  
    [callable](language.types.callable.md) `$gc`,  
    [callable](language.types.callable.md) `$create_sid` = ?,  
    [callable](language.types.callable.md) `$validate_sid` = ?,  
    [callable](language.types.callable.md) `$update_timestamp` = ?  
): [bool](language.types.boolean.md)

É possível registrar o seguinte protótipo:

function **session\_set\_save\_handler**([object](language.types.object.md) `$sessionhandler`, [bool](language.types.boolean.md) `$register_shutdown` = **`true`**): [bool](language.types.boolean.md)

**session\_set\_save\_handler()** define, a nível de usuário,
as funções de armazenamento de sessão que serão usadas para guardar e
buscar dados associados à uma sessão. Ela é mais útil
quando um método de armazenamento diferente do método disponibilizado pelas sessões do PHP
é preferido, por exemplo armazenar os dados de sessão em um banco de dados.

### Parâmetros

Essa função tem dois protótipos.

`sessionhandler`
:   Uma instância de uma classe implementando
    [SessionHandlerInterface](class.sessionhandlerinterface.md), e opcionalmente
    [SessionIdInterface](class.sessionidinterface.md) e/ou
    [SessionUpdateTimestampHandlerInterface](class.sessionupdatetimestamphandlerinterface.md), como
    [SessionHandler](class.sessionhandler.md), para registrá-la como manipulador
    de sessão.

`register_shutdown`
:   Registra [session\_write\_close()](function.session-write-close.md) como uma função
    [register\_shutdown\_function()](function.register-shutdown-function.md).

ou

`open`
:   Um callable com a seguinte assinatura:

    function open([string](language.types.string.md) `$savePath`, [string](language.types.string.md) `$sessionName`): [bool](language.types.boolean.md)

    O callback open funciona igual um construtor em classes e é
    executado quando a sessão está sendo aberta. É a primeira função de
    callback executada quando a sessão é iniciada automaticamente ou
    manualmente com [session\_start()](function.session-start.md).
    O valor de retorno é **`true`** para sucesso, **`false`** para falha.

`close`
:   Um callable com a seguinte assinatura:

    function close(): [bool](language.types.boolean.md)

    O callback close funciona igual um destrutor em classes e é
    executado depois que o callback write da sessão for chamado. Ele também é invocado quando a função
    [session\_write\_close()](function.session-write-close.md) é chamada.
    O valor de retorno é **`true`** para sucesso, **`false`** para falha.

`read`
:   Um callable com a seguinte assinatura:

    function read([string](language.types.string.md) `$sessionId`): [string](language.types.string.md)

    O callback `read` sempre deve retornar uma sessão codificada (serializada) no formato
    string ou uma string vazia se não há dados para leitura.

    Esse callback é chamado internamente pelo PHP quando a sessão inicia ou
    quando a função [session\_start()](function.session-start.md) é chamada. Antes que esse callback seja invocado,
    o PHP invocará o callback `open`.

    O valor que esse callback retorna deve estar exatamente no mesmo formato de serialização que originalmente foi
    passado para armazenamento ao callback `write`. O valor retornado será
    desserializado automaticamente pelo PHP e usado para preencher a super global [$\_SESSION](reserved.variables.session.md).
    Mesmo que os dados pareçam similares ao de [serialize()](function.serialize.md), note que é um formato diferente,
    especificado na configuração INI [session.serialize\_handler](session.configuration.md#ini.session.serialize-handler).

`write`
:   Um callable com a seguinte assinatura:

    function write([string](language.types.string.md) `$sessionId`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

    O callback `write` é chamado quando a sessão precisa ser salva e fechada. Esse
    callback recebe o ID da sessão atual e uma versão serializada da super global [$\_SESSION](reserved.variables.session.md). O método de
    serialização usado internamente pelo PHP é definido pela configuração INI [session.serialize\_handler](session.configuration.md#ini.session.serialize-handler).

    Os dados de sessão serializados passado para esse callback devem ser armazenados junto com o ID de sessão passado. Ao buscar
    esses dados, o callback `read` deve retornar exatamente o mesmo valor que foi passado originalmente para
    o callback `write`.

    Esse callback é invocado quando o PHP é encerrado ou explicitamente quando a função [session\_write\_close()](function.session-write-close.md)
    é chamada. Note que depois de executar esta função, o PHP executará internamente o callback `close`.
    > **Nota**:
    >
    > O manipulador "write" não é executado enquanto o fluxo de saída não for
    > encerrado. Portanto, saídas de comandos de debug no manipulador "write"
    > nunca serão vistas pelo browser. Se a saída de debug é
    > necessária, é recomendado que ela seja escrita
    > em arquivo.

`destroy`
:   Um callable com a seguinte assinatura:

    function destroy([string](language.types.string.md) `$sessionId`): [bool](language.types.boolean.md)

    Esse callback é executado quando uma sessão é destruída com [session\_destroy()](function.session-destroy.md) ou com
    [session\_regenerate\_id()](function.session-regenerate-id.md) com o parâmetro de destruição definido como **`true`**.
    O valor de retorno deve ser **`true`** para sucesso, **`false`** para falha.

`gc`
:   Um callable com a seguinte assinatura:

    function gc([int](language.types.integer.md) `$lifetime`): [bool](language.types.boolean.md)

    O callback de limpeza (gc) é invocado pelo PHP, internamente e periodicamente, para
    apagar dados de sessão antiga. A frequência é controlada por
    [session.gc\_probability](session.configuration.md#ini.session.gc-probability) e [session.gc\_divisor](session.configuration.md#ini.session.gc-divisor).
    O valor do parâmetro que é passado para esse callback pode ser definido em [session.gc\_maxlifetime](session.configuration.md#ini.session.gc-maxlifetime).
    O valor de retorno deve ser **`true`** para sucesso, **`false`** para falha.

`create_sid`
:   Um callable com a seguinte assinatura:

    function create\_sid(): [string](language.types.string.md)

    Esse callback é executado quando um novo ID de sessão é necessário. Nenhum
    parâmetro é necessário e o valor de retorno deve ser uma string que
    seja um ID de sessão válido para seu manipulador.

`validate_sid`
:   Um callable com a seguinte assinatura:

    function validate\_sid([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

    Este callback é executado quando uma sessão é iniciada, um ID de sessão é fornecido
    e [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode) é habilitado.
    A `key` é o ID da sessão para validar.
    Um ID de sessão é válido se já existir uma sessão com esse ID.
    O valor retornado deve ser **`true`** em caso de sucesso, **`false`** em caso de falha.

`update_timestamp`
:   Um callable com a seguinte assinatura:

    function update\_timestamp([string](language.types.string.md) `$key`, [string](language.types.string.md) `$val`): [bool](language.types.boolean.md)

    Este callback é executado quando uma sessão é atualizada.
    `key` é o ID da sessão, `val` são os dados da sessão.
    O valor retornado deve ser **`true`** em caso de sucesso, **`false`** em caso de falha.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Chamar **session\_set\_save\_handler()** com mais de dois argumentos agora foi descontinuado. Use a assinatura com dois argumentos. |

### Examples

**Exemplo #1
Manipulador de sessão personalizado: veja o código completo na sinópse de [SessionHandlerInterface](class.sessionhandlerinterface.md).**

Aqui é demonstrado apenas a execução, o código completo pode ser
visto na sinópse de [SessionHandlerInterface](class.sessionhandlerinterface.md) no link acima.

Note que é usado orientação à objetos com **session\_set\_save\_handler()** e
a função de encerramento (register\_shutdown) é registrada usando sua respectiva flag. Isto geralmente é
aconselhável ao registrar objetos como manipuladores de gravação de sessão.

```
<?php
class MySessionHandler implements SessionHandlerInterface
{
    // implementa a interface aqui
}

$handler = new MySessionHandler();
session_set_save_handler($handler, true);
session_start();

// proceder para definir e recuperar os valores pela chave de $_SESSION
```

### Notas

**Aviso**

The `write` e
`close` são executados depois da destruição de
objetos e portanto não podem usar objetos ou lançar exceções.
Não é possível capturar nem
exibir o rastro (trace) de exceções e a execução simplesmente será interrompida de forma inesperada.
Contudo, os destrutores do objeto podem usar sessões.

É possível chamar [session\_write\_close()](function.session-write-close.md) do
destrutor para resolver esse problema de 'o ovo e a galinha' mas a forma mais confiável é
registrar a função de finalização como descrito acima.

**Aviso**

O diretório de trabalho atual é alterado com algumas SAPIs (Server API) se a sessão for
fechada na finalização do script. É possível fechar a sessão
antecipadamente com [session\_write\_close()](function.session-write-close.md).

### Veja também

- [session.save\_handler](session.configuration.md#ini.session.save-handler)
  (diretiva de configuração)
- [session.serialize\_handler](session.configuration.md#ini.session.serialize-handler)
  (diretiva de configuração)
- A [register\_shutdown\_function()](function.register-shutdown-function.md) - Registra uma função para ser executada no final da execução do script
- The [session\_register\_shutdown()](function.session-register-shutdown.md) - Função de finalização da sessão
- Visite [» save\_handler.inc](https://github.com/php/php-src/blob/master/ext/session/tests/save_handler.inc)
  para ver uma implementação completamente procedural

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
