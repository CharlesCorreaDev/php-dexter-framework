# Executa o equivalente à chamada de sistema select() nos arrays de fluxos
   informados com um limite de tempo especificado por segundos e microssegundos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-select.php

---

# stream\_select

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

stream\_select — Executa o equivalente à chamada de sistema select() nos arrays de fluxos
informados com um limite de tempo especificado por segundos e microssegundos

### Descrição

function **stream\_select**(  
    [?](language.types.null.md)[array](language.types.array.md) `&$read`,  
    [?](language.types.null.md)[array](language.types.array.md) `&$write`,  
    [?](language.types.null.md)[array](language.types.array.md) `&$except`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$seconds`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$microseconds` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

A função **stream\_select()** aceita arrays de fluxos e
espera por alteração em seus estados. Sua operação é equivalente à da
função [socket\_select()](function.socket-select.md) exceto por atuar em fluxos.

### Parâmetros

`read`
:   Os fluxos listados no array `read` serão observados para
    ver se caracteres se tornem disponíveis para leitura (mais precisamente, para ver se
    uma leitura não irá bloquear - em particular, um recurso de fluxo já se encontra pronto no
    final do arquivo, neste caso a função [fread()](function.fread.md) irá retornar uma string
    com comprimento zero).

`write`
:   Os fluxos listados no array `write` serão
    observados para ver se uma escrita não irá bloquear.

`except`
:   Os fluxos listados no array `except` serão observados
    para chegada de dados excepcional ("fora-de-banda") de alta prioridade.

    > **Nota**:
    >
    > Quando **stream\_select()** retorna, os arrays
    > `read`, `write` e
    > `except` são modificados para indicar qual(is) recurso(s)
    > de fluxo realmente tiveram o estado alterado.
    > As chaves originais dos [array](language.types.array.md)s são preservadas.

`seconds`
:   Os parâmetros `seconds` e `microseconds`
    formam juntos o parâmetro *limite de tempo*,
    `seconds` especifica o número de segundos e
    `microseconds` o número de microssegundos.
    O parâmetro `timeout` é um limite do tempo
    que **stream\_select()** esperará antes de retornar.
    Se `seconds` for igual a `0` e
    `microseconds` for igual a `0` ou **`null`**,
    **stream\_select()** não esperará por dados - em vez disso retornará imediatamente,
    indicando o estado atual dos fluxos.

    Se `seconds` for **`null`** **stream\_select()**
    pode bloquear indefinidamente, retornando somente quando um evento em algum dos
    fluxos observados ocorrer (ou se um sinal interromper a chamada de sistema).

    **Aviso**

    Usando um valor de `0` no limite de tempo permite que
    se faça pesquisa instantânea dos estados dos fluxos, entretanto, NÃO é
    recomendado usar um limite de `0` em um loop pois poderá
    causar um consumo excessivo de tempo de CPU.

    É muito melhor especificar um limite de tempo de alguns segundos, embora
    caso seja necessário ficar verificando e executando outro código concorrentemente, usar
    um limite de pelo menos `200000` microssegundos ajudará
    a reduzir o consumo de CPU do seu script.

    Lembre-se que o valor de limite de tempo é o tempo máximo que irá decorrer;
    **stream\_select()** irá retornar tão logo os fluxos
    requisitados estiverem prontos para uso.

`microseconds`
:   Veja descrição de `seconds`.

### Valor Retornado

Em caso de sucesso, **stream\_select()** retorna o número de
recursos de fluxo contidos nos arrays modificados, o que pode ser zero se
o limite de tempo for alcançado antes que alguma coisa interessante aconteça. Em caso de erro, **`false`**
é retornado e um aviso é emitido (isto pode acontecer se a chamada ao sistema for
interrompida por algum sinal).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | `microseconds` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **stream\_select()****

Este exemplo verifica se dados chegaram para leitura em
`$stream1` ou `$stream2`.
Como o valor de limite de tempo é `0` a função retornará
imediatamente:

```
<?php
/* Prepara o array de leitura */
$read   = array($stream1, $stream2);
$write  = NULL;
$except = NULL;
if (false === ($num_changed_streams = stream_select($read, $write, $except, 0))) {
    /* Lidando com erros */
} elseif ($num_changed_streams > 0) {
    /* Pelo menos em um dos fluxos algo interessante ocorreu */
}
?>
```

### Notas

> **Nota**:
>
> Devido a uma limitação no motor Zend atual, não é possível passar um
> modificador de constante como **`null`** diretamente como um parâmetro para uma função
> que espera que o parâmetro seja passado por referência. Em vez disso, use uma
> variável temporária ou uma expressão com o membro mais a esquerda sendo uma
> variável temporária:
>
> ```
> <?php
> $e = NULL;
> stream_select($r, $w, $e, 0);
> ?>
> ```

> **Nota**:
>
> Certifique-se de usar o operador `===` na verificação de
> erro. Como a função **stream\_select()** pode retornar 0, a
> comparação com `==` pode ser interpretada como **`true`**:
>
> ```
> <?php
> $e = NULL;
> if (false === stream_select($r, $w, $e, 0)) {
>     echo "stream_select() falhou\n";
> }
> ?>
> ```

> **Nota**:
>
> Se for realizada leitura/escrita em um fluxo retornado nos arrays, esteja ciente que
> não necessariamente serão lidos/escritos todos os dados
> solicitados. Esteja preparado para a possibilidade de se ler/escrever apenas
> um único byte.

> **Nota**:
>
> Alguns fluxos (como `zlib`) não podem ser selecionados por esta
> função.

> **Nota**:
> **Compatibilidade com Windows**  
>
> O uso de **stream\_select()** em
> descritores de arquivos retornados por [proc\_open()](function.proc-open.md) irão falhar
> e retornar **`false`** no Windows.
>
> **`STDIN`** de um console muda de estado assim que *qualquer*
> evento de entrada estiver disponível, mas a leitura do fluxo ainda poderá bloquear.

### Veja também

- [stream\_set\_blocking()](function.stream-set-blocking.md) - Definir modo de bloqueio/não-bloqueio em um fluxo

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
