# Instalando a partir de pacotes no Debian GNU/Linux e distribuições relacionadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.unix.debian.php

---

## Instalando a partir de pacotes no Debian GNU/Linux e distribuições relacionadas

O PHP pode ser instalado a partir do código-fonte, mas também está disponível através de
pacotes do [» Debian GNU/Linux](https://www.debian.org/).
Isto também vale para outras distribuições baseadas em Debian, como
Ubuntu, Kali Linux, e Linux Mint.

**Aviso**

Compilações de terceiros são consideradas não oficiais e não são suportadas diretamente
pelo projeto PHP. Quaisquer problemas encontrados devem ser relatados ao
fornecedor dessas compilações não oficiais, a menos que possam ser reproduzidos usando as
compilações da [» área de download
oficial](https://www.php.net/downloads.php).

Os pacotes podem ser instalados usando os comandos **apt** ou
**aptitude**. Essa página do manual utilizará esses dois
comandos intercambiavelmente.

### Usando APT

Primeiro veja que outros pacotes relacionados podem ser desejados, como
`libapache2-mod-php` para integração com o HTTPD Apache 2 e
`php-pear` para o PEAR.

Segundo, antes de instalar um pacote é melhor garantir que a lista de pacotes
está atualizada. Isso é feito rodando o comando
**apt update**.

**Exemplo #1 Exemplo de instalação no Debian com HTTPD Apache 2**

```
# apt install php-common libapache2-mod-php php-cli
```

APT instalará automaticamente o módulo do PHP para HTTPD Apache 2 e todas as suas
dependências, depois ativando-o. O HTTPD Apache deve ser inicializado para que as
modificações tenham efeito. Por exemplo:

**Exemplo #2 Reiniciando o HTTPDApache depois do PHP instalado**

```
# systemctl restart apache2
```

### Controle melhor as configurações

Até então o PHP foi instalado apenas com os módulos principais. É bem
provável que módulos adicionais sejam desejados, como
[MySQL](book.mysql.md),
[cURL](book.curl.md),
[GD](book.image.md),
etc. Estes também podem ser instalados pelo comando **apt**.

**Exemplo #3 Métodos listar pacotes adicionais do PHP**

```
# apt-cache search php
# apt search php | grep -i mysql
# aptitude search php
```

A lista de pacotes mostrará uma grande quantidade de pacotes incluindo
componentes básicos do PHP, como `php-cgi`,
`php-cli` e `php-dev`, assim como
muitas extensões do PHP. Quando extensões estão instaladas, pacotes adicionais
serão instalados automaticamente conforme necessário para satisfazer as dependências
desses pacotes.

**Exemplo #4 Instalando PHP com MySQL e cURL**

```
# apt install php-mysql php-curl
```

O APT irá automaticamente adicionar as linhas apropriadas a arquivos
php.ini relacionados, como
/etc/php/8.x/apache2/php.ini,
/etc/php/8.x/cli/php.ini,
/etc/php/8.x/mods-available/\*.ini, etc., e dependendo da
da extensão irá ainda acrescentar diretivas similares a `extension=foo.so`.
Entretanto é necessário reiniciar o servidor web para que essas
alterações tenham efeito.

### Problemas comuns

- Se os scripts PHP não estão sendo interpretados pelo servidor web, então é provável que
  o PHP não tenha sido acrescentado aos arquivos de configuração do servidor
  web, que no Debian pode ser /etc/apache2/apache2.conf
  ou algo similar. Veja o manual do Debian para mais detalhes.
- Se uma extensão parece ter sido instalada e ainda assim funções permanecem não definidas,
  verifique que o arquivo .ini apropriado está sendo carregado e/ou se o
  servidor web foi reiniciado após a instalação.

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
