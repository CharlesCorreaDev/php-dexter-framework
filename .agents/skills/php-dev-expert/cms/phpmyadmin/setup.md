# Instalação — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/setup.html

---

# Instalação[¶](#installation "Link permanente para este título")

O phpMyAdmin não aplica quaisquer métodos de segurança especiais ao servidor de banco de dados MySQL. Ele ainda depende do administrador do sistema para conceder as permissões adequadas nos bancos de dados MySQL. A página Users do phpMyAdmin pode ser utilizada para isso.

## Distribuições do Linux[¶](#linux-distributions "Link permanente para este título")

O phpMyAdmin é incluído na maioria das distribuições Linux. É recomendado usar os pacotes da distribuição quando possível - eles normalmente fornecem integração com a sua distribuição e você irá receber automaticamente atualizações de segurança de sua distribuição.

### Debian e Ubuntu[¶](#debian-and-ubuntu "Link permanente para este título")

Most Debian and Ubuntu versions include a phpMyAdmin package, but be aware that
the configuration file is maintained in `/etc/phpmyadmin` and may differ in
some ways from the official phpMyAdmin documentation. Specifically, it does:

- Configuração de servidor web (funciona com Apache e lighttpd).
- Criação de [Armazenamento de configurações do phpMyAdmin](#linked-tables) usando dbconfig-common.
- Protegendo o script de instalação, veja [Script de instalação no Debian, Ubuntu e derivativos](#debian-setup).

More specific details about installing Debian or Ubuntu packages are available
[in our wiki](https://github.com/phpmyadmin/phpmyadmin/wiki/DebianUbuntu).

Ver também

More information can be found in [README.Debian](https://salsa.debian.org/phpmyadmin-team/phpmyadmin/blob/debian/latest/debian/README.Debian)
(it is installed as `/usr/share/doc/phpmyadmin/README.Debian` with the package).

### OpenSUSE[¶](#opensuse "Link permanente para este título")

O OpenSUSE já vem com um pacote do phpMyAdmin, apenas instale os pacotes do [openSUSE Build Service](https://software.opensuse.org/package/phpMyAdmin).

### Gentoo[¶](#gentoo "Link permanente para este título")

O Gentoo traz o pacote do phpMyAdmin, tanto em uma configuração de fábrica quanto um com configuração `webapp-config`. Use `emerge dev-db/phpmyadmin` para instalar.

### Mandriva[¶](#mandriva "Link permanente para este título")

O Mandriva traz o pacote do phpMyAdmin na sua branch `contrib` e pode ser instalado via o Centro de Controle de sempre.

### Fedora[¶](#fedora "Link permanente para este título")

O Fedora traz o pacote do phpMyAdmin, mas saiba que o arquivo de configuração é guardado em `/etc/phpmyadmin/` e pode ter algumas diferenças da documentação oficial do phpMyAdmin.

### Red Hat Linux Empresarial[¶](#red-hat-enterprise-linux "Link permanente para este título")

Red Hat Enterprise Linux itself and thus derivatives like CentOS don’t
ship phpMyAdmin, but the Fedora-driven repository
[Extra Packages for Enterprise Linux (EPEL)](https://docs.fedoraproject.org/en-US/epel/)
is doing so, if it’s
[enabled](https://fedoraproject.org/wiki/EPEL/FAQ#howtouse).
But be aware that the configuration file is maintained in
`/etc/phpMyAdmin/` and may differ in some ways from the
official phpMyAdmin documentation.

## Instalar no Windows[¶](#installing-on-windows "Link permanente para este título")

O jeito mais fácil de obter o phpMyAdmin no Windows é usar produtos de terceiros que incluem o phpMyAdmin junto com um banco de dados e servidor web como o [XAMPP](https://www.apachefriends.org/index.html).

Você pode ler mais sobre essas opções na [Wikipédia](https://en.wikipedia.org/wiki/List_of_AMP_packages).

## Instalando do Git[¶](#installing-from-git "Link permanente para este título")

Para instalar a partir do Git, você precisará de alguns aplicativos de suporte:

- [Git](https://git-scm.com/downloads) to download the source, or you can download the most recent source directly from [Github](https://codeload.github.com/phpmyadmin/phpmyadmin/zip/QA_5_2)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/en/download/) (version 14 or higher)
- [Yarn](https://classic.yarnpkg.com/pt-BR/docs/install)

Você poderá clonar o código-fonte mais recente do phpMyAdmin de `https://github.com/phpmyadmin/phpmyadmin.git`:

```
git clone https://github.com/phpmyadmin/phpmyadmin.git
```

Adicionalmente, você precisa instalar dependências usando o [Composer](https://getcomposer.org):

```
composer update
```

Se você não pretende desenvolver, você pode ignorar a instalação das ferramentas de desenvolvedor invocando:

```
composer update --no-dev
```

Por fim, você precisará usar o [Yarn](https://classic.yarnpkg.com/pt-BR/docs/install) para instalar algumas dependências de JavaScript:

```
yarn install --production
```

## Instalar usando o Composer[¶](#installing-using-composer "Link permanente para este título")

Você pode instalar o phpMyAdmin usando a [ferramenta Composer](https://getcomposer.org/), desde a 4.7.0 as versões são automaticamente espelhadas para o repositório [Packagist](https://packagist.org/) padrão.

Nota

O conteúdo do repositório Composer é automaticamente gerado separadamente das releases, portanto, o conteúdo não precisa ser 100% o mesmo de quando você baixou o tarball. Não devem haver diferenças funcionais, contudo.

Para instalar o phpMyAdmin execute:

```
composer create-project phpmyadmin/phpmyadmin
```

Alternativamente, você pode usar nosso próprio repositório composer, que contém os tarballs das releases e está disponível em <<https://www.phpmyadmin.net/packages.json>>:

```
composer create-project phpmyadmin/phpmyadmin --repository-url=https://www.phpmyadmin.net/packages.json --no-dev
```

## Instalar usando Docker[¶](#installing-using-docker "Link permanente para este título")

phpMyAdmin comes with a [Docker official image](https://hub.docker.com/_/phpmyadmin), which you can easily deploy. You can
download it using:

```
docker pull phpmyadmin
```

O servidor phpMyAdmin irá ouvir na porta 80. Ele suporta várias formas de configurar o link para o servidor de banco de dados, seja pelo recurso de link do Docker, vinculando seu container do banco de dados ao ``` db``para o phpMyAdmin (especificando ``--link your_db_host:db ```) ou por variáveis de ambiente (neste caso cabe a você configurar a rede no Docker para permitir que o container phpMyAdmin acesse o container do banco de dados através da rede).

### Variáveis de ambiente do Docker[¶](#docker-environment-variables "Link permanente para este título")

Você pode configurar vários recursos do phpMyAdmin usando variáveis de ambiente:

`PMA_ARBITRARY`[¶](#envvar-PMA_ARBITRARY "Link permanente para esta definição")
:   Permite que você informe um nome de host do servidor de banco de dados no formulário de login.

    Ver também

    [`$cfg['AllowArbitraryServer']`](config.md#cfg_AllowArbitraryServer)

`PMA_HOST`[¶](#envvar-PMA_HOST "Link permanente para esta definição")
:   Nome de host ou endereço IP do servidor de banco de dados a ser utilizado.

    Ver também

    [`$cfg['Servers'][$i]['host']`](config.md#cfg_Servers_host)

`PMA_HOSTS`[¶](#envvar-PMA_HOSTS "Link permanente para esta definição")
:   Nomes de host ou endereços IP dos servidores de banco de dados que serão utilizados, separados por vírgulas.

    Nota

    Usado apenas se [`PMA_HOST`](#envvar-PMA_HOST) está vazio.

`PMA_VERBOSE`[¶](#envvar-PMA_VERBOSE "Link permanente para esta definição")
:   Nome extenso do servidor de banco de dados.

    Ver também

    [`$cfg['Servers'][$i]['verbose']`](config.md#cfg_Servers_verbose)

`PMA_VERBOSES`[¶](#envvar-PMA_VERBOSES "Link permanente para esta definição")
:   Nomes extensos dos servidores de banco de dados, separados por vírgula.

    Nota

    Usado somente se [`PMA_VERBOSE`](#envvar-PMA_VERBOSE) está vazio.

`PMA_USER`[¶](#envvar-PMA_USER "Link permanente para esta definição")
:   Nome do usuário a ser utilizado para [Modo de autenticação por configuração](#auth-config).

`PMA_PASSWORD`[¶](#envvar-PMA_PASSWORD "Link permanente para esta definição")
:   Senha a ser utilizada para [Modo de autenticação por configuração](#auth-config).

`PMA_PORT`[¶](#envvar-PMA_PORT "Link permanente para esta definição")
:   Porta do servidor de banco de dados a ser utilizado.

`PMA_PORTS`[¶](#envvar-PMA_PORTS "Link permanente para esta definição")
:   Portas dos servidores de banco de dados a serem utilizados, separadas por vírgula.

    Nota

    Usado apenas se [`PMA_PORT`](#envvar-PMA_PORT) estiver vazio.

`PMA_SOCKET`[¶](#envvar-PMA_SOCKET "Link permanente para esta definição")
:   Socket file for the database connection.

`PMA_SOCKETS`[¶](#envvar-PMA_SOCKETS "Link permanente para esta definição")
:   Comma-separated list of socket files for the database connections.

    Nota

    Used only if [`PMA_SOCKET`](#envvar-PMA_SOCKET) is empty.

`PMA_ABSOLUTE_URI`[¶](#envvar-PMA_ABSOLUTE_URI "Link permanente para esta definição")
:   O endereço qualificado (`https://pma.example.net/`) onde o proxy reverso torna o phpMyAdmin disponível.

    Ver também

    [`$cfg['PmaAbsoluteUri']`](config.md#cfg_PmaAbsoluteUri)

`PMA_QUERYHISTORYDB`[¶](#envvar-PMA_QUERYHISTORYDB "Link permanente para esta definição")
:   When set to true, enables storing SQL history to [`$cfg['Servers'][$i]['pmadb']`](config.md#cfg_Servers_pmadb).
    When false, history is stored in the browser and is cleared when logging out.

    Ver também

    [`$cfg['Servers'][$i]['history']`](config.md#cfg_Servers_history)

    Ver também

    [`$cfg['QueryHistoryDB']`](config.md#cfg_QueryHistoryDB)

`PMA_QUERYHISTORYMAX`[¶](#envvar-PMA_QUERYHISTORYMAX "Link permanente para esta definição")
:   When set to an integer, controls the number of history items.

    Ver também

    [`$cfg['QueryHistoryMax']`](config.md#cfg_QueryHistoryMax)

`PMA_CONTROLHOST`[¶](#envvar-PMA_CONTROLHOST "Link permanente para esta definição")
:   When set, this points to an alternate database host used for storing the “[Armazenamento de configurações do phpMyAdmin](#linked-tables)” database.

    Ver também

    [`$cfg['Servers'][$i]['controlhost']`](config.md#cfg_Servers_controlhost)

`PMA_CONTROLUSER`[¶](#envvar-PMA_CONTROLUSER "Link permanente para esta definição")
:   Defines the username for phpMyAdmin to use for the “[Armazenamento de configurações do phpMyAdmin](#linked-tables)” database.

    Ver também

    [`$cfg['Servers'][$i]['controluser']`](config.md#cfg_Servers_controluser)

`PMA_CONTROLPASS`[¶](#envvar-PMA_CONTROLPASS "Link permanente para esta definição")
:   Defines the password for phpMyAdmin to use for the “[Armazenamento de configurações do phpMyAdmin](#linked-tables)” database.

    Ver também

    [`$cfg['Servers'][$i]['controlpass']`](config.md#cfg_Servers_controlpass)

`PMA_CONTROLPORT`[¶](#envvar-PMA_CONTROLPORT "Link permanente para esta definição")
:   When set, will override the default port (3306) for connecting to the control host.

    Ver também

    [`$cfg['Servers'][$i]['controlport']`](config.md#cfg_Servers_controlport)

`PMA_PMADB`[¶](#envvar-PMA_PMADB "Link permanente para esta definição")
:   When set, define the name of the database to be used for the “[Armazenamento de configurações do phpMyAdmin](#linked-tables)” database.
    When not set, the advanced features are not enabled by default: they can still potentially be enabled by the user when logging in with the [Configuração Zero](#zeroconf) feature.

    Nota

    Suggested values: phpmyadmin or pmadb

    Ver também

    [`$cfg['Servers'][$i]['pmadb']`](config.md#cfg_Servers_pmadb)

`HIDE_PHP_VERSION`[¶](#envvar-HIDE_PHP_VERSION "Link permanente para esta definição")
:   If defined, this option will hide the PHP version (expose\_php = Off).
    Set to any value (such as HIDE\_PHP\_VERSION=true).

`UPLOAD_LIMIT`[¶](#envvar-UPLOAD_LIMIT "Link permanente para esta definição")
:   If set, this option will override the default value for apache and php-fpm (this will change `upload_max_filesize` and `post_max_size` values).

    Nota

    Format as [0-9+](K,M,G) default value is 2048K

`MEMORY_LIMIT`[¶](#envvar-MEMORY_LIMIT "Link permanente para esta definição")
:   If set, this option will override the phpMyAdmin memory limit [`$cfg['MemoryLimit']`](config.md#cfg_MemoryLimit) and PHP’s memory\_limit.

    Nota

    Format as [0-9+](K,M,G) where K is for Kilobytes, M for Megabytes, G for Gigabytes and 1K = 1024 bytes. Default value is 512M.

`MAX_EXECUTION_TIME`[¶](#envvar-MAX_EXECUTION_TIME "Link permanente para esta definição")
:   If set, this option will override the maximum execution time in seconds for phpMyAdmin [`$cfg['ExecTimeLimit']`](config.md#cfg_ExecTimeLimit) and PHP’s max\_execution\_time.

    Nota

    Format as [0-9+]. Default value is 600.

`PMA_CONFIG_BASE64`[¶](#envvar-PMA_CONFIG_BASE64 "Link permanente para esta definição")
:   If set, this option will override the default config.inc.php with the base64 decoded contents of the variable.

`PMA_USER_CONFIG_BASE64`[¶](#envvar-PMA_USER_CONFIG_BASE64 "Link permanente para esta definição")
:   If set, this option will override the default config.user.inc.php with the base64 decoded contents of the variable.

`PMA_UPLOADDIR`[¶](#envvar-PMA_UPLOADDIR "Link permanente para esta definição")
:   If set, this option will set the path where files can be saved to be available to import ([`$cfg['UploadDir']`](config.md#cfg_UploadDir))

`PMA_SAVEDIR`[¶](#envvar-PMA_SAVEDIR "Link permanente para esta definição")
:   If set, this option will set the path where exported files can be saved ([`$cfg['SaveDir']`](config.md#cfg_SaveDir))

`APACHE_PORT`[¶](#envvar-APACHE_PORT "Link permanente para esta definição")
:   If set, this option will change the default Apache port from 80 in case you want it to run on a different port like an unprivileged port. Set to any port value (such as APACHE\_PORT=8090).

Por padrão, [Modo de autenticação por cookies](#cookie) é usado, mas se [`PMA_USER`](#envvar-PMA_USER) e [`PMA_PASSWORD`](#envvar-PMA_PASSWORD) estiverem definidos, ele muda para [Modo de autenticação por configuração](#auth-config).

Nota

The credentials you need to log in are stored in the MySQL server, in case
of Docker image, there are various ways to set it (for example
`MYSQL_ROOT_PASSWORD` when starting the MySQL container). Please check
documentation for [MariaDB container](https://hub.docker.com/_/mariadb)
or [MySQL container](https://hub.docker.com/_/mysql).

### Personalizando a configuração[¶](#customizing-configuration "Link permanente para este título")

Além disso, a configuração pode ser modificada pelo `/etc/phpmyadmin/config.user.inc.php`. Se esse arquivo existir, ele será carregado depois que a configuração for gerada a partir das variáveis de ambiente acima, para que você possa substituir qualquer variável de configuração. Essa configuração pode ser adicionada como um volume ao invocar o Docker usando os parâmetros -v /some/local/directory/config.user.inc.php:/etc/phpmyadmin/config.user.inc.php.

Observe que o arquivo de configuração fornecido é aplicado após [Variáveis de ambiente do Docker](#docker-vars), mas você pode substituir qualquer um dos valores.

For example to change the default behavior of CSV export you can use the following
configuration file:

```
<?php
$cfg['Export']['csv_columns'] = true;
```

Você também pode usá-lo para definir a configuração do servidor em vez de usar as variáveis de ambiente listadas em [Variáveis de ambiente do Docker](#docker-vars):

```
<?php
/* Override Servers array */
$cfg['Servers'] = [
    1 => [
        'auth_type' => 'cookie',
        'host' => 'mydb1',
        'port' => 3306,
        'verbose' => 'Verbose name 1',
    ],
    2 => [
        'auth_type' => 'cookie',
        'host' => 'mydb2',
        'port' => 3306,
        'verbose' => 'Verbose name 2',
    ],
];
```

Ver também

Veja [Configuração](config.md#config) para uma descrição detalhada das opções de configuração.

### Volumes no Docker[¶](#docker-volumes "Link permanente para este título")

You can use the following volumes to customize image behavior:

`/etc/phpmyadmin/config.user.inc.php`

> Can be used for additional settings, see the previous chapter for more details.

`/sessions/`

> Diretório onde as sessões PHP são armazenadas. Você pode querer compartilhar isso, por exemplo, ao usar [Modo de autenticação tradicional](#auth-signon).

`/www/themes/`

> Diretório onde o phpMyAdmin procura pelos temas. Por padrão, apenas os fornecidos com o phpMyAdmin são incluídos, mas você pode incluir temas adicionais do phpMyAdmin (veja [Temas Personalizados](themes.md#themes)) usando volumes do Docker.

### Exemplos do Docker[¶](#docker-examples "Link permanente para este título")

Para conectar o phpMyAdmin a um determinado servidor use:

```
docker run --name phpmyadmin -d -e PMA_HOST=dbhost -p 8080:80 phpmyadmin:latest
```

Para conectar o phpMyAdmin a mais servidores use:

```
docker run --name phpmyadmin -d -e PMA_HOSTS=dbhost1,dbhost2,dbhost3 -p 8080:80 phpmyadmin:latest
```

Para usar opção arbitrária do servidor:

```
docker run --name phpmyadmin -d --link mysql_db_server:db -p 8080:80 -e PMA_ARBITRARY=1 phpmyadmin:latest
```

Você também pode conectar o container do banco de dados usando o Docker:

```
docker run --name phpmyadmin -d --link mysql_db_server:db -p 8080:80 phpmyadmin:latest
```

Rodando com configurações adicionais:

```
docker run --name phpmyadmin -d --link mysql_db_server:db -p 8080:80 -v /some/local/directory/config.user.inc.php:/etc/phpmyadmin/config.user.inc.php phpmyadmin:latest
```

Rodando com temas adicionais:

```
docker run --name phpmyadmin -d --link mysql_db_server:db -p 8080:80 -v /some/local/directory/custom/phpmyadmin/themeName/:/var/www/html/themes/themeName/ phpmyadmin:latest
```

### Usando docker-compose[¶](#using-docker-compose "Link permanente para este título")

Alternatively, you can also use docker-compose with the docker-compose.yml from
<<https://github.com/phpmyadmin/docker>>. This will run phpMyAdmin with an
arbitrary server - allowing you to specify MySQL/MariaDB server on the login page.

```
docker compose up -d
```

### Personalizando o arquivo de configuração usando o docker-compose[¶](#customizing-configuration-file-using-docker-compose "Link permanente para este título")

Você pode usar um arquivo externo para personalizar a configuração do phpMyAdmin e passá-lo usando a diretiva de volumes:

```
phpmyadmin:
    image: phpmyadmin:latest
    container_name: phpmyadmin
    environment:
     - PMA_ARBITRARY=1
    restart: always
    ports:
     - 8080:80
    volumes:
     - /sessions
     - ~/docker/phpmyadmin/config.user.inc.php:/etc/phpmyadmin/config.user.inc.php
     - /custom/phpmyadmin/theme/:/www/themes/theme/
```

Ver também

[Personalizando a configuração](#docker-custom)

### Rodando por trás de um haproxy em um subdiretório[¶](#running-behind-haproxy-in-a-subdirectory "Link permanente para este título")

Quando você quer expor o phpMyAdmin rodando em um container Docker em um subdiretório, você precisa reescrever o caminho da solicitação no servidor que faz o proxy das solicitações.

For example, using haproxy it can be done as:

```
frontend http
    bind *:80
    option forwardfor
    option http-server-close

    ### NETWORK restriction
    acl LOCALNET  src 10.0.0.0/8 192.168.0.0/16 172.16.0.0/12

    # /phpmyadmin
    acl phpmyadmin  path_dir /phpmyadmin
    use_backend phpmyadmin if phpmyadmin LOCALNET

backend phpmyadmin
    mode http

    reqirep  ^(GET|POST|HEAD)\ /phpmyadmin/(.*)     \1\ /\2

    # phpMyAdmin container IP
    server localhost     172.30.21.21:80
```

Ao usar o traefik, algo como o seguinte deve funcionar:

```
defaultEntryPoints = ["http"]
[entryPoints]
  [entryPoints.http]
  address = ":80"
    [entryPoints.http.redirect]
      regex = "(http:\\/\\/[^\\/]+\\/([^\\?\\.]+)[^\\/])$"
      replacement = "$1/"

[backends]
  [backends.myadmin]
    [backends.myadmin.servers.myadmin]
    url="http://internal.address.to.pma"

[frontends]
   [frontends.myadmin]
   backend = "myadmin"
   passHostHeader = true
     [frontends.myadmin.routes.default]
     rule="PathPrefixStrip:/phpmyadmin/;AddPrefix:/"
```

Você deve então especificar [`PMA_ABSOLUTE_URI`](#envvar-PMA_ABSOLUTE_URI) na configuração do docker-compose:

```
version: '2'

services:
  phpmyadmin:
    restart: always
    image: phpmyadmin:latest
    container_name: phpmyadmin
    hostname: phpmyadmin
    domainname: example.com
    ports:
      - 8000:80
    environment:
      - PMA_HOSTS=172.26.36.7,172.26.36.8,172.26.36.9,172.26.36.10
      - PMA_VERBOSES=production-db1,production-db2,dev-db1,dev-db2
      - PMA_USER=root
      - PMA_PASSWORD=
      - PMA_ABSOLUTE_URI=http://example.com/phpmyadmin/
```

## IBM Cloud[¶](#ibm-cloud "Link permanente para este título")

One of our users has created a helpful guide for installing phpMyAdmin on the
[IBM Cloud platform](https://github.com/KissConsult/phpmyadmin_tutorial#readme).

## Instalação Rápida[¶](#quick-install-1 "Link permanente para este título")

1. Choose an appropriate distribution kit from the phpmyadmin.net
   Downloads page. Some kits contain only the English messages, others
   contain all languages. We’ll assume you chose a kit whose name
   looks like `phpMyAdmin-x.x.x-all-languages.tar.gz`.
2. Certifique-se de que você baixou um arquivo autêntico, veja [Verificando releases do phpMyAdmin](#verify).
3. Descompacte a distribuição (não se esqueça de descompactar os subdiretórios): `tar -xzvf phpMyAdmin_x.x.x-all-languages.tar.gz` no documento raiz de seu servidor. Se você não tem acesso direto ao documento raiz, coloque os arquivos em um diretório em sua máquina local e, após a etapa 4, transfira o diretório para seu servidor web utilizando, por exemplo, o protocolo FTP.
4. Certifique-se que todos os scripts possuam o dono apropriado (caso o PHP seja executado em modo de segurança com alguns scripts tendo o proprietário diferente de outros scripts, poderá haver um problema). Veja a [4.2 Qual o meio preferido de tornar o phpMyAdmin seguro contra acessos maliciosos?](faq.md#faq4-2) e a [1.26 Eu acabei de instalar o phpMyADmin no documento raiz do IIS mas eu recebo o erro “Nenhum arquivo de entrada especificado” quando tento rodar o phpMyAdmin.](faq.md#faq1-26) para sugestões.
5. Agora você deve configurar sua instalação. Existem dois métodos que podem ser utilizados. Tradicionalmente, os usuários têm que modificar uma cópia do arquivo `config.inc.php` manualmente, mas agora um script de instalação no estilo assistente é fornecido para aqueles que preferem uma instalação gráfica. Criar um arquivo `config.inc.php` continua sendo a maneira mais rápida para iniciar e é necessária para certas funcionalidades avançadas.

### Criando o arquivo manualmente[¶](#manually-creating-the-file "Link permanente para este título")

To manually create the file, simply use your text editor to create the
file `config.inc.php` (you can copy `config.sample.inc.php` to get
a minimal configuration file) in the main (top-level) phpMyAdmin
directory (the one that contains `index.php`). phpMyAdmin first
loads the default configuration values and then overrides those values
with anything found in `config.inc.php`. If the default value is
okay for a particular setting, there is no need to include it in
`config.inc.php`. You’ll probably need only a few directives to get going; a
simple configuration may look like this:

```
<?php
// The string is a hexadecimal representation of a 32-bytes long string of random bytes.
$cfg['blowfish_secret'] = sodium_hex2bin('f16ce59f45714194371b48fe362072dc3b019da7861558cd4ad29e4d6fb13851');

$i=0;
$i++;
$cfg['Servers'][$i]['auth_type']     = 'cookie';
// if you insist on "root" having no password:
// $cfg['Servers'][$i]['AllowNoPassword'] = true;
```

Ou, se você prefere não receber toda vez uma solicitação de acesso:

```
<?php

$i=0;
$i++;
$cfg['Servers'][$i]['user']          = 'root';
$cfg['Servers'][$i]['password']      = 'changeme'; // use here your password
$cfg['Servers'][$i]['auth_type']     = 'config';
```

Aviso

Armazenar senhas na configuração é inseguro, pois qualquer um pode então manipular o seu banco de dados.

Para uma explicação completa sobre todos os valores de configuração possíveis, consulte a seção [Configuração](config.md#config) neste documento.

### Using the Setup script[¶](#using-the-setup-script "Link permanente para este título")

Em vez de editar manualmente o `config.inc.php`, você pode usar o recurso de configuração do phpMyAdmin. O arquivo pode ser gerado usando a configuração e você pode baixá-lo para subir para o servidor.

Em seguida, abra o seu navegador e visite o local onde você instalou o phpMyAdmin, com o sufixo `/setup`. As mudanças não são salvas no servidor, você precisa usar o botão Download para salvá-las no seu computador e depois carregar no servidor.

Now the file is ready to be used. You can choose to review or edit the
file with your favorite editor, if you prefer to set some advanced
options that the setup script does not provide.

1. Se você estiver usando a “configuração” `auth_type`, recomendamos que você proteja o diretório de instalação do phpMyAdmin, pois esta configuração não exige que o usuário digite uma senha para acessar a instalação do phpMyAdmin. É recomendado utilizar um método de autenticação alternativo, por exemplo com HTTP-AUTH em um arquivo [.htaccess](glossary.md#term-htaccess) ou mudar a `auth_type` para cookie ou http. Veja a [ISPs, instalações multi-usuário](faq.md#faqmultiuser) para informações adicionais, especialmente a [4.4 O phpMyAdmin sempre dá um “Acesso negado” quando uso a autenticação por HTTP.](faq.md#faq4-4).
2. Abra o diretório principal do phpMyAdmin no seu navegador. O phpMyAdmin deve exibir agora uma tela de boas-vindas e seus bancos de dados, ou um diálogo de autenticação, caso esteja usando método de autenticação por [HTTP](glossary.md#term-http) ou por cookie.

#### Script de instalação no Debian, Ubuntu e derivativos[¶](#setup-script-on-debian-ubuntu-and-derivatives "Link permanente para este título")

Debian and Ubuntu have changed the way in which the setup script is enabled and disabled, in a way
that single command has to be executed for either of these.

Para permitir a edição da configuração, invoque:

```
/usr/sbin/pma-configure
```

Para bloquear a edição da configuração, invoque:

```
/usr/sbin/pma-secure
```

#### Script de instalação no openSUSE[¶](#setup-script-on-opensuse "Link permanente para este título")

Algumas versões do openSUSE não incluem o script de instalação no pacote. Caso queira gerar uma configuração nelas, você pode tanto baixar o pacote original de <<https://www.phpmyadmin.net/>> quanto usar o script de configuração em nosso servidor de demonstração: <<https://demo.phpmyadmin.net/master/setup/>>.

## Verificando releases do phpMyAdmin[¶](#verifying-phpmyadmin-releases "Link permanente para este título")

Desde julho de 2015, todos os releases do phpMyAdmin são assinados criptograficamente pelo desenvolvedor, que até janeiro de 2016 foi Marc Delisle. O ID da sua chave é 0xFEFC65D181AF644A, sua impressão digital PGP é:

```
436F F188 4B1A 0C3F DCBF 0D79 FEFC 65D1 81AF 644A
```

e você pode obter mais informações de identificação em <<https://keybase.io/lem9>>.

A partir de janeiro de 2016, o gestor de releases é Isaac Bennetch. O ID da chave é 0xCE752F178259BD92, e sua impressão digital PGP é:

```
3D06 A59E CE73 0EB7 1B51 1C17 CE75 2F17 8259 BD92
```

e você pode obter mais informações de identificação em <<https://keybase.io/ibennetch>>.

Alguns downloads adicionais (por exemplo, temas) podem ser assinados por Michael Čihař. O ID da sua chave é 0x9C27B31342B7511D, e sua impressão digital PGP é:

```
63CB 1DF1 EF12 CF2A C0EE 5A32 9C27 B313 42B7 511D
```

e você pode obter mais informações de identificação em <<https://keybase.io/nijel>>.

Você deve verificar se a assinatura corresponde ao arquivo que baixou. Desta forma, você pode ter certeza de que está usando o mesmo código que foi publicado. Você também deve verificar a data da assinatura para se certificar de que baixou a versão mais recente.

Each archive is accompanied by `.asc` files which contain the PGP signature
for it. Once you have both of them in the same folder, you can verify the signature:

```
$ gpg --verify phpMyAdmin-4.5.4.1-all-languages.zip.asc
gpg: Signature made Fri 29 Jan 2016 08:59:37 AM EST using RSA key ID 8259BD92
gpg: Can't check signature: public key not found
```

As you can see gpg complains that it does not know the public key. At this
point, you should do one of the following steps:

- Baixar o chaveiro do [nosso servidor de download](https://files.phpmyadmin.net/phpmyadmin.keyring) e depois importa-lo:

```
$ gpg --import phpmyadmin.keyring
```

- Baixar e importa a chave de um dos servidores:

```
$ gpg --keyserver hkp://pgp.mit.edu --recv-keys 3D06A59ECE730EB71B511C17CE752F178259BD92
gpg: requesting key 8259BD92 from hkp server pgp.mit.edu
gpg: key 8259BD92: public key "Isaac Bennetch <bennetch@gmail.com>" imported
gpg: no ultimately trusted keys found
gpg: Total number processed: 1
gpg:               imported: 1  (RSA: 1)
```

Isso vai melhorar um pouco a situação - neste ponto, você pode verificar que a assinatura da chave fornecida é válida mas ainda não pode confiar no nome usado na chave:

```
$ gpg --verify phpMyAdmin-4.5.4.1-all-languages.zip.asc
gpg: Signature made Fri 29 Jan 2016 08:59:37 AM EST using RSA key ID 8259BD92
gpg: Good signature from "Isaac Bennetch <bennetch@gmail.com>"
gpg:                 aka "Isaac Bennetch <isaac@bennetch.org>"
gpg: WARNING: This key is not certified with a trusted signature!
gpg:          There is no indication that the signature belongs to the owner.
Primary key fingerprint: 3D06 A59E CE73 0EB7 1B51  1C17 CE75 2F17 8259 BD92
```

The problem here is that anybody could issue the key with this name. You need to
ensure that the key is actually owned by the mentioned person. The GNU Privacy
Handbook covers this topic in the chapter [Validating other keys on your public
keyring](https://www.gnupg.org/gph/en/manual.html#AEN335). The most reliable method is to meet the developer in person and
exchange key fingerprints, however, you can also rely on the web of trust. This way
you can trust the key transitively though signatures of others, who have met
the developer in person.

Uma vez que a chave seja considerada confiável, os avisos não serão mais exibidos:

```
$ gpg --verify phpMyAdmin-4.5.4.1-all-languages.zip.asc
gpg: Signature made Fri 29 Jan 2016 08:59:37 AM EST using RSA key ID 8259BD92
gpg: Good signature from "Isaac Bennetch <bennetch@gmail.com>" [full]
```

Se a assinatura for inválida (o arquivo foi alterado), você receberá um erro claro independente do fato de chave estar marcada como confiável ou não:

```
$ gpg --verify phpMyAdmin-4.5.4.1-all-languages.zip.asc
gpg: Signature made Fri 29 Jan 2016 08:59:37 AM EST using RSA key ID 8259BD92
gpg: BAD signature from "Isaac Bennetch <bennetch@gmail.com>" [unknown]
```

## Armazenamento de configurações do phpMyAdmin[¶](#phpmyadmin-configuration-storage "Link permanente para este título")

Alterado na versão 3.4.0: Prior to phpMyAdmin 3.4.0 this was called Linked Tables Infrastructure, but
the name was changed due to the extended scope of the storage.

Para um conjunto completo de recursos adicionais ([Favoritos](bookmarks.md#bookmarks), comentários, histórico de [SQL](glossary.md#term-sql), mecanismo de monitoramento, geração de [PDF](glossary.md#term-pdf), [Transformações](transformations.md#transformations), [Relações](relations.md#relations) etc.) você precisa criar um conjunto de tabelas especiais. Essas tabelas podem ser localizadas em seu próprio banco de dados, ou em um banco de dados central para uma instalação multiusuário (esse banco de dados seria acessado pelo usuário de controle, portanto nenhum outro usuário deveria ter direitos sobre ele).

### Configuração Zero[¶](#zero-configuration "Link permanente para este título")

In many cases, this database structure can be automatically created and
configured. This is called “Zero Configuration” mode and can be particularly
useful in shared hosting situations. “ZeroConf” mode is on by default, to
disable set [`$cfg['ZeroConf']`](config.md#cfg_ZeroConf) to false.

Os três cenários a seguir estão cobertos pelo modo de Configuração Zero:

- Quando entrar no banco de dados onde as tabelas de armazenamento de configuração não estão presentes, o phpMyAdmin fornece a criação delas pela tab Operações.
- Quando entrar num banco de dados onde as tabelas já existem, o programa automaticamente detecta isso e começa a usá-las. Esta é a situação mais comum: depois que as tabelas são inicialmente criadas automaticamente elas são continuamente usadas sem perturbar o usuário: isso é muito útil também em hospedagem compartilhada onde o usuário não está habilitado para editar `config.inc.php` e usualmente o usuário tem acesso somente para um banco de dados.
- Quando tiver acesso a múltiplos bancos de dados, se o usuário primeiro entra num banco de dados contendo as tabelas de armazenamento de configuração então muda para outro banco de dados, o phpMyAdmin continua a usar as tabelas do primeiro banco de dados; o usuário não é sugerido a criar mais tabelas em um novo banco de dados.

### Manual de configuração[¶](#manual-configuration "Link permanente para este título")

Por favor, olhe em seu diretório `./sql/`, onde você encontraria um arquivo chamado *create\_tables.sql*. (Se você está usando um servidor Windows, preste especial atenção a [1.23 Eu estou rodando o MySQL em uma máquina Win32. Cada vez que eu crio uma nova tabela, a tabela e os nomes das colunas são mudados para letras minúsculas!](faq.md#faq1-23)).

Se você já tinha esta infraestrutura e:

- atualizou para o MySQL 4.1.2 ou mais recente, favor utilize o arquivo `sql/upgrade_tables_mysql_4_1_2+.sql`.
- atualizou para o phpMyAdmin 4.3.0 ou mais recente a partir do 2.5.0 ou mais recente (<= 4.2.x), favor utilize o arquivo `sql/upgrade_column_info_4_3_0+.sql`.
- atualizou para o phpMyAdmin 4.7.0 ou mais recente a partir do 4.3.0 ou mais recente, por favor utilize o arquivo `sql/upgrade_tables_4_7_0+.sql`.

e então crie novas tabelas importando o arquivo `sql/create_tables.sql`.

Você pode usar seu phpMyAdmin para criar as tabelas para você. Lembre-se que você pode precisar de privilégios especiais (administrador) para criar o banco de dados e as tabelas, e que o script pode precisar de alguns ajustes, dependendo do nome do banco de dados.

Depois de importar o arquivo `sql/create_tables.sql`, você deverá especificar os nomes de tabela em seu arquivo `config.inc.php`. As diretivas utilizadas para isso podem ser encontradas na seção [Configuração](config.md#config).

Você deverá também ter um usuário de controle (configurado em [`$cfg['Servers'][$i]['controluser']`](config.md#cfg_Servers_controluser) e/ou [`$cfg['Servers'][$i]['controlpass']`](config.md#cfg_Servers_controlpass)) com os direitos adequados para estas tabelas. Por exemplo, você pode criá-la usando a instrução a seguir:

E para qualquer versão MariaDB:

```
CREATE USER 'pma'@'localhost' IDENTIFIED VIA mysql_native_password USING 'pmapass';
GRANT SELECT, INSERT, UPDATE, DELETE ON `<pma_db>`.* TO 'pma'@'localhost';
```

Para MySQL 8.0 e mais recente:

```
CREATE USER 'pma'@'localhost' IDENTIFIED WITH caching_sha2_password BY 'pmapass';
GRANT SELECT, INSERT, UPDATE, DELETE ON <pma_db>.* TO 'pma'@'localhost';
```

Para MySQL anterior a 8.0:

```
CREATE USER 'pma'@'localhost' IDENTIFIED WITH mysql_native_password AS 'pmapass';
GRANT SELECT, INSERT, UPDATE, DELETE ON <pma_db>.* TO 'pma'@'localhost';
```

Observe que as instalações do MySQL com PHP anterior a 7.4 e MySQL posterior a 8.0 podem exigir o uso da auteticação mysql\_native\_password como uma solução alternativa, veja [1.45 I get an error message about unknown authentication method caching\_sha2\_password when trying to log in](faq.md#faq1-45) para detalhes.

## Atualizando uma versão antiga[¶](#upgrading-from-an-older-version "Link permanente para este título")

Aviso

**Nunca** extraia a nova versão sobre uma instalação existente do phpMyAdmin, sempre remova primeiro os arquivos antigos mantendo apenas a configuração.

This way, you will not leave any old or outdated files in the directory,
which can have severe security implications or can cause various breakages.

Basta copiar o arquivo `config.inc.php` de sua instalação anterior para a instalação recém descompactada. Os arquivos de configuração de versões antigas podem requerer alguns ajustes, já que algumas opções foram alteradas ou removidas. Para a compatibilidade com o PHP 5.3 e anterior, remova a declaração `set_magic_quotes_runtime(0);` que está próxima ao final de seu arquivo de configuração.

The complete upgrade can be performed in a few simple steps:

1. Baixe a versão mais recente do phpMyAdmin de <<https://www.phpmyadmin.net/downloads/>>.
2. Renomeie a pasta existente do phpMyAdmin (por exemplo, para `phpmyadmin-old`).
3. Unpack freshly downloaded phpMyAdmin to the desired location (for example `phpmyadmin`).
4. Copy `` config.inc.php` `` from old location (`phpmyadmin-old`) to the new one (`phpmyadmin`).
5. Teste se tudo funciona corretamente.
6. Remove backup of a previous version (`phpmyadmin-old`).

Se você tiver atualizado o seu servidor MySQL a partir de uma versão anterior a 4.1.2 para a versão 5.x ou mais recente e se você usa a configuração de armazenamento do phpMyAdmin, você deve executar o script [SQL](glossary.md#term-sql) encontrado no arquivo `upgrade_tables_mysql_4_1_2+.sql`.

Se você atualizou o phpMyAdmin para a versão 4.3.0 ou mais recente a partir da 2.5.0 ou mais recente (<= 4.2.x) e usa o armazenamento de configuração do phpMyAdmin, você deve executar o script [SQL](glossary.md#term-sql) encontrado em `sql/upgrade_column_info_4_3_0+.sql`.

Não se esqueça de limpar o cache do navegador e esvaziar a sessão antiga deslogando e logando novamente.

## Usando os modos de autenticação[¶](#using-authentication-modes "Link permanente para este título")

[HTTP](glossary.md#term-http) and cookie authentication modes are recommended in a **multi-user
environment** where you want to give users access to their own database and
don’t want them to play around with others. Nevertheless, be aware that MS
Internet Explorer seems to be really buggy about cookies, at least till version
6. Even in a **single-user environment**, you might prefer to use [HTTP](glossary.md#term-http)
or cookie mode so that your user/password pair are not in clear in the
configuration file.

Os modos de autenticação [HTTP](glossary.md#term-http) e cookie são mais seguros: a informação de login do MySQL não precisa estar definida no arquivo de configuração do phpMyAdmin (exceto, possivelmente, para a [`$cfg['Servers'][$i]['controluser']`](config.md#cfg_Servers_controluser)). Embora, saiba que a senha é transferida em texto explícito a menos que você esteja usando o protocolo HTTPS. Em modo cookie, a senha é armazenada, encriptada com o algoritmo AES blowfish, em um cookie temporário.

Then each of the *true* users should be granted a set of privileges
on a set of particular databases. Normally you shouldn’t give global
privileges to an ordinary user unless you understand the impact of those
privileges (for example, you are creating a superuser).
For example, to grant the user *real\_user* with all privileges on
the database *user\_base*:

```
GRANT ALL PRIVILEGES ON user_base.* TO 'real_user'@localhost IDENTIFIED BY 'real_password';
```

O que o usuário pode fazer agora é completamente controlado pelo sistema de gerenciamento de usuários do MySQL. Com o modo de autenticação por HTTP ou cookies, você não precisa preencher os campos user/password dentro da configuração [`$cfg['Servers']`](config.md#cfg_Servers).

Ver também

[1.32 Eu posso usar autenticação HTTP com o IIS?](faq.md#faq1-32),
[1.35 Eu posso usar autenticação HTTP com o Apache CGI?](faq.md#faq1-35),
[4.1 Eu sou um ISP. Eu posso instalar uma cópia central do phpMyAdmin ou eu preciso instalar ela para cada cliente?](faq.md#faq4-1),
[4.2 Qual o meio preferido de tornar o phpMyAdmin seguro contra acessos maliciosos?](faq.md#faq4-2),
[4.3 Eu recebo erros quanto a não ser capaz de incluir um arquivo em /lang ou /libraries.](faq.md#faq4-3)

### Modo de autenticação HTTP[¶](#http-authentication-mode "Link permanente para este título")

- Utiliza o [HTTP](glossary.md#term-http) como método básico de autenticação e permite você entrar como qualquer usuário válido do MySQL.
- É suportado pela maioria das configurações PHP. Para suporte a [IIS](glossary.md#term-iis) ([ISAPI](glossary.md#term-isapi)) usando [CGI](glossary.md#term-cgi) PHP veja [1.32 Eu posso usar autenticação HTTP com o IIS?](faq.md#faq1-32), para uso com Apache [CGI](glossary.md#term-cgi) veja [1.35 Eu posso usar autenticação HTTP com o Apache CGI?](faq.md#faq1-35).
- Quando o PHP está rodando sob o [mod\_proxy\_fcgi](glossary.md#term-mod-proxy-fcgi) da Apache (por exemplo, com PHP-FPM), os cabeçalhos `Authorization` não são passados para a aplicação FCGI subjacente, de modo que suas credenciais não chegarão na aplicação. Nesse caso, você pode adicionar a seguinte diretiva de configuração:

  ```
  SetEnvIf Authorization "(.*)" HTTP_AUTHORIZATION=$1
  ```
- Veja também a [4.4 O phpMyAdmin sempre dá um “Acesso negado” quando uso a autenticação por HTTP.](faq.md#faq4-4) sobre não usar o mecanismo [.htaccess](glossary.md#term-htaccess) junto com o modo de autenticação ‘[HTTP](glossary.md#term-http)’.

Nota

There is no way to do proper logout in HTTP authentication, most browsers
will remember credentials until there is no different successful
authentication. Because of this, this method has a limitation that you can not
login with the same user after logout.

### Modo de autenticação por cookies[¶](#cookie-authentication-mode "Link permanente para este título")

- Nome de usuário e senha são armazenados em cookies durante a sessão e senha é eliminada quando termina.
- Com este modo, o usuário pode realmente deslogar-se do phpMyAdmin e logar novamente com o mesmo nome de usuário (isso não é possível com o [Modo de autenticação HTTP](#auth-http)).
- Caso queira permitir aos uuários usar qualquer hostname para conectar (em vez de somente o que está no configurado no `config.inc.php`), veja [`$cfg['AllowArbitraryServer']`](config.md#cfg_AllowArbitraryServer).
- Conforme mencionado na seção [Requisitos](require.md#require), habilitar a extensão `openssl` irá acelerar o acesso consideravelmente, mas isto não é necessário.

### Modo de autenticação tradicional[¶](#signon-authentication-mode "Link permanente para este título")

- This mode is a convenient way of using credentials from another
  application to authenticate to phpMyAdmin to implement a single signon
  solution.
- A outra aplicação tem que armazenar informações do login nos dados da sessão (veja [`$cfg['Servers'][$i]['SignonSession']`](config.md#cfg_Servers_SignonSession) e [`$cfg['Servers'][$i]['SignonCookieParams']`](config.md#cfg_Servers_SignonCookieParams)), ou você precisará implementar um script para retornar as credenciais (veja [`$cfg['Servers'][$i]['SignonScript']`](config.md#cfg_Servers_SignonScript)).
- Quando as credenciais não estiverem disponíveis, o usuário SERÁ redirecionado para [`$cfg['Servers'][$i]['SignonURL']`](config.md#cfg_Servers_SignonURL), onde você lidará com o processo de login.

O exemplo básico de como salvar credenciais em uma sessão está disponível como: [file:’examples/signon.php](file:'examples/signon.php)’:

```
<?php
/**
 * Single signon for phpMyAdmin
 *
 * This is just example how to use session based single signon with
 * phpMyAdmin, it is not intended to be perfect code and look, only
 * shows how you can integrate this functionality in your application.
 */

declare(strict_types=1);

/* Use cookies for session */
ini_set('session.use_cookies', 'true');
/* Change this to true if using phpMyAdmin over https */
$secureCookie = false;
/* Need to have cookie visible from parent directory */
session_set_cookie_params(0, '/', '', $secureCookie, true);
/* Create signon session */
$sessionName = 'SignonSession';
session_name($sessionName);
// Uncomment and change the following line to match your $cfg['SessionSavePath']
//session_save_path('/foobar');
@session_start();

/* Was data posted? */
if (isset($_POST['user'])) {
    /* Store there credentials */
    $_SESSION['PMA_single_signon_user'] = $_POST['user'];
    $_SESSION['PMA_single_signon_password'] = $_POST['password'];
    $_SESSION['PMA_single_signon_host'] = $_POST['host'];
    $_SESSION['PMA_single_signon_port'] = $_POST['port'];
    /* Update another field of server configuration */
    $_SESSION['PMA_single_signon_cfgupdate'] = ['verbose' => 'Signon test'];
    $_SESSION['PMA_single_signon_HMAC_secret'] = hash('sha1', uniqid(strval(random_int(0, mt_getrandmax())), true));
    $id = session_id();
    /* Close that session */
    @session_write_close();
    /* Redirect to phpMyAdmin (should use absolute URL here!) */
    header('Location: ../index.php');
} else {
    /* Show simple form */
    header('Content-Type: text/html; charset=utf-8');

    echo '<?xml version="1.0" encoding="utf-8"?>' . "\n";
    echo '<!DOCTYPE HTML>
<html lang="en" dir="ltr">
<head>
<link rel="icon" href="../favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<meta charset="utf-8">
<title>phpMyAdmin single signon example</title>
</head>
<body>';

    if (isset($_SESSION['PMA_single_signon_error_message'])) {
        echo '<p class="error">';
        echo $_SESSION['PMA_single_signon_error_message'];
        echo '</p>';
    }

    echo '<form action="signon.php" method="post">
Username: <input type="text" name="user" autocomplete="username" spellcheck="false"><br>
Password: <input type="password" name="password" autocomplete="current-password" spellcheck="false"><br>
Host: (will use the one from config.inc.php by default)
<input type="text" name="host"><br>
Port: (will use the one from config.inc.php by default)
<input type="text" name="port"><br>
<input type="submit">
</form>
</body>
</html>';
}
```

Alternatively, you can also use this way to integrate with OpenID as shown
in `examples/openid.php`:

```
<?php
/**
 * Single signon for phpMyAdmin using OpenID
 *
 * This is just example how to use single signon with phpMyAdmin, it is
 * not intended to be perfect code and look, only shows how you can
 * integrate this functionality in your application.
 *
 * It uses OpenID pear package, see https://pear.php.net/package/OpenID
 *
 * User first authenticates using OpenID and based on content of $AUTH_MAP
 * the login information is passed to phpMyAdmin in session data.
 */

declare(strict_types=1);

if (false === @include_once 'OpenID/RelyingParty.php') {
    exit;
}

/* Change this to true if using phpMyAdmin over https */
$secureCookie = false;

/**
 * Map of authenticated users to MySQL user/password pairs.
 */
$authMap = ['https://launchpad.net/~username' => ['user' => 'root', 'password' => '']];

// phpcs:disable PSR1.Files.SideEffects,Squiz.Functions.GlobalFunction

/**
 * Simple function to show HTML page with given content.
 *
 * @param string $contents Content to include in page
 */
function Show_page(string $contents): void
{
    header('Content-Type: text/html; charset=utf-8');

    echo '<?xml version="1.0" encoding="utf-8"?>' . "\n";
    echo '<!DOCTYPE HTML>
<html lang="en" dir="ltr">
<head>
<link rel="icon" href="../favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<meta charset="utf-8">
<title>phpMyAdmin OpenID signon example</title>
</head>
<body>';

    if (isset($_SESSION['PMA_single_signon_error_message'])) {
        echo '<p class="error">' . $_SESSION['PMA_single_signon_message'] . '</p>';
        unset($_SESSION['PMA_single_signon_message']);
    }

    echo $contents;
    echo '</body></html>';
}

/**
 * Display error and exit
 *
 * @param Exception $e Exception object
 */
function Die_error(Throwable $e): void
{
    $contents = "<div class='relyingparty_results'>\n";
    $contents .= '<pre>' . htmlspecialchars($e->getMessage()) . "</pre>\n";
    $contents .= "</div class='relyingparty_results'>";
    Show_page($contents);
    exit;
}

// phpcs:enable

/* Need to have cookie visible from parent directory */
session_set_cookie_params(0, '/', '', $secureCookie, true);
/* Create signon session */
$sessionName = 'SignonSession';
session_name($sessionName);
@session_start();

// Determine realm and return_to
$base = 'http';
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $base .= 's';
}

$base .= '://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'];

$realm = $base . '/';
$returnTo = $base . dirname($_SERVER['PHP_SELF']);
if ($returnTo[strlen($returnTo) - 1] !== '/') {
    $returnTo .= '/';
}

$returnTo .= 'openid.php';

/* Display form */
if ((! count($_GET) && ! count($_POST)) || isset($_GET['phpMyAdmin'])) {
    /* Show simple form */
    $content = '<form action="openid.php" method="post">
OpenID: <input type="text" name="identifier"><br>
<input type="submit" name="start">
</form>';
    Show_page($content);
    exit;
}

/* Grab identifier */
$identifier = null;
if (isset($_POST['identifier']) && is_string($_POST['identifier'])) {
    $identifier = $_POST['identifier'];
} elseif (isset($_SESSION['identifier']) && is_string($_SESSION['identifier'])) {
    $identifier = $_SESSION['identifier'];
}

/* Create OpenID object */
try {
    $o = new OpenID_RelyingParty($returnTo, $realm, $identifier);
} catch (Throwable $e) {
    Die_error($e);
}

/* Redirect to OpenID provider */
if (isset($_POST['start'])) {
    try {
        $authRequest = $o->prepare();
    } catch (Throwable $e) {
        Die_error($e);
    }

    $url = $authRequest->getAuthorizeURL();

    header('Location: ' . $url);
    exit;
}

/* Grab query string */
if (! count($_POST)) {
    [, $queryString] = explode('?', $_SERVER['REQUEST_URI']);
} else {
    // Fetch the raw query body
    $queryString = file_get_contents('php://input');
}

/* Check reply */
try {
    $message = new OpenID_Message($queryString, OpenID_Message::FORMAT_HTTP);
} catch (Throwable $e) {
    Die_error($e);
}

$id = $message->get('openid.claimed_id');

if (empty($id) || ! isset($authMap[$id])) {
    Show_page('<p>User not allowed!</p>');
    exit;
}

$_SESSION['PMA_single_signon_user'] = $authMap[$id]['user'];
$_SESSION['PMA_single_signon_password'] = $authMap[$id]['password'];
$_SESSION['PMA_single_signon_HMAC_secret'] = hash('sha1', uniqid(strval(random_int(0, mt_getrandmax())), true));
session_write_close();
/* Redirect to phpMyAdmin (should use absolute URL here!) */
header('Location: ../index.php');
```

If you intend to pass the credentials using some other means than, you have to
implement wrapper in PHP to get that data and set it to
[`$cfg['Servers'][$i]['SignonScript']`](config.md#cfg_Servers_SignonScript). There is a very minimal example
in `examples/signon-script.php`:

```
<?php
/**
 * Single signon for phpMyAdmin
 *
 * This is just example how to use script based single signon with
 * phpMyAdmin, it is not intended to be perfect code and look, only
 * shows how you can integrate this functionality in your application.
 */

declare(strict_types=1);

// phpcs:disable Squiz.Functions.GlobalFunction

/**
 * This function returns username and password.
 *
 * It can optionally use configured username as parameter.
 *
 * @param string $user User name
 *
 * @return array<int,string>
 */
function get_login_credentials(string $user): array
{
    /* Optionally we can use passed username */
    if (! empty($user)) {
        return [$user, 'password'];
    }

    /* Here we would retrieve the credentials */
    return ['root', ''];
}
```

Ver também

[`$cfg['Servers'][$i]['auth_type']`](config.md#cfg_Servers_auth_type),
[`$cfg['Servers'][$i]['SignonSession']`](config.md#cfg_Servers_SignonSession),
[`$cfg['Servers'][$i]['SignonCookieParams']`](config.md#cfg_Servers_SignonCookieParams),
[`$cfg['Servers'][$i]['SignonScript']`](config.md#cfg_Servers_SignonScript),
[`$cfg['Servers'][$i]['SignonURL']`](config.md#cfg_Servers_SignonURL),
[Exemplo de autenticação de login](config.md#example-signon)

### Modo de autenticação por configuração[¶](#config-authentication-mode "Link permanente para este título")

- Este modo é às vezes o menos seguro porque obriga você a preencher os campos [`$cfg['Servers'][$i]['user']`](config.md#cfg_Servers_user) e [`$cfg['Servers'][$i]['password']`](config.md#cfg_Servers_password) (e como resultado, qualquer um pode ler o seu arquivo `config.inc.php` e pode descobrir seu nome de usuário e senha).
- Na seção [ISPs, instalações multi-usuário](faq.md#faqmultiuser), existe um trecho explicando como proteger o seu arquivo de configuração.
- Para segurança adicional neste modo, você poderia considerar a autenticação pelas diretivas de configuração via Host [`$cfg['Servers'][$i]['AllowDeny']['order']`](config.md#cfg_Servers_AllowDeny_order) e [`$cfg['Servers'][$i]['AllowDeny']['rules']`](config.md#cfg_Servers_AllowDeny_rules).
- Diferentemente de cookies e HTTP, esta opção não requer um usuário autenticado quando estiver carregando o site phpMyAdmin pela primeira vez. Isto é proposital mas pode permitir qualquer usuário ter acesso a sua instalação. O uso de algum método restritivo é recomendado, talvez um arquivo [.htaccess](glossary.md#term-htaccess) com uma diretiva HTTP-AUTH ou então bloquear as requisições HTTP de entrada no mínimo em um dos seus roteadores ou firewall seria suficiente (qualquer um dos dois métodos está além do escopo deste manual mas são facilmente encontrados no Google).

## Protegendo sua instalação do phpMyAdmin[¶](#securing-your-phpmyadmin-installation "Link permanente para este título")

O time phpMyAdmin trabalha bastante para tornar essa aplicação segura, embora sempre exista meios de tornar sua instalação mais segura:

- Siga os nossos [Anúncios de segurança](https://www.phpmyadmin.net/security/) e atualize o phpMyAdmin sempre que uma nova vulnerabilidade for publicada.
- Sirva o phpMyAdmin apenas com HTTPS. De preferência, você também deve usar HSTS, para que esteja protegido contra ataques de downgrade de protocolo.
- Ensure your PHP setup follows recommendations for production sites, for example
  [display\_errors](https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors)
  should be disabled.
- Remove the `test` directory from phpMyAdmin, unless you are developing and need a test suite.
- Remova o diretório “setup” do phpMyAdmin, você provavelmente não irá usá-lo após a instalação inicial.
- Escolher corretamento um método de autenticação - [Modo de autenticação por cookies](#cookie) provavelmente é a melhor escolha para hospedagem compartilhada.
- Negue o acesso a arquivos auxiliares nas subpastas `./libraries/` e `./templates/` na configuração do seu servidor web. Tal configuração evita potenciais exposições de caminho e vulnerabilidades com cross side scripting que possam ser encontradas nesse código. Para o servidor web Apache, isso geralmente é realizado com um arquivo [.htaccess](glossary.md#term-htaccess) nesses diretórios.
- Negue o acesso a arquivos temporários, veja [`$cfg['TempDir']`](config.md#cfg_TempDir) (se ele estiver dentro da sua raiz web, veja também [Diretórios de importar/salvar/subir do servidor web](config.md#web-dirs)).
- It is generally a good idea to protect a public phpMyAdmin installation
  against access by robots as they usually can not do anything good there. You
  can do this using `robots.txt` file in the root of your webserver or limit
  access by web server configuration, see [1.42 Como eu posso evitar que robôs acessem o phpMyAdmin?](faq.md#faq1-42).
- Em caso de você não querer que todos os seus usuários MySQL tenham acesso ao phpMyAdmin, você pode usar [`$cfg['Servers'][$i]['AllowDeny']['rules']`](config.md#cfg_Servers_AllowDeny_rules) para limitá-los ou [`$cfg['Servers'][$i]['AllowRoot']`](config.md#cfg_Servers_AllowRoot) para negar o acesso ao usuário root.
- Ative o [Autenticação de dois fatores](two_factor.md#fa) para sua conta.
- Considere ocultar o phpMyAdmin por trás de um proxy de autenticação, para que os usuários precisem se autenticar antes de fornecerem credenciais do MySQL para o phpMyAdmin. Você pode fazer isso configurando o seu servidor web para solicitar autenticação HTTP. Por exemplo, no Apache isso pode ser feito com:

  ```
  AuthType Basic
  AuthName "Restricted Access"
  AuthUserFile /usr/share/phpmyadmin/passwd
  Require valid-user
  ```

  Depois de ter alterado a configuração, você precisará criar uma lista de usuários que podem se autenticar. Isso pode ser feito usando o utilitário **htpasswd**:

  ```
  htpasswd -c /usr/share/phpmyadmin/passwd username
  ```
- Se você tem medo de ataques automatizados, ativar o Captcha através das opções [`$cfg['CaptchaLoginPublicKey']`](config.md#cfg_CaptchaLoginPublicKey) e [`$cfg['CaptchaLoginPrivateKey']`](config.md#cfg_CaptchaLoginPrivateKey) podem ser uma opção.
- Tentativas falhas de login são registradas no syslog (se disponível, veja [`$cfg['AuthLog']`](config.md#cfg_AuthLog)). Isso pode permitir o uso de uma ferramenta como o fail2ban para bloquear tentativas de força bruta. Observe que o arquivo de log usado pelo syslog não é o mesmo que os arquivos de erro ou de log de acesso do Apache.
- In case you’re running phpMyAdmin together with other PHP applications, it is
  generally advised to use separate session storage for phpMyAdmin to avoid
  possible session-based attacks against it. You can use
  [`$cfg['SessionSavePath']`](config.md#cfg_SessionSavePath) to achieve this.

## Usando SSL para conexão ao servidor de banco de dados[¶](#using-ssl-for-connection-to-database-server "Link permanente para este título")

Recomenda-se usar o SSL ao se conectar a um servidor de banco de dados remoto. Existem várias opções de configuração envolvidas na configuração do SSL:

[`$cfg['Servers'][$i]['ssl']`](config.md#cfg_Servers_ssl)
:   Define se o SSL deve ser usado. Se você habilitar apenas isso, a conexão será criptografada, mas não há autenticação da conexão - você não pode verificar se está falando com o servidor correto.

[`$cfg['Servers'][$i]['ssl_key']`](config.md#cfg_Servers_ssl_key) e [`$cfg['Servers'][$i]['ssl_cert']`](config.md#cfg_Servers_ssl_cert)
:   Isso é usado para autenticação do cliente com o servidor.

[`$cfg['Servers'][$i]['ssl_ca']`](config.md#cfg_Servers_ssl_ca) e [`$cfg['Servers'][$i]['ssl_ca_path']`](config.md#cfg_Servers_ssl_ca_path)
:   As autoridades de certificação em que você confia para certificados de servidor. Isso é usado para garantir que você está conversando com um servidor confiável.

[`$cfg['Servers'][$i]['ssl_verify']`](config.md#cfg_Servers_ssl_verify)
:   Esta configuração desabilita a verificação do certificado do servidor. Use com cuidado.

When the database server is using a local connection or private network and SSL can not be configured
you can use [`$cfg['MysqlSslWarningSafeHosts']`](config.md#cfg_MysqlSslWarningSafeHosts) to explicitly list the hostnames that are considered secure.

Ver também

[Google Cloud SQL com SSL](config.md#example-google-ssl),
[Amazon RDS Aurora with SSL](config.md#example-aws-ssl),
[`$cfg['Servers'][$i]['ssl']`](config.md#cfg_Servers_ssl),
[`$cfg['Servers'][$i]['ssl_key']`](config.md#cfg_Servers_ssl_key),
[`$cfg['Servers'][$i]['ssl_cert']`](config.md#cfg_Servers_ssl_cert),
[`$cfg['Servers'][$i]['ssl_ca']`](config.md#cfg_Servers_ssl_ca),
[`$cfg['Servers'][$i]['ssl_ca_path']`](config.md#cfg_Servers_ssl_ca_path),
[`$cfg['Servers'][$i]['ssl_ciphers']`](config.md#cfg_Servers_ssl_ciphers),
[`$cfg['Servers'][$i]['ssl_verify']`](config.md#cfg_Servers_ssl_verify)

## Problemas conhecidos[¶](#known-issues "Link permanente para este título")

### Os usuários com privilégios específicos de colunas não conseguem “Navegar”[¶](#users-with-column-specific-privileges-are-unable-to-browse "Link permanente para este título")

Se um usuário tiver apenas privilégios específicos de coluna em algumas colunas (mas não em todas) de uma tabela, “Navegar” falhará com uma mensagem de erro.

Como uma solução alternativa, uma consulta favorita com o mesmo nome da tabela pode ser criada, ela será executada ao usar o link “Navegar” em vez do padrão. [Issue 11922](https://github.com/phpmyadmin/phpmyadmin/issues/11922).

### Problemas ao fazer o login novamente depois de fazer o logout usando a autenticação ‘http’[¶](#trouble-logging-back-in-after-logging-out-using-http-authentication "Link permanente para este título")

Ao usar o `auth_type` ‘http’, pode ser impossível logar de volta (quando o logout ocorre manualmente ou após um período de inatividade). [Issue 11898](https://github.com/phpmyadmin/phpmyadmin/issues/11898).
