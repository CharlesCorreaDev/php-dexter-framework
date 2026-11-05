# Compilando e Instalando - Servidor HTTP Apache Versão 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/install.html

---

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Servidor HTTP Apache Versão 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [Servidor HTTP](https://httpd.apache.org/) > [Documentação](https://httpd.apache.org/docs/) > [Versão 2.4](index.md)

# Compilando e Instalando

Esta tradução pode estar desatualizada.
Verifique a versão em inglês para alterações recentes.

Este documento cobre a compilação e a instalação do Servidor HTTP Apache
somente em sistemas Unix e similares. Para compilação e
instalação no Windows, consulte [Usando o Servidor HTTP Apache com o Microsoft
Windows](platform__windows.md) e [Compilando o Apache para o Microsoft Windows](platform__win_compiling.md).
Para outras plataformas, consulte a documentação da [platforma](platform.md).

O Apache httpd usa `libtool` e `autoconf`
para criar um ambiente de compilação semelhante a muitos
outros projetos de código aberto.

Se você estiver atualizando de uma versão secundária para a próxima (por
exemplo, de 2.4.8 para 2.4.9), pule para a seção de [atualização](#upgrading).

- ![](./images/down.gif) [Visão geral para o
  ansioso](#overview)
- ![](./images/down.gif) [Requisitos](#requirements)
- ![](./images/down.gif) [Baixando o Apache](#download)
- ![](./images/down.gif) [Extraindo](#extract)
- ![](./images/down.gif) [Configurando a estrutura do código](#configure)
- ![](./images/down.gif) [Compilando](#compile)
- ![](./images/down.gif) [Instalando](#install)
- ![](./images/down.gif) [Personalizando](#customize)
- ![](./images/down.gif) [Teste](#test)
- ![](./images/down.gif) [Atualizando](#upgrading)
- ![](./images/down.gif) [Pacotes de terceiros](#thirdp)

### Veja também

- [Configurar a árvore do código-fonte](programs__configure.md)
- [Iniciando o httpd Apache](invoking.md)
- [Parando e Reinicializando](stopping.md)

[![top](./images/up.gif)](#page-header)

## Visão geral para o ansioso [¶](#overview "Link permanente")

Instalando no Linux Fedora/CentOS/Red Hat Enterprise
:   ```
    sudo yum install httpd
    sudo systemctl enable httpd
    sudo systemctl start httpd
    ```

    Versões mais recentes dessas distribuições usam
    `dnf` em vez de `yum`. Consulte a [documentação
    do projeto Fedora](https://fedoraproject.org/wiki/Apache_HTTP_Server) para observações específicas dessa plataforma.

Instalando no Ubuntu/Debian
:   ```
    sudo apt install apache2
    sudo service apache2 start
    ```

    Consulte a [documentação do Ubuntu](https://help.ubuntu.com/lts/serverguide/httpd.html) para observações específicas dessa plataforma.

Instalando a partir do código-fonte
:   |  |  |
    | --- | --- |
    | [Download](#download) | Baixe a última versão em [http://httpd.apache.org/download.cgi](http://httpd.apache.org/download.cgi#apache24) |
    | [Extração](#extract) | `$ gzip -d httpd-NN.tar.gz  $ tar xvf httpd-NN.tar  $ cd httpd-NN` |
    | [Configuração](#configure) | `$ ./configure --prefix=PREFIX` |
    | [Compilação](#compile) | `$ make` |
    | [Instalação](#install) | `$ make install` |
    | [Personalização](#customize) | `$ vi PREFIX/conf/httpd.conf` |
    | [Teste](#test) | `$ PREFIX/bin/apachectl -k start` |

    *NN* deve ser substituído pelo número da versão atual
    e *PREFIX* deve ser substituído pelo
    caminho do sistema de arquivos no qual o servidor deve ser instalado. Se
    *PREFIX* não for especificado, o padrão será
    `/usr/local/apache2`.

    Cada seção do processo de compilação e instalação é
    descrita com mais detalhes abaixo, começando com os requisitos
    para compilar e instalar o httpd Apache.

Não encontrou sua plataforma favorita mencionada
aqui? [Ajude-nos
a melhorar esta documentação.](http://http://httpd.apache.org/docs-project/)

[![top](./images/up.gif)](#page-header)

## Requisitos [¶](#requirements "Link permanente")

Os seguintes requisitos existem para a compilação do httpd Apache:

APR e APR-Util
:   Certifique-se de que o APR e o APR-Util já estejam instalados em seu sistema.
    Caso contrário, ou se preferir não usar as versões fornecidas pelo sistema,
    baixe as versões mais recentes do APR e do APR-Util
    em [Apache APR](http://apr.apache.org/), descompacte-as
    em `/httpd_source_tree_root/srclib/apr` e `/httpd_source_tree_root/srclib/apr-util`
    (certifique-se de que os nomes dos diretórios não contenham números de versão; por exemplo,
    a distribuição do APR deve estar em /httpd\_source\_tree\_root/srclib/apr/) e use a
    opção `--with-included-apr` do `./configure`.
    Em algumas plataformas, pode ser necessário instalar os
    pacotes `-dev` correspondentes para permitir que o httpd seja compilado
    com sua cópia instalada do APR e do APR-Util.

Biblioteca de Expressões Regulares Compatível com Perl (PCRE)
:   Esta biblioteca é necessária, mas não é mais fornecida com o httpd.
    Baixe o código-fonte em [http://www.pcre.org](http://www.pcre.org/),
    ou instale um pacote. Se o seu sistema de compilação não encontrar
    o script pcre-config instalado pela compilação do PCRE, indique-o
    usando o parâmetro `--with-pcre`. Em algumas plataformas,
    pode ser necessário instalar o pacote `-dev` correspondente
    para permitir que o httpd seja compilado com a sua cópia instalada
    do PCRE.

Espaço em Disco
:   Certifique-se de ter pelo menos 50 MB de espaço livre temporário em disco.
    Após a instalação, o servidor ocupa aproximadamente 10 MB de espaço em disco.
    Os requisitos reais de espaço em disco variam
    consideravelmente dependendo das opções de configuração
    escolhidas, dos módulos de terceiros e, claro,
    do tamanho do(s) site(s) que você tem no servidor.

Compilador e sistema de construção ANSI-C
:   Certifique-se de ter um compilador ANSI-C instalado. O [compilador
    C GNU (GCC)](http://gcc.gnu.org/) da [Free Software Foundation (FSF)](http://www.gnu.org/)
    é recomendado. Se você não tiver o GCC,
    certifique-se de que o compilador do seu fornecedor seja compatível com
    ANSI. Além disso, seu `PATH` precisa conter
    ferramentas básicas de compilação, como `make`.

Manutenção precisa do horário
:   Os elementos do protocolo HTTP são expressos como o horário do
    dia. Portanto, é hora de configurar algum recurso de
    sincronização de horário em seu sistema. Normalmente, os
    programas `ntpdate` ou `xntpd` são usados ​​para
    esse propósito e são baseados no Network Time Protocol (NTP).
    Consulte a [página inicial do NTP](http://www.ntp.org)
    para obter mais detalhes sobre o software NTP e servidores
    públicos de horário.

[Perl 5](http://www.perl.org/) [OPCIONAL]
:   Para alguns dos scripts de suporte, como `apxs` ou `dbmmanage` (que são
    escritos em Perl), o interpretador Perl 5 é necessário (versões
    5.003 ou mais recentes são suficientes). Se nenhum interpretador Perl 5 for encontrado pelo
    script `configure`, você não poderá usar
    os scripts de suporte afetados. É claro que você ainda poderá
    compilar e usar o httpd Apache.

[![top](./images/up.gif)](#page-header)

## Baixando o Apache [¶](#download "Link permanente")

O Servidor HTTP Apache pode ser baixado do [site de download
do Servidor HTTP Apache](http://httpd.apache.org/download.cgi), que lista vários espelhos. A maioria dos usuários
do Apache em sistemas do tipo Unix se beneficiará mais baixando e
compilando uma versão do código-fonte. O processo de compilação (descrito abaixo) é
fácil e permite personalizar o servidor de acordo com suas necessidades.
Além disso, as versões binárias geralmente não estão atualizadas com as versões
de código-fonte mais recentes. Se você baixar um binário, siga as instruções
no arquivo `INSTALL.bindist` dentro da distribuição.

Após baixar, é importante verificar se você possui uma
versão completa e não modificada do Servidor HTTP Apache. Isso
pode ser feito testando o arquivo .tar baixado em relação à
assinatura PGP. Detalhes sobre como fazer isso estão disponíveis na [página de download](http://http://httpd.apache.org/download.cgi#verify)
e um exemplo detalhado está disponível descrevendo o [uso do
PGP](http://http://httpd.apache.org/dev/verification.html).

[![top](./images/up.gif)](#page-header)

## Extraindo [¶](#extract "Link permanente")

Extrair o código-fonte do arquivo tar do servidor HTTP Apache é uma
questão simples de descompactar e, em seguida, extrair o arquivo tar:

```
$ gzip -d httpd-NN.tar.gz
$ tar xvf httpd-NN.tar
```

Isso criará um novo diretório no diretório atual
contendo o código-fonte da distribuição. Você deve
mudar para este diretório (`cd`) antes de prosseguir com
a compilação do servidor.

[![top](./images/up.gif)](#page-header)

## Configurando a estrutura do código [¶](#configure "Link permanente")

O próximo passo é configurar a estrutura do código-fonte do Apache para sua
plataforma específica e requisitos pessoais. Isso é feito usando
o script `configure` incluído no
diretório raiz da distribuição. (Desenvolvedores que baixarem
uma versão não lançada da estrutura de código-fonte do Apache precisarão ter
o `autoconf` e o `libtool` instalados e
precisarão executar o `buildconf` antes de prosseguir com os próximos
passos. Isso não é necessário para versões oficiais.)

Para configurar a estrutura do código usando todas as opções padrão,
basta digitar `./configure`. Para alterar as opções padrão,
o `configure` aceita uma variedade de variáveis
e opções de linha de comando.

A opção mais importante é o local `--prefix`
onde o Apache será instalado posteriormente, pois o Apache precisa ser
configurado para funcionar corretamente nesse local. Um controle mais preciso
da localização dos arquivos é possível com [opções de
adicionais do configure](programs__configure.md#installationdirectories).

Neste ponto, você também pode especificar quais
[recursos](programs__configure.md#optionalfeatures) você
deseja incluir no Apache, habilitando e desabilitando [módulos](mod.md). O Apache vem com uma ampla gama de módulos
incluídos por padrão. Eles serão compilados como
[objetos compartilhados (DSOs)](dso.md) que podem ser carregados
ou descarregados no momento da execução.
Você também pode optar por compilar módulos estaticamente usando a opção
`--enable-module=static`.

Módulos adicionais são habilitados usando a opção
`--enable-module`, onde
module é o nome do módulo com a
string `mod_` removida e com qualquer sublinhado convertido
em um hífen. Da mesma forma, você pode desabilitar módulos com a opção
`--disable-module`. Tenha cuidado ao
usar essas opções, pois o `configure` não pode avisá-lo
se o módulo especificado não existir; ele simplesmente ignorará a
opção.

Além disso, às vezes é necessário fornecer ao script
`configure` informações adicionais sobre a
localização do seu compilador, bibliotecas ou arquivos de cabeçalho. Isso é
feito passando variáveis ​​de ambiente ou opções de linha de comando
para `configure`. Para obter mais informações, consulte a
página de manual do `configure`. Ou execute
`configure` usando a opção `--help`.

Para uma prévia das possibilidades disponíveis, aqui
está um exemplo típico que compila o Apache no caminho
`/sw/pkg/apache` com um compilador e opções específicos
mais os dois módulos adicionais `mod_ldap` e
`mod_lua`:

```
$ CC="pgcc" CFLAGS="-O2" \
  ./configure --prefix=/sw/pkg/apache \
  --enable-ldap=shared \
  --enable-lua=shared
```

Quando o programa `configure` for executado, levará alguns minutos para
testar a disponibilidade de recursos em seu sistema e gerar
arquivos make que serão usados ​​posteriormente para compilar o servidor.

Detalhes sobre todas as diferentes opções de `configure` estão
disponíveis na página do manual de `configure`.

[![top](./images/up.gif)](#page-header)

## Compilando [¶](#compile "Link permanente")

Agora você pode compilar as várias partes que formam o pacote Apache
simplesmente executando o comando:

`$ make`

Por favor, tenha paciência, pois uma configuração básica leva
vários minutos para compilar e o tempo pode variar bastante
dependendo do seu equipamento e do número de módulos que você
habilitou.

[![top](./images/up.gif)](#page-header)

## Instalando [¶](#install "Link permanente")

Agora é hora de instalar o pacote no diretório de instalação configurado
*PREFIX* (consulte a opção `--prefix`
acima) executando:

`$ make install`

Normalmente, esta etapa exigirá privilégios de root, já que
*PREFIX* geralmente é um diretório com permissões de
escrita restritas.

Se você estiver atualizando, a instalação não sobrescreverá
seus arquivos ou documentos de configuração.

[![top](./images/up.gif)](#page-header)

## Personalizando [¶](#customize "Link permanente")

Em seguida, você pode personalizar seu Servidor HTTP Apache editando
os [arquivos de configuração](configuring.md) em
`PREFIX/conf/`.

`$ vi PREFIX/conf/httpd.conf`

Consulte o manual do Apache em
`PREFIX/docs/manual/` ou consulte <http://httpd.apache.org/docs/2.4/> para obter a versão mais recente
deste manual e uma referência completa das [diretivas de configuração](mod__directives.md) disponíveis.

[![top](./images/up.gif)](#page-header)

## Teste [¶](#test "Link permanente")

Agora você pode [iniciar](invoking.md) seu servidor Apache
HTTP executando imediatamente:

`$ PREFIX/bin/apachectl -k start`

Você deverá então conseguir solicitar seu primeiro documento
através da URL `http://localhost/`. A página web que você vê está localizada
em `DocumentRoot`,
que geralmente será `PREFIX/htdocs/`.
Em seguida, [interrompa](stopping.md) o servidor novamente
executando:

`$ PREFIX/bin/apachectl -k stop`

[![top](./images/up.gif)](#page-header)

## Atualizando [¶](#upgrading "Link permanente")

O primeiro passo para a atualização é ler o anúncio de lançamento
e o arquivo `CHANGES` na distribuição do código-fonte para
encontrar quaisquer alterações que possam afetar seu site. Ao mudar entre
versões principais (por exemplo, de 2.0 para 2.2 ou de 2.2 para 2.4),
provavelmente haverá grandes diferenças na configuração de tempo de compilação e
tempo de execução que exigirão ajustes manuais. Todos os
módulos também precisarão ser atualizados para acomodar as alterações na
API do módulo.

A atualização de uma versão secundária para a seguinte (por exemplo, de
2.2.55 para 2.2.57) é mais fácil. O processo `make install`
não sobrescreverá nenhum dos seus documentos, arquivos de registro ou arquivos
de configuração existentes. Além disso, os desenvolvedores fazem
todos os esforços para evitar alterações incompatíveis nas
opções do `configure`, na configuração de tempo de execução ou na
API do módulo entre versões secundárias. Na maioria dos casos, você poderá
usar uma linha de comando `configure` idêntica, um arquivo de
configuração idêntico e todos os seus módulos continuarão
funcionando.

Para atualizar entre versões secundárias, comece encontrando o
arquivo `config.nice` no diretório `build` do
seu servidor instalado ou na raiz da árvore de origem da sua instalação
antiga. Este arquivo conterá a linha de comando exata do
`configure` que você usou para configurar a árvore de
origem. Em seguida, para atualizar de uma versão para a próxima, basta
copiar o arquivo `config.nice` para a árvore de origem da nova
versão, editá-lo para fazer as alterações desejadas e, em seguida,
executar:

```
$ ./config.nice
$ make
$ make install
$ PREFIX/bin/apachectl -k graceful-stop
$ PREFIX/bin/apachectl -k start
```

Você deve sempre testar qualquer nova versão em seu
ambiente antes de colocá-la em produção. Por exemplo, você
pode instalar e executar a nova versão junto com a antiga
usando um `--prefix` diferente e uma
porta diferente (ajustando a diretiva `Listen`) para testar quaisquer
incompatibilidades antes de fazer a atualização final.

Você pode passar argumentos adicionais para `config.nice`,
que serão anexados às suas opções originais de
`configure`:

`$ ./config.nice --prefix=/home/test/apache --with-port=90`

[![top](./images/up.gif)](#page-header)

## Pacotes de terceiros [¶](#thirdp "Link permanente")

Um grande número de terceiros fornece suas próprias distribuições
empacotadas do Servidor HTTP Apache para instalação em
plataformas específicas. Isso inclui as várias distribuições Linux,
vários pacotes de terceiros para Windows, Mac OS X, Solaris e muitas
outras.

Nossa licença de software não apenas permite mas também incentiva esse tipo de
redistribuição. No entanto, isso resulta em uma situação em que o
layout de configuração e os valores padrão da sua instalação do servidor
podem diferir do que está descrito na documentação. Embora
lamentável, essa situação provavelmente não mudará
tão cedo.

Uma [descrição
dessas distribuições de terceiros](https://cwiki.apache.org/confluence/display/httpd/DistrosDefaultLayout) é mantida no wiki
do Servidor HTTP e deve refletir o estado atual dessas
distribuições de terceiros. No entanto, você precisará se familiarizar
com o gerenciamento de pacotes e os procedimentos de instalação da
sua plataforma específica.

Línguas Disponíveis: [de](https://httpd.apache.org/docs/2.4/pt-br/de/install.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.4/pt-br/en/install.html "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/install.html "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/install.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/install.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/install.html "Korean") |
[pt-br](pt-br__install.md "Português (Brasil)") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/install.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
