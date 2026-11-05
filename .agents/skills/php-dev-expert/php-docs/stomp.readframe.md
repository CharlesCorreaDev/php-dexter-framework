# Lê o próximo quadro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.readframe.php

---

# Stomp::readFrame

# stomp\_read\_frame

(PECL stomp >= 0.1.0)

Stomp::readFrame -- stomp\_read\_frame — Lê o próximo quadro

### Descrição

Estilo orientado a objetos (method):

public function **Stomp::readFrame**([string](language.types.string.md) `$class_name` = "stompFrame"): [stompframe](class.stompframe.md)

Estilo procedural:

function **stomp\_read\_frame**([resource](language.types.resource.md) `$link`): [array](language.types.array.md)

Lê o próximo quadro. É possível instanciar um objeto de uma classe específica e passar parâmetros para o construtor dessa classe.

### Parâmetros

`link`
:   Somente no estilo procedural: O identificador do link stomp retornado por [stomp\_connect()](stomp.construct.md).

`class_name`
:   O nome da classe a ser instanciada. Se não for especificado, um objeto stompFrame será retornado.

### Valor Retornado

> **Nota**:
>
> Um cabeçalho de transação pode ser especificado, indicando que a confirmação da mensagem deve fazer parte da transação nomeada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL stomp 0.4.0 | O parâmetro `class_name` foi adicionado. |

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php

/* conexão */
try {
    $stomp = new Stomp('tcp://localhost:61613');
} catch(StompException $e) {
    die('Conexão falhou: ' . $e->getMessage());
}

/* inscreve para mensagens da fila 'foo' */
$stomp->subscribe('/queue/foo');

/* lê um quadro */
var_dump($stomp->readFrame());

/* fecha a conexão */
unset($stomp);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(StompFrame)#2 (3) {
  ["command"]=>
  string(7) "MESSAGE"
  ["headers"]=>
  array(5) {
    ["message-id"]=>
    string(41) "ID:php.net-55293-1257226743606-4:2:-1:1:1"
    ["destination"]=>
    string(10) "/queue/foo"
    ["timestamp"]=>
    string(13) "1257226805828"
    ["expires"]=>
    string(1) "0"
    ["priority"]=>
    string(1) "0"
  }
  ["body"]=>
  string(3) "bar"
}
```

**Exemplo #2 Estilo procedural**

```
<?php

/* conexão */
$link = stomp_connect('ssl://localhost:61612');

/* verifica a conexão */
if (!$link) {
    die('Conexão falhou: ' . stomp_connect_error());
}

/* inscreve para mensagens da fila 'foo' */
stomp_subscribe($link, '/queue/foo');

/* lê um quadro */
$frame = stomp_read_frame($link);

/* fecha a conexão */
stomp_close($link);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  ["command"]=>
  string(7) "MESSAGE"
  ["body"]=>
  string(3) "bar"
  ["headers"]=>
  array(6) {
    ["transaction"]=>
    string(2) "t1"
    ["message-id"]=>
    string(41) "ID:php.net-55293-1257226743606-4:3:-1:1:1"
    ["destination"]=>
    string(10) "/queue/foo"
    ["timestamp"]=>
    string(13) "1257227037059"
    ["expires"]=>
    string(1) "0"
    ["priority"]=>
    string(1) "0"
  }
}
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
