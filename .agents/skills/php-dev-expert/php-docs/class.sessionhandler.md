# A classe SessionHandler

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.sessionhandler.php

---

# A classe SessionHandler

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

## Introdução

**SessionHandler** é uma classe especial que pode ser usada
para expor o manipulador interno atual do PHP de gravação de sessão por herança.
Existem sete métodos que envolvem (wrap) as sete funções internas de callbacks do manipulador de gravação
de sessão (`open`, `close`,
`read`, `write`,
`destroy`, `gc` e
`create_sid`). Por padrão, esta classe vai envolver
qualquer manipulador de gravação interno definido pela diretiva de configuração
[session.save\_handler](session.configuration.md#ini.session.save-handler),
que normalmente é `files` por
padrão. Outros manipuladores internos de gravação de sessão podem ser fornecidos por
extensões do PHP, como por exemplo SQLite (como `sqlite`), Memcache (como
`memcache`), e Memcached (como
`memcached`).

Quando uma instância de **SessionHandler** é definida como manipulador de gravação usando
[session\_set\_save\_handler()](function.session-set-save-handler.md), ela envolverá o manipulador de gravação atual.
Uma classe que estende **SessionHandler** permite sobrescrever
os métodos, interceptá-los ou filtrá-los chamando os métodos da classe pai que envolvem os
manipuladores de sessão internos do PHP.

Isto permite, por exemplo, interceptar os métodos `read` e `write`
para criptografar/descriptografar os dados de sessão e então passar o resultado de e para a classe pai.
Alternativamente, pode-se sobrescrever completamente um método como o callback de limpeza
`gc`.

Como o **SessionHandler** envolve os manipuladores de gravação
atuais, o exemplo acima de criptografia pode ser aplicado em qualquer manipulador de gravação interno sem
precisar saber o funcionamento interno dos manipuladores.

Para usar esta classe, primeiro configure o manipulador de gravação que você quer expor usando
[session.save\_handler](session.configuration.md#ini.session.save-handler) e então passe uma instância de
**SessionHandler** ou uma classe que a estenda para [session\_set\_save\_handler()](function.session-set-save-handler.md).

Note que os métodos de callbacks desta classe são projetados para serem chamados internamente pelo
PHP e não para serem chamados pelo código do usuário. Os valores de retorno são igualmente processados internamente
pelo PHP. Para mais informações do fluxo de trabalho da sessão, consulte [session\_set\_save\_handler()](function.session-set-save-handler.md).

## Resumo da classe

class ****SessionHandler****
implements
[SessionHandlerInterface](class.sessionhandlerinterface.md),
[SessionIdInterface](class.sessionidinterface.md) {

/\* Métodos \*/

public function [close](sessionhandler.close.md)(): [bool](language.types.boolean.md)

public function [create\_sid](sessionhandler.create-sid.md)(): [string](language.types.string.md)

public function [destroy](sessionhandler.destroy.md)([string](language.types.string.md) `$id`): [bool](language.types.boolean.md)

public function [gc](sessionhandler.gc.md)([int](language.types.integer.md) `$max_lifetime`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [open](sessionhandler.open.md)([string](language.types.string.md) `$path`, [string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [read](sessionhandler.read.md)([string](language.types.string.md) `$id`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [write](sessionhandler.write.md)([string](language.types.string.md) `$id`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

}

## Notas

**Aviso**

Esta classe é projetada para expor o manipulador interno do PHP de gravação de sessão; se você quiser
escrever manipuladores de gravação personalizados, implemente a interface [SessionHandlerInterface](class.sessionhandlerinterface.md)
ao invés de estender a classe **SessionHandler**.

## Examples

**Exemplo #1
Usando **SessionHandler** para adicionar criptografia aos manipuladores internos do PHP de gravação.**

```
<?php

 /**
  * decrypt AES 256
  *
  * @param data $edata
  * @param string $password
  * @return decrypted data
  */
function decrypt($edata, $password) {
    $data = base64_decode($edata);
    $salt = substr($data, 0, 16);
    $ct = substr($data, 16);

    $rounds = 3; // depende do comprimento da chave
    $data00 = $password.$salt;
    $hash = array();
    $hash[0] = hash('sha256', $data00, true);
    $result = $hash[0];
    for ($i = 1; $i < $rounds; $i++) {
        $hash[$i] = hash('sha256', $hash[$i - 1].$data00, true);
        $result .= $hash[$i];
    }
    $key = substr($result, 0, 32);
    $iv  = substr($result, 32,16);

    return openssl_decrypt($ct, 'AES-256-CBC', $key, true, $iv);
  }

/**
 * crypt AES 256
 *
 * @param data $data
 * @param string $password
 * @return base64 encrypted data
 */
function encrypt($data, $password) {
    // Gera um salt aleatório criptograficamente seguro usando random_bytes()
    $salt = random_bytes(16);

    $salted = '';
    $dx = '';
    // Salt em key(32) e iv(16) = 48
    while (strlen($salted) < 48) {
        $dx = hash('sha256', $dx.$password.$salt, true);
        $salted .= $dx;
    }

    $key = substr($salted, 0, 32);
    $iv  = substr($salted, 32,16);

    $encrypted_data = openssl_encrypt($data, 'AES-256-CBC', $key, true, $iv);
    return base64_encode($salt . $encrypted_data);
}

class EncryptedSessionHandler extends SessionHandler
{
    private $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function read($id)
    {
        $data = parent::read($id);

        if (!$data) {
            return "";
        } else {
            return decrypt($data, $this->key);
        }
    }

    public function write($id, $data)
    {
        $data = encrypt($data, $this->key);

        return parent::write($id, $data);
    }
}

// iremos interceptar o manipulador nativo de arquivos, mas trabalharemos igualmente
// com outros manipuladores internos como 'sqlite', 'memcache' ou 'memcached'
// que são disponibilizados por extensões do PHP
ini_set('session.save_handler', 'files');

$key = 'secret_string';
$handler = new EncryptedSessionHandler($key);
session_set_save_handler($handler, true);
session_start();

// proceder para definir e recuperar os valores pela chave de $_SESSION
```

> **Nota**:
>
> Como os métodos dessa classe são projetados para serem chamados internamente pelo PHP como parte do fluxo normal da sessão,
> chamadas à esses métodos (ou seja, os manipuladores internos nativos reais) por classes filhas irão retornar **`false`**, a não ser que
> a sessão tenha sido iniciada (independente se foi de forma automática ou pela chamada de [session\_start()](function.session-start.md)).
> É importante levar isto em consideração quando escrever testes unitários onde os métodos da classe podem ser invocados manualmente.

## Índice

- [SessionHandler::close](sessionhandler.close.md) — Fecha a sessão
- [SessionHandler::create\_sid](sessionhandler.create-sid.md) — Retorna um novo ID de sessão
- [SessionHandler::destroy](sessionhandler.destroy.md) — Destrói uma sessão
- [SessionHandler::gc](sessionhandler.gc.md) — Apaga sessões antigas
- [SessionHandler::open](sessionhandler.open.md) — Inicia uma sessão
- [SessionHandler::read](sessionhandler.read.md) — Lê os dados de sessão
- [SessionHandler::write](sessionhandler.write.md) — Escreve os dados de sessão

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
