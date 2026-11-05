# Shell Seguro 2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.ssh2.php

---

# ssh2://

ssh2:// — Shell Seguro 2

### Descrição

ssh2.shell://
ssh2.exec://
ssh2.tunnel://
ssh2.sftp://
ssh2.scp://
(PECL)

> **Nota**:
> **Este empacotador não é habilitado por padrão.**  
>
> Para utilizar os empacotadores ssh2.\*://,
> a extensão
> [» SSH2](https://pecl.php.net/package/ssh2)
> disponível em [» PECL](https://pecl.php.net/) deve estar instalada.

Além de aceitar detalhes de login URI tradicionais, os empacotadores ssh2
também farão reúso de conexões abertas através da passagem do recurso da conexão na
parte do host da URL.

### Uso

- ssh2.shell://usuario:senha@example.com:22/xterm
- ssh2.exec://usuario:senha@example.com:22/usr/local/bin/algumcomando
- ssh2.tunnel://usuario:senha@example.com:22/192.168.0.1:14
- ssh2.sftp://usuario:senha@example.com:22/caminho/para/arquivo

### Opções

**Sumário do Empacotador**

| Atributo | ssh2.shell | ssh2.exec | ssh2.tunnel | ssh2.sftp | ssh2.scp |
| --- | --- | --- | --- | --- | --- |
| Restrito por [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | Sim | Sim | Sim | Sim | Sim |
| Permite Leitura | Sim | Sim | Sim | Sim | Sim |
| Permite Escrita | Sim | Sim | Sim | Sim | Não |
| Permite Adição | Não | Não | Não | Sim (quando suportado pelo servidor) | Não |
| Permite Leitura e Escrita Simultâneas | Sim | Sim | Sim | Sim | Não |
| Suporta [stat()](function.stat.md) | Não | Não | Não | Sim | Não |
| Suporta [unlink()](function.unlink.md) | Não | Não | Não | Sim | Não |
| Suporta [rename()](function.rename.md) | Não | Não | Não | Sim | Não |
| Suporta [mkdir()](function.mkdir.md) | Não | Não | Não | Sim | Não |
| Suporta [rmdir()](function.rmdir.md) | Não | Não | Não | Sim | Não |

**Opções de contexto**

| Nome | Uso | Padrão |
| --- | --- | --- |
| `session` | Recurso ssh2 pré-conectado a ser reutilizado |  |
| `sftp` | Recurso sftp pré-alocado a ser reutilizado |  |
| `methods` | Métodos de troca de chaves, de chave de host, de cifras, de compressão e de MAC a serem usados |  |
| `callbacks` |  |  |
| `username` | Nome de usuário a ser conectado |  |
| `password` | Senha a ser usada com a autenticação |  |
| `pubkey_file` | Nome do arquivo de chave pública a ser usado com a autenticação |  |
| `privkey_file` | Nome do arquivo de chave privada a ser usado com a autenticação |  |
| `env` | Array associativo de variáveis de ambiente a ser configurado |  |
| `term` | Tipo de emulação de terminal a ser requisitado quando da alocação de um pty |  |
| `term_width` | Largura do terminal requisitado quando da alocação de um pty |  |
| `term_height` | Altura do terminal requisitado quando da alocação de um pty |  |
| `term_units` | Unidadem usadas em term\_width e term\_height | **`SSH2_TERM_UNIT_CHARS`** |

### Examples

**Exemplo #1 Abrindo um fluxo para conexão ativa**

```
<?php
$session = ssh2_connect('example.com', 22);
ssh2_auth_pubkey_file($session, 'username', '/home/username/.ssh/id_rsa.pub',
                                            '/home/username/.ssh/id_rsa', 'secret');
$stream = fopen("ssh2.tunnel://$session/remote.example.com:1234", 'r');
?>
```

**Exemplo #2 Esta variável $session deve ser mantida disponível!**

Para usar os empacotadores ssh2.\*://$session,
a variável de recurso $session deve ser mantida.
O código abaixo não terá o efeito desejado:

```
<?php
$session = ssh2_connect('example.com', 22);
ssh2_auth_pubkey_file($session, 'username', '/home/username/.ssh/id_rsa.pub',
                                            '/home/username/.ssh/id_rsa', 'secret');
$connection_string = "ssh2.sftp://$session/";
unset($session);
$stream = fopen($connection_string . "path/to/file", 'r');
?>
```

unset() fecha a sessão, porque $connection\_string não
contém uma referência à variável $session, somente uma string convertida
derivada dela. Isto também acontece quando a função [unset()](function.unset.md) está implícita
devido a uma saída de escopo (como em uma função).

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
