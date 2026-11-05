# Ativa/desativa o lançamento de exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.throwexception.php

---

# Yaf\_Dispatcher::throwException

(Yaf >=1.0.0)

Yaf\_Dispatcher::throwException — Ativa/desativa o lançamento de exceção

### Descrição

public function **Yaf\_Dispatcher::throwException**([bool](language.types.boolean.md) `$flag` = ?): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

Ativa/desativa o lançamento de exceção quando erros inesperados acontecem.
Quando ativada, o Yaf lançará exceções ao invés de emitir
erros capturáveis.

Pode-se também usar [application.dispatcher.throwException](yaf.appconfig.md#configuration.yaf.dispatcher.throwexception) para atingir o
mesmo propósito.

### Parâmetros

`flag`
:   Um booleano.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Dispatcher::throwexception()****

```
<?php

$config = array(
    'application' => array(
        'directory' => dirname(__FILE__),
    ),
);
$app = new Yaf_Application($config);

$app->getDispatcher()->throwException(true);

try {
    $app->run();
} catch (Yaf_Exception $e) {
    var_dump($e->getMessage());
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(59) "Could not find controller script /tmp/controllers/Index.php"
```

**Exemplo #2 Exemplo de **Yaf\_Dispatcher::throwexception()****

```
<?php

$config = array(
    'application' => array(
        'directory' => dirname(__FILE__),
    ),
);
$app = new Yaf_Application($config);

$app->getDispatcher()->throwException(false);

$app->run();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
PHP Catchable fatal error:  Yaf_Application::run(): Could not find controller script /tmp/controllers/Index.php in /tmp/1.php on line 12
```

### Veja também

- [Yaf\_Dispatcher::catchException()](yaf-dispatcher.catchexception.md) - Ativa/desativa a captura de exceções
- [Yaf\_Exception](class.yaf-exception.md)

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
