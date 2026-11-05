# Segurança do Sistema de Arquivos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.filesystem.php

---

# Segurança do Sistema de Arquivos

## Índice

- [Problemas relacionados aos bytes nulos](security.filesystem.nullbytes.md)

O PHP está sujeito à segurança implementada na maioria dos sistemas de servidor
com respeito às permissões de arquivos e diretórios. Isto permite
controlar que arquivos no sistema podem ser lidos. É preciso
ter cuidado com arquivos que são acessíveis globalmente para garantir
que sejam seguros para leitura por todos os usuários que têm acesso ao
sistema de arquivos.

Já que o PHP foi projetado para permitir acesso em nível de usuário ao sistema
de arquivos, é totalmente possível escrever um script PHP que permitirá
ler arquivos de sistema como o /etc/passwd, modificar conexões
de rede, enviar tarefas massivas de impressão, etc. Isto tem
algumas implicações óbvias, já que é necessário garantir que os arquivos
lidos e gravados são os apropriados.

Considere o seguinte script, onde um usuário indica que quer
apagar um arquivo no seu diretório "home". Isso presume uma situação
onde uma interface web PHP é usada regularmente para gerenciamento
de arquivos, de forma que o usuário Apache tem permissão para apagar arquivos
nos diretórios "home" dos usuários.

**Exemplo #1 Verificação fraca de variáveis resulta em....**

```
<?php

// Remove um arquivo do diretório "home" do usuário
$username = $_POST['user_submitted_name'];
$userfile = $_POST['user_submitted_filename'];
$homedir  = "/home/$username";

unlink("$homedir/$userfile");

echo "O arquivo foi removido!";

?>
```

Já que o nome do usuário e do arquivo são enviados pelo formulário,
um usuário pode enviar um nome de usuário e de arquivo que pertença a outra pessoa
e apagá-lo, mesmo que eles não tenham permissão para fazê-lo.
Neste caso, é preciso ter alguma outra forma de autenticação.
Considere o que poderia acontecer se as variáveis enviadas forem
`"../etc/"` e `"passwd"`.
O código então leria efetivamente:

**Exemplo #2 ... um ataque ao sistema de arquivos**

```
<?php

// Remove um arquivo de qualquer lugar no disco rígido que
// o usuário do PHP tenha acesso. Se o PHP tiver acesso de administrador:
$username = $_POST['user_submitted_name']; // "../etc"
$userfile = $_POST['user_submitted_filename']; // "passwd"
$homedir  = "/home/$username"; // "/home/../etc"

unlink("$homedir/$userfile"); // "/home/../etc/passwd"

echo "O arquivo foi removido!";

?>
```

Existem duas medidas importantes que devem ser tomadas para prevenir
esses problemas.

- Dar permissões limitadas ao usuário web binário do PHP.
- Verificar todas as variáveis que são enviadas.

Aqui temos um script melhorado:

**Exemplo #3 Verificação mais segura do nome do arquivo**

```
<?php

// Remove um arquivo do disco rígido que o
// usuário do PHP tenha acesso.
$username = $_SERVER['REMOTE_USER']; // usando um mecanismo de autenticação
$userfile = basename($_POST['user_submitted_filename']);
$homedir  = "/home/$username";

$filepath = "$homedir/$userfile";

if (file_exists($filepath) && unlink($filepath)) {
    $logstring = "Removido $filepath\n";
} else {
    $logstring = "Falha ao remover $filepath\n";
}

$fp = fopen("/home/logging/filedelete.log", "a");
fwrite($fp, $logstring);
fclose($fp);

echo htmlentities($logstring, ENT_QUOTES);

?>
```

No entanto, ele ainda possui falhas. Se o sistema de autenticação
permitir que os usuários criem seus próprios logins e um usuário
escolher o login `"../etc/"`, o sistema está novamente exposto. Por
este motivo, é preferível escrever uma verificação mais personalizada:

**Exemplo #4 Verificação mais segura do nome do arquivo**

```
<?php

$username     = $_SERVER['REMOTE_USER']; // usando um mecanismo de autenticação
$userfile     = $_POST['user_submitted_filename'];
$homedir      = "/home/$username";

$filepath     = "$homedir/$userfile";

if (!ctype_alnum($username) || !preg_match('/^(?:[a-z0-9_-]|\.(?!\.))+$/iD', $userfile)) {
    die("Usuário/arquivo inválido");
}

// etc.

?>
```

Dependendo do sistema operacional, existe uma variedade enorme de arquivos
com os quais devemos nos preocupar, incluindo entradas de dispositivos (/dev/
ou COM1), arquivos de configuração (/etc/
e `.ini`), áreas de armazenamento de arquivo bem conhecidas (/home/,
Meus Documentos), etc. Por este
motivo, normalmente é mais fácil criar uma política onde se proíbe
tudo exceto aquilo que for explicitamente permitido.

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
