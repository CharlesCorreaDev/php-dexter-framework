# Servidores Web LiteSpeed/OpenLiteSpeed em sistemas Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.unix.litespeed.php

---

## Servidores Web LiteSpeed/OpenLiteSpeed em sistemas Unix

LiteSpeed PHP é uma compilação otimizada do PHP construída para funcionar com produtos
LiteSpeed através do SAPI LiteSpeed. LSPHP é executado como seu próprio processo e tem
seu próprio binário separado, que pode ser utilizado como um simples binário
para executar scripts PHP da linha de comando.

O LSAPI é uma API altamente otimizada que permite comunicação entre o
LiteSpeed e motores web de terceiros. Seu protocolo é similar ao FCGI, mas é
mais eficiente.

Esta documentação cobrirá a instalação e configuração do PHP com LSAPI
para um Servidor Web LiteSpeed e um Servidor Web OpenLiteSpeed.

Este guia assume que o LSWS ou o OLS está instalado com seus
caminhos e configurações padrões. O diretório padrão de instalação para ambos os servidores
web é /usr/local/lsws e ambos podem ser executados do subdiretório bin.

Favor notar que, ao longo desta documentação, números de versões foram
trocados por um `x` para assegurar que a informação se mantenha correta no futuro.
Favor trocar, conforme necessário, com os números das versões correspondentes.

1. Para obter e instalar o Servidor Web LiteSpeed ou o Servidor Web OpenLiteSpeed, acesse a
   documentação do LiteSpeed
   [» página de instalação](https://docs.litespeedtech.com/products/lsws/installation/)
   ou a documentação do OpenLiteSpeed
   [» página de instalação](https://docs.openlitespeed.org/installation/source/).
2. Obtenha e descompacte o código fonte do PHP:

   ```
   mkdir /home/php
   cd /home/php
   wget http://us1.php.net/get/php-x.x.x.tar.gz/from/this/mirror
   tar -zxvf php-x.x.x.tar.gz
   cd php-x.x.x
   ```
3. Configure e construa o PHP. Aqui é onde o PHP pode ser customizado com várias opções,
   como quais extensões serão habilitadas. Execute ./configure --help para uma lista de opções
   disponíveis. No exemplo, serão usadas as opções de configuração padrão recomendadas para o
   LiteSpeed:

   ```
   ./configure ... '--with-litespeed'
   make
   sudo make install
   ```
4. Verificando a Instalação do LSPHP

   Uma das maneiras mais simples de verificar se a instalação do PHP teve sucesso
   é executar o seguinte código:

   ```
   cd /usr/local/lsws/fcgi-bin/
   ./lsphp5 -v
   ```

   Isso deve retornar informação sobre o novo PHP construído:

   ```
   PHP 5.6.17 (litespeed) (built: Mar 22 2016 11:34:19)
   Copyright (c) 1997-2014 The PHP Group
   Zend Engine v2.6.0, Copyright (c) 1998-2015 Zend Technologies
   ```

   Note o `litespeed` entre parênteses. Isso significa que o binário PHP foi
   construído com suporte LSAPI.

Seguindo os passos acima, LiteSpeed / OpenLiteSpeed devem
agora estar rodando com suporte ao PHP como uma extensão SAPI. Existem muitas opções de configuração
adicionais disponíveis para LSWS / OLS e PHP. Para mais informações,
verifique a documentação do LiteSpeed sobre
[» PHP](https://docs.litespeedtech.com/extapp/php/configuration/control/).

Usando LSPHP pela linha de comando:

LSPHP(LSAPI + PHP) no modo de linha de comando é usado para processar scripts PHP rodando
em um servidor remoto que não necessariamente tem um servidor web em execução. É usado
para processar scripts PHP que residem em um servidor web local (separado). Esta configuração é
adequada para escalabilidade de serviços já que o processamento do PHP é descarregado para um servidor remoto.

Inicie o lsphp da linha de comando em um servidor remoto:
LSPHP é um executável e pode ser iniciado manualmente e ligado a IPv4, IPv6 ou
endereços de socket no domínio Unix com a opção -b socket\_address

Exemplos:

Fazendo o LSPHP se ligar à porta 3000 em todos os endereços IPv4 e IPv6:

```
/path/to/lsphp -b [::]:3000
```

Fazendo o LSPHP se ligar à porta 3000 em todos os endereços IPv4:

```
/path/to/lsphp -b *:3000
```

Fazendo o LSPHP se ligar ao endereço 192.168.0.2:3000:

```
/path/to/lsphp -b 192.168.0.2:3000
```

Fazendo o LSPHP aceitar requisições em socket de domínio Unix `/tmp/lsphp_manual.sock`:

```
/path/to/lsphp -b /tmp/lsphp_manual.sock
```

Variáveis de ambiente podem ser adicionadas antes do executável LSPHP:

```
PHP_LSAPI_MAX_REQUESTS=500 PHP_LSAPI_CHILDREN=35 /path/to/lsphp -b IP_address:port
```

Atualmente o LiteSpeed PHP pode ser usado com os servidoreso web LiteSpeed,
OpenLiteSpeed e Apache mod\_lsapi. Para os passos sobre a
configuração no lado do servidor, visite as páginas de documentação para
[» LiteSpeed](https://docs.litespeedtech.com/extapp/php/getting_started/)
e [» OpenLiteSpeed](https://docs.openlitespeed.org/kb/category/php/).

LSPHP também pode ser instalado de diversas outras maneiras.

CentOS:
No CentOS, LSPHP pode ser instalado a partir do repositório LiteSpeed ou do repositório
Remi usando [» RPM](https://docs.litespeedtech.com/extapp/php/getting_started/#litespeed-repo-search-packages).

Debian:
No Debian, LSPHP pode ser instalado a partir do repositório do LiteSpeed usando
[» apt](https://docs.litespeedtech.com/extapp/php/getting_started/#litespeed-repo-search-packages).

cPanel:
Visite a respectiva [» página de documentação](https://docs.litespeedtech.com/cp/cpanel/quickstart/#easyapache-integration).
sobre como instalar o LSPHP com cPanel e LSWS/OLS usando EasyApache 4.

Plesk:
Plesk pode ser usado com LSPHP no CentOS, CloudLinux, Debian e Ubuntu.
Para mais detalhes sobre isso, visite a respectiva [» página de documentação](https://docs.litespeedtech.com/cp/plesk/).

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
