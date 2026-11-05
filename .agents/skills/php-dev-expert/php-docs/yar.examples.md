# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar.examples.php

---

# Examples

**Exemplo #1 Exemplo de servidor Yar**

```
<?php

/* suponha que esta página pode ser acessada por http://example.com/operator.php */

class Operator {

    /**
     * Add two operands
     * @param integer
     * @return integer
     */
    public function add($a, $b) {
        return $this->_add($a, $b);
    }

    /**
     * Sub
     */
    public function sub($a, $b) {
        return $a - $b;
    }

    /**
     * Mul
     */
    public function mul($a, $b) {
        return $a * $b;
    }

    /**
     * Protected methods will not be exposed
     * @param integer
     * @return integer
     */
    protected function _add($a, $b) {
        return $a + $b;
    }
}

$server = new Yar_Server(new Operator());
$server->handle();
?>
```

**Exemplo #2 Acesse o servidor no navegador (solicitação GET)**

O exemplo acima produzirá
algo semelhante a:

![Informações do servidor Yar](images/4fd86c7f1b197d1d954ad0f4b033dc93-yar.png)

**Exemplo #3 Exemplo de cliente Yar**

```
<?php
$client = new yar_client("http://example.com/operator.php");

/* chama diretamente */
var_dump($client->add(1, 2));

/* ou através do método call */
var_dump($client->call("add", array(3, 2)));

/* _add não pode ser chamado */
var_dump($client->_add(1, 2));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(3)
int(5)
PHP Fatal error:  Uncaught exception 'Yar_Server_Exception' with message 'call to api Operator::_add() failed' in *
```

**Exemplo #4 Yar Concurrent Client Example**

```
<?php
function callback($ret, $callinfo) {
    echo $callinfo['method'] , " result: ", $ret , "\n";
}

/* registra chamadas assíncronas para serviços remotos */
Yar_Concurrent_Client::call("http://example.com/operator.php", "add", array(1, 2), "callback");
Yar_Concurrent_Client::call("http://example.com/operator.php", "sub", array(2, 1), "callback");
Yar_Concurrent_Client::call("http://example.com/operator.php", "mul", array(2, 2), "callback");

/* envia todas as solicitações e aguarda resposta */
Yar_Concurrent_Client::loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
mul result: 4
sub result: 1
add result: 3
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
