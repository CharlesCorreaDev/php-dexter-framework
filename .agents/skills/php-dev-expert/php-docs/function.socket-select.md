# Executa a chamada de sistema select() nos arrays de soquetes fornecidos com um tempo limite especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-select.php

---

# socket\_select

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_select — Executa a chamada de sistema select() nos arrays de soquetes fornecidos com um tempo limite especificado

### Descrição

function **socket\_select**(  
    [?](language.types.null.md)[array](language.types.array.md) `&$read`,  
    [?](language.types.null.md)[array](language.types.array.md) `&$write`,  
    [?](language.types.null.md)[array](language.types.array.md) `&$except`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$seconds`,  
    [int](language.types.integer.md) `$microseconds` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

**socket\_select()** aceita arrays de soquetes e espera que
eles mudem de status. Usuários com experiência em soquetes BSD
reconhecerão que esses arrays de soquete são na verdade os chamados conjuntos
de descritores de arquivos. Três arrays independentes de soquetes são monitoradas.

### Parâmetros

`read`
:   Os soquetes listados no array `read` serão
    observados para ver se os caracteres ficam disponíveis para leitura (mais
    precisamente, para ver se uma leitura não será bloqueada - em particular, um soquete
    também estará pronto no final do arquivo, nesse caso uma chamada a
    [socket\_read()](function.socket-read.md) retornará uma string de comprimento zero).

`write`
:   Os soquetes listados no array `write` serão
    observados para ver se uma escrita não será bloqueada.

`except`
:   Os soquetes listados no array `except` serão
    observados em busca de exceções.

`seconds`
:   Os parâmetros `seconds` e `microseconds`
    juntos formam o parâmetro de tempo limite (`timeout`). O tempo limite
    (`timeout`) é um limite superior no tempo
    decorrido antes que **socket\_select()** retorne.
    `seconds` pode ser zero, o que faz com que
    **socket\_select()** retorne imediatamente. Isto é útil
    para pesquisas. Se `seconds` for **`null`** (sem tempo limite),
    **socket\_select()** pode bloquear indefinidamente.

`microseconds`

**Aviso**

Na saída, os arrays são modificados para indicar qual soquete
realmente mudou de status.

Não é necessário passar todos os arrays para
**socket\_select()**. Em vez disso, pode-se usar um
array vazio ou **`null`**. Também deve-se lembrar que esses arrays são
passados ​​*por referência* e serão modificados após
o retorno de **socket\_select()**.

> **Nota**:
>
> Devido a uma limitação no Motor Zend atual, não é possível passar um
> modificador constante como **`null`** diretamente como parâmetro para uma função
> que espera que esse parâmetro seja passado por referência. Em vez disso,
> use uma variável temporária ou uma expressão com o membro mais à esquerda sendo uma
> variável temporária:
>
> **Exemplo #1 Usando **`null`** com **socket\_select()****
>
> ```
> <?php
> $e = NULL;
> socket_select($r, $w, $e, 0);
> ?>
> ```

### Valor Retornado

Em caso de sucesso, **socket\_select()** retorna o número de
soquetes contidos nos arrays modificados, que pode ser zero se
o tempo limite expirar antes que algo interessante aconteça. Em caso de erro,
retorna **`false`**. O código de erro pode ser recuperado com
[socket\_last\_error()](function.socket-last-error.md).

> **Nota**:
>
> Certifique-se de usar o operador `===` ao verificar se
> há um erro. Como **socket\_select()** pode retornar 0,
> a comparação com `==` seria avaliada como **`true`**:
>
> **Exemplo #2 Entendendo o resultado de **socket\_select()****
>
> ```
> <?php
> $e = NULL;
> if (false === socket_select($r, $w, $e, 0)) {
>     echo "socket_select() falhou, motivo: " .
>         socket_strerror(socket_last_error()) . "\n";
> }
> ?>
> ```

### Examples

**Exemplo #3 Exemplo de **socket\_select()****

```
<?php
/* Prepara o array de leitura */
$read   = array($socket1, $socket2);
$write  = NULL;
$except = NULL;
$num_changed_sockets = socket_select($read, $write, $except, 0);

if ($num_changed_sockets === false) {
    /* Tratamento de erro */
} else if ($num_changed_sockets > 0) {
    /* Pelo menos em um dos soquetes algo interessante ocorreu */
}
?>
```

### Notas

> **Nota**:
>
> Deve-se ter ciência de que algumas implementações de soquete precisam ser tratadas com muito
> cuidado. Algumas regras básicas:
>
> - Deve-se sempre tentar usar **socket\_select()**
>   sem tempo limite. A aplicação não deverá ter nada a fazer se
>   não houver dados disponíveis. Código que depende de limites de tempo geralmente
>   não é portável e é difícil de depurar.
> - Nenhum soquete deve ser adicionado a nenhum conjunto se não houver intenção de
>   verificar seu resultado após a chamada a **socket\_select()**
>   e de responder apropriadamente. Após o retorno de **socket\_select()**,
>   todos os soquetes em todos os arrays devem ser verificados. Qualquer
>   soquete disponível para escrita deve ser escrito e
>   qualquer soquete disponível para leitura deve ser lido.
> - Se um retorno de soquete for lido/escrito nos arrays,
>   eles não necessariamente leem/escrevem a quantidade total de dados
>   solicitada. Deve-se estar preparado para conseguir ler/escrever apenas um único
>   byte.
> - É comum na maioria das implementações de soquete que a única exceção
>   capturada com o array `except` sejam dados fora-de-banda
>   recebidos em um soquete.

### Veja também

- [socket\_read()](function.socket-read.md) - Lê um máximo de bytes de um soquete
- [socket\_write()](function.socket-write.md) - Escreve em um soquete
- [socket\_last\_error()](function.socket-last-error.md) - Retorna o último erro no soquete
- [socket\_strerror()](function.socket-strerror.md) - Retorna uma string descrevendo um erro no soquete

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
