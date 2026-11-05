# Define contextos de chamada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar-client.setopt.php

---

# Yar\_Client::setOpt

(PECL yar >= 1.0.0)

Yar\_Client::setOpt — Define contextos de chamada

### Descrição

public function **Yar\_Client::setOpt**([int](language.types.integer.md) `$name`, [mixed](language.types.mixed.md) `$value`): [Yar\_Client](class.yar-client.md)|[false](language.types.singleton.md)

### Parâmetros

`name`
:   Pode ser:
    **`YAR_OPT_PACKAGER`**,
    **`YAR_OPT_PERSISTENT`** (necessário suporte no servidor),
    **`YAR_OPT_TIMEOUT`**,
    **`YAR_OPT_CONNECT_TIMEOUT`**,
    **`YAR_OPT_HEADER`** (a partir do 2.0.4),
    **`YAR_OPT_PROXY`** (a partir do 2.2.0)

`value`

### Valor Retornado

Retorna $this em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Yar\_Client::setOpt()****

```
<?php

$cient = new Yar_Client("http://host/api/");

// Define tempo limite de 1s
$client->SetOpt(YAR_OPT_CONNECT_TIMEOUT, 1000);

// Define o empacotador como JSON
$client->SetOpt(YAR_OPT_PACKAGER, "json");

// Define cabeçalhos personalizados
$client->SetOpt(YAR_OPT_HEADER, array("hr1: val1", "hd2: val2"));

// Define Proxy Http
$client->SetOpt(YAR_OPT_PROXY, "127.0.0.1:8888");

/* Chama serviço remoto */
$result = $client->some_method("parameter");
?>
```

O exemplo acima produzirá
algo semelhante a:

### Veja também

- [Yar\_Client::\_\_call()](yar-client.call.md) - Chama o serviço

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
