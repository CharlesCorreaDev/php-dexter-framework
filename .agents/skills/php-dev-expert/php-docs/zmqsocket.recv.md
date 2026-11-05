# Recebe uma mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.recv.php

---

# ZMQSocket::recv

(PECL zmq >= 0.5.0)

ZMQSocket::recv — Recebe uma mensagem

### Descrição

public function **ZMQSocket::recv**([int](language.types.integer.md) `$mode` = 0): [string](language.types.string.md)

Recebe uma mensagem a partir de um soquete. Por padrão, a recepção será bloqueada até que uma mensagem esteja disponível, a menos que
a constante **`ZMQ::MODE_DONTWAIT`** seja usada. A constante **`ZMQ::SOCKOPT_RCVMORE`**
pode ser usada para receber mensagens de múltiplas partes. Consulte [ZMQSocket::setSockOpt()](zmqsocket.setsockopt.md)
para mais informações.

### Parâmetros

`mode`
:   Passa opções para a recepção de mensagens de múltiplas partes ou operações não bloqueantes.
    Consulte as constantes **`ZMQ::MODE_*`**.

### Valor Retornado

Retorna a mensagem. Se **`ZMQ::MODE_DONTWAIT`**
for usada e a operação for bloqueante, **`false`** deve ser retornado.

### Erros/Exceções

Lança **ZMQSocketException** em caso de erros.

### Examples

**Exemplo #1 Um exemplo de envio/recepção**

Envio / recepção não bloqueantes

```
<?php

/* Cria um novo objeto de fila, precisa haver um servidor na outra ponta */
$fila = new ZMQSocket(new ZMQContext(), ZMQ::SOCKET_REQ);
$fila->connect("tcp://127.0.0.1:5555");

/* Atribui o soquete 1 à fila, envia e recebe */
$tentativas = 5;
$enviando = true;

/* Inicia um laço */
do {
    try {
        /* Tenta enviar / receber */
        if ($enviando) {
            echo "Enviando mensagem\n";
            $fila->send("Isto é uma mensagem", ZMQ::MODE_DONTWAIT);
            $enviando = false;
        } else {
            echo "Obtive resposta: " . $fila->recv(ZMQ::MODE_DONTWAIT) . "\n";
            break;
        }
    } catch (ZMQSocketException $e) {
        /* EAGAIN significa que a operação foi bloqueada, tentar novamente */
        if ($e->getCode() === ZMQ::ERR_EAGAIN) {
            echo " - Obtive EAGAIN, tentando novamente ($tentativas)\n";
        } else {
            die(" - Erro: " . $e->getMessage());
        }
    }
    /* Dá uma pausa durante as operações */
    usleep(5);
} while (--$tentativas);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Enviando mensagem
 - Obtive EAGAIN, tentando novamente (4)
Obtive resposta: Isto é uma mensagem
```

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
