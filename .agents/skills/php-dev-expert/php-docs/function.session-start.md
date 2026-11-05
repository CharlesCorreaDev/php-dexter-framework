# Inicia uma nova sessão ou continua uma sessão existente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-start.php

---

# session\_start

(PHP 4, PHP 5, PHP 7, PHP 8)

session\_start — Inicia uma nova sessão ou continua uma sessão existente

### Descrição

function **session\_start**([array](language.types.array.md) `$options` = []): [bool](language.types.boolean.md)

**session\_start()** cria uma sessão ou continua a
sessão atual baseado em um ID de sessão passado via GET ou POST,
ou passado via cookie.

Quando **session\_start()** é chamada ou quando uma sessão inicia automaticamente,
o PHP chamará os manipuladores de gravação de sessão de abertura e de leitura. Eles serão manipuladores de gravação internos
fornecidos por padrão ou por extensões do PHP (como SQLite ou Memcached); ou podem ser
manipuladores personalizados definidos por [session\_set\_save\_handler()](function.session-set-save-handler.md).
A função de leitura recuperará qualquer informação de sessão existente (armazenada em um formato serializado especial)
e será desserializado e usado para preencher automaticamente a variável super global $\_SESSION quando a
função de leitura retornar os dados de sessão gravados para o tratamento de sessão do PHP.

Para utilizar uma sessão com nome,
[session\_name()](function.session-name.md) deve ser chamada antes de
**session\_start()**.

Quando [session.use\_trans\_sid](session.configuration.md#ini.session.use-trans-sid)
está habilitada, a função **session\_start()**
registrará um manipulador de saída interno para a reescrita da URL.

Se um usuário usar `ob_gzhandler` ou similar com
[ob\_start()](function.ob-start.md), a ordem da função é importante para
saída/output adequado. Por exemplo,
`ob_gzhandler` deve ser registrado antes de iniciar a sessão.

### Parâmetros

`options`
:   Se informado, este é um array associativo de opções que irão substituir
    os que estiverem configurados nas
    [diretivas de configuração de sessão](session.configuration.md).
    As chaves não devem incluir o prefixo `session.`.

    Além do conjunto de diretivas de configuração comum, a opção
    `read_and_close` pode ser informada. Se definida como
    **`true`**, fará com que a sessão seja fechada imediatamente depois de
    ser lida, evitando o bloqueio desnecessário caso os dados da sessão
    não sejam alterados.

### Valor Retornado

Esta função retorna **`true`** se uma sessão foi iniciada com sucesso,
caso contrário **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | **session\_start()** agora retorna **`false`** e não mais inicializa [$\_SESSION](reserved.variables.session.md) quando este falha em iniciar a sessão. |

### Examples

#### Um exemplo básico de sessão

**Exemplo #1 page1.php**

```
<?php
// page1.php

session_start();

echo 'Bem vindo à página #1';

$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();

// Funciona se o cookie de sessão foi aceito
echo '<br /><a href="page2.php">page 2</a>';

// Ou talvez passando o ID da sessão se necessário
echo '<br /><a href="page2.php?' . SID . '">page 2</a>';
?>
```

Após acessar page1.php, a segunda página
page2.php magicamente terá os dados da
sessão. Leia [funções para sessão](ref.session.md)
para informações sobre [propagação de
IDs de sessão](session.idpassing.md) já que, por exemplo, explica o que é a constante
**`SID`**.

**Exemplo #2 page2.php**

```
<?php
// page2.php

session_start();

echo 'Bem vindo à página #2<br />';

echo $_SESSION['favcolor']; // green
echo $_SESSION['animal'];   // cat
echo date('Y m d H:i:s', $_SESSION['time']);

// Pode ser desejado usar o SID aqui, como foi feito em page1.php
echo '<br /><a href="page1.php">page 1</a>';
?>
```

#### Fornecendo configurações para **session\_start()**

**Exemplo #3 Sobrepondo o tempo de duração de cookie**

```
<?php
// Isto envia um cookie persistente que dura um dia
session_start([
    'cookie_lifetime' => 86400,
]);
?>
```

**Exemplo #4 Lendo e fechando a sessão**

```
<?php
// Se não houver necessidade de alterar nada na
// sessão, pode-se apenas lê-la e já fechá-la para evitar
// travar o arquivo de sessão e bloquear outras páginas
session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,
]);
```

### Notas

> **Nota**:
>
> Para usar sessões baseadas em cookies, **session\_start()**
> deve ser chamada antes de enviar qualquer saída para o browser.

> **Nota**:
>
> O uso de [zlib.output\_compression](zlib.configuration.md#ini.zlib.output-compression)
> é recomendado ao invés de [ob\_gzhandler()](function.ob-gzhandler.md)

> **Nota**:
>
> Esta função envia vários cabeçalhos HTTP dependendo da
> configuração. Veja [session\_cache\_limiter()](function.session-cache-limiter.md) para
> personalizar estes cabeçalhos.

### Veja também

- [$\_SESSION](reserved.variables.session.md)
- [session.auto\_start](session.configuration.md#ini.session.auto-start)
  (diretiva de configuração)
- [session\_id()](function.session-id.md) - Obtém e/ou define o id de sessão atual

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
