# Ativa o buffer de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-start.php

---

# ob\_start

(PHP 4, PHP 5, PHP 7, PHP 8)

ob\_start — Ativa o buffer de saída

### Descrição

function **ob\_start**([?](language.types.null.md)[callable](language.types.callable.md) `$callback` = **`null`**, [int](language.types.integer.md) `$chunk_size` = 0, [int](language.types.integer.md) `$flags` = **`PHP_OUTPUT_HANDLER_STDFLAGS`**): [bool](language.types.boolean.md)

Esta função irá ativar o buffer de saída.
Enquanto o buffer de saída estiver ativo, não é enviada a saída do script, (outros que não sejam cabeçalhos),
ao invés disto a saída é guardada em um buffer interno.
Consulte [Que Saída é Armazenada em Buffer?](outcontrol.what-output-is-buffered.md)
sobre exatamente que saída é afetada.

Buffers de saída são empilháveis, ou seja,
**ob\_start()** pode ser chamada enquanto outro buffer estiver ativo.
Se múltiplos buffers de saída estiverem ativos,
a saída será filtrada sequencialmente
atráves de cada uma delas na ordem de aninhamento.
Consulte [Aninhando Buffers de Saída](outcontrol.nesting-output-buffers.md) para mais detalhes.

Consulte [Buffers de Saída em Nível de Usuário](outcontrol.user-level-output-buffers.md)
para uma descrição detalhada de buffers de saída.

### Parâmetros

`callback`
:   Uma função `callback` do tipo [callable](language.types.callable.md) pode ser
    especificada. Ela também pode ser ignorada passando-se **`null`**.

    `callback` é chamada quando o buffer de saída é
    descarregado (enviado), limpo, ou quando o buffer de saída é descarregado
    no final da execução do script.

    A assinatura da função `callback` deve ser da seguinte forma:

    function handler([string](language.types.string.md) `$buffer`, [int](language.types.integer.md) `$phase` = ?): [string](language.types.string.md)

    `buffer`
    :   O conteúdo original do buffer.

    `phase`
    :   Máscara de bits das
        [constantes
        **`PHP_OUTPUT_HANDLER_*`**](outcontrol.constants.md#constant.php-output-handler-start).
        Consulte [Opções Passadas aos Manipuladores de Saída](outcontrol.flags-passed-to-output-handlers.md)
        para mais detalhes.

    Se `callback` retornar **`false`**,
    o conteúdo do buffer é retornado.
    Consulte [Valores de Retorno do Menipulador de Saída](outcontrol.output-handler-return-values.md)
    para mais detalhes.

    **Aviso**

    Chamar qualquer das funções a seguir de dentro de um manipulador de saída
    resultará em erro fatal:
    [ob\_clean()](function.ob-clean.md), [ob\_end\_clean()](function.ob-end-clean.md),
    [ob\_end\_flush()](function.ob-end-flush.md), [ob\_flush()](function.ob-flush.md),
    [ob\_get\_clean()](function.ob-get-clean.md), [ob\_get\_flush()](function.ob-get-flush.md) e
    **ob\_start()**.

    Consulte [Manipuladores de Saída](outcontrol.output-handlers.md)
    e [Trabalhando com Manipuladores de Saída](outcontrol.working-with-output-handlers.md)
    para mais detalhes sobre as funções `callback` (manipuladores de saída).

`chunk_size`
:   Se o parâmetro opcional `chunk_size` for informado,
    o buffer será descarregado depois que algum bloco de código que produza saída
    faça com que o tamanho do buffer fique igual ou
    maior que `chunk_size`.
    O valor padrão é `0`, que significa
    que toda a saída fica em buffer até que ele seja desligado.
    Consulte [Tamanho do Buffer](outcontrol.buffer-size.md) para mais detalhes.

`flags`
:   O parâmetro `flags` é uma máscara de bits que controla
    as operações que podem ser realizadas no buffer de saída. O padrão
    é permitir que o buffer de saída possa ser limpo, descarregado ou removido, o que
    pode ser configurado explicitamente através das
    [opções de controle de buffer](outcontrol.constants.md#outcontrol.constants.buffer-control-flags).
    Consulte [Operações permitidas em buffers](outcontrol.operations-on-buffers.md)
    para mais detalhes.

    Cada opção controla o acesso das funções, como descrito a seguir:

    | Constante | Funções |
    | --- | --- |
    | **`PHP_OUTPUT_HANDLER_CLEANABLE`** | [ob\_clean()](function.ob-clean.md) |
    | **`PHP_OUTPUT_HANDLER_FLUSHABLE`** | [ob\_flush()](function.ob-flush.md) |
    | **`PHP_OUTPUT_HANDLER_REMOVABLE`** | [ob\_end\_clean()](function.ob-end-clean.md), [ob\_end\_flush()](function.ob-end-flush.md), [ob\_get\_clean()](function.ob-get-clean.md) e [ob\_get\_flush()](function.ob-get-flush.md) |

    > **Nota**:
    >
    > Antes do PHP 8.4.0, o parâmetro flags poderia definir
    > também as [opções de status do manipulador de saída](outcontrol.constants.md#outcontrol.constants.flags-returned-by-handler).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de uma função de callback**

```
<?php

function callback($buffer)
{
  // substitui apples por oranges
  return (str_replace("apples", "oranges", $buffer));
}

ob_start("callback");

?>
<html>
<body>
<p>It's like comparing apples to oranges.</p>
</body>
</html>
<?php

ob_end_flush();

?>
```

O exemplo acima produzirá:

```
<html>
<body>
<p>It's like comparing oranges to oranges.</p>
</body>
</html>
```

**Exemplo #2 Criando um buffer de saída não apagável**

```
<?php

ob_start(null, 0, PHP_OUTPUT_HANDLER_STDFLAGS ^ PHP_OUTPUT_HANDLER_REMOVABLE);

?>
```

### Veja também

- [ob\_get\_contents()](function.ob-get-contents.md) - Retorna o conteúdo do buffer de saída
- [ob\_end\_clean()](function.ob-end-clean.md) - Limpa (apaga) o conteúdo do buffer de saída ativo e desliga-o
- [ob\_end\_flush()](function.ob-end-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
  e desliga o buffer de saída ativo
- [ob\_implicit\_flush()](function.ob-implicit-flush.md) - Liga ou desliga o descarregamento implícito
- [ob\_gzhandler()](function.ob-gzhandler.md) - Função de chamada de retorno de ob\_start para comprimir o buffer de saída com gzip
- [ob\_iconv\_handler()](function.ob-iconv-handler.md) - Converte codificação de caracteres como manipulador de buffer de saída
- [mb\_output\_handler()](function.mb-output-handler.md) - Callback converte a codificação de caracteres no buffer de saída
- [ob\_tidyhandler()](function.ob-tidyhandler.md) - Função de retorno ob\_start para reparar o buffer

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
