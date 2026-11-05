# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb.installation.php

---

## Instalação

## Instalando a extensão MongoDB PHP com PIE

**Aviso**

PECL está obsoleto.
O PHP Installer for Extensions (PIE) substitui o PECL e é o recomendado para instalar extensões.
Descubra mais em [» https://github.com/php/pie](https://github.com/php/pie)

Para instalar a extensão MongoDB usando PIE, execute o seguinte comando:

```
pie install mongodb/mongodb-extension
```

## Instalando a extensão MongoDB PHP com PECL

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://pecl.php.net/package/mongodb](https://pecl.php.net/package/mongodb)

Usuários de Linux, Unix e macOS podem executar o seguinte comando para instalar a
extensão:

```
$ sudo pecl install mongodb
```

Em sistemas com múltiplas versões de PHP instaladas (por exemplo, macOS padrão,
Homebrew), cada versão do PHP
terá seu próprio comando [pecl](install.pecl.md)
e arquivo php.ini. Além disso, cada ambiente PHP (por exemplo,
CLI, web) podem usar arquivos php.ini separados.

A partir da versão de extensão 1.17.0, o PECL solicitará várias opções
de `configure`. Para instalar a extensão com opções padrão
em um script não interativo, a entrada de string vazia pode ser canalizada para
`pecl install` usando o comando `yes`:

```
$ yes '' | sudo pecl install mongodb
```

Uma lista completa de opções `configure` suportadas pode ser
encontrada no arquivo `package.xml` incluído no pacote PECL.
Para instalar a extensão com opções `configure` específicas
em um script não interativo, a
opção `--configureoptions` para
`pecl install` pode ser usada:

```
$ sudo pecl install --configureoptions='with-mongodb-system-libs="yes" enable-mongodb-developer-flags="no"' mongodb
```

Por padrão, a instalação da extensão via PECL usará versões agrupadas de
[» libbson](https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson),
[» libmongoc](https://github.com/mongodb/mongo-c-driver) e
[» libmongocrypt](https://github.com/mongodb/libmongocrypt) e tentará
configurá-los automaticamente.

> **Nota**:
>
> Se o processo de construção não conseguir encontrar uma biblioteca SSL, verifique se os
> pacotes de desenvolvimento (por exemplo, `libssl-dev`) e
> [» pkg-config](https://en.wikipedia.org/wiki/Pkg-config) estão ambos
> instalados. Se isso não resolver o problema, considere usar o processo de
> [instalação
> manual](mongodb.installation.md#mongodb.installation.manual).

Finalmente, adicione a seguinte linha ao arquivo php.ini para cada ambiente
que precisará usar a extensão:

```
extension=mongodb.so
```

## Instalando a extensão MongoDB PHP no macOS com Homebrew

[» Homebrew 1.5.0](https://brew.sh/2018/01/19/homebrew-1.5.0/)
descontinuou o [» Homebrew/php tap](https://github.com/Homebrew/brew)
e fórmulas removidas para extensões PHP individuais. A partir de agora,
os usuários do macOS são aconselhados a instalar a
fórmula [» php](https://formulae.brew.sh/formula/php)
e seguir a fórmula padrão
[Instruções de instalação do PECL](mongodb.installation.md#mongodb.installation.pecl)
usando o comando [pecl](install.pecl.md) fornecido pela instalação do
Homebrew PHP.

Alternativamente, o
[» shivammathur/extensions](https://github.com/shivammathur/homebrew-extensions)
fornece fórmulas para extensões PHP individuais. Por exemplo, para instalar uma
extensão para PHP 8.4, execute:

```
$ brew install shivammathur/extensions/mongodb@8.4
```

Observe que apenas a versão mais recente da extensão está disponível no brew.

> **Nota**:
> **Instale as dependências necessárias**  
>
> Para garantir que o suporte SSL possa ser configurado corretamente, certifique-se de que os
> pacotes `openssl` e `pkgconf` estejam
> instalados. Se qualquer um desses estiver faltando, a extensão será
> compilada com Secure Transport, o que pode levar a problemas de compatibilidade.

## Instalando a extensão MongoDB PHP no Windows

Os binários pré-compilados são anexados às
[» versões do Github](https://github.com/mongodb/mongo-php-driver/releases/) do projeto.
Os arquivos são publicados para várias combinações de versão PHP, segurança de thread
(TS ou NTS) e arquitetura (x86 ou x64). Determinar o arquivo correto para o
ambiente PHP e extrair o arquivo php\_mongodb.dll
para o diretório de extensão ("ext" por padrão).

Adicione a seguinte linha ao arquivo php.ini para cada ambiente que
precisará usar a extensão:

```
extension=php_mongodb.dll
```

A falha ao selecionar o binário correto resultará em um erro ao tentar
carregar a DLL de extensão em tempo de execução:

```
PHP Warning:  PHP Startup: Unable to load dynamic library 'mongodb'
```

Certifique-se de que a DLL baixada corresponda às seguintes propriedades de tempo de execução
do PHP:

- Versão do PHP (**`PHP_VERSION`**)
- Segurança de thread (**`PHP_ZTS`**)
- Arquitetura (**`PHP_INT_SIZE`**)

Além das constantes mencionadas acima, essas propriedades também podem ser
inferidas de [phpinfo()](function.phpinfo.md). Se um sistema tiver vários runtimes
de execução PHP instalados, verifique novamente se a saída [phpinfo()](function.phpinfo.md)
é para o ambiente correto.

> **Nota**:
> **Dependências adicionais de DLL para usuários do Windows**  
>
> Para que esta extensão funcione, existem arquivos
> DLL que devem estar disponíveis no
> PATH do sistema Windows. Para saber como fazer isso, veja a
> FAQ intitulada "[Como eu adiciono o meu diretório PHP ao PATH
> do Windows](faq.installation.md#faq.installation.addtopath)". Embora copiar arquivos DLL
> da pasta do PHP para o diretório system do Windows também funcione
> (porque o diretório system está, por padrão, no PATH do sistema),
> isso não é recomendado.
> *Esta extensão requer que os seguintes arquivos estejam no
> PATH:*
> libsasl.dll

## Construindo o driver MongoDB PHP a partir do código-fonte

Para desenvolvedores e usuários interessados nas correções de bugs mais recentes, a extensão
pode ser compilada a partir do código-fonte mais recente no
[» Github](https://github.com/mongodb/mongo-php-driver). Execute os seguintes
comandos para clonar e construir o projeto:

```
$ git clone https://github.com/mongodb/mongo-php-driver.git
$ cd mongo-php-driver
$ git submodule update --init
$ phpize
$ ./configure
$ make all
$ sudo make install
```

Em sistemas com múltiplas versões de PHP instaladas (por exemplo, macOS padrão,
Homebrew), cada versão do PHP
terá seu próprio comando [phpize](install.pecl.phpize.md)
e arquivo php.ini. Além disso, cada ambiente PHP (por exemplo,
CLI, web) pode usar um arquivo php.ini separado.

Por padrão, a extensão usará versões agrupadas de
[» libbson](https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson),
[» libmongoc](https://github.com/mongodb/mongo-c-driver) e
[» libmongocrypt](https://github.com/mongodb/libmongocrypt) e
tentar configurá-los automaticamente. Se essas bibliotecas já estiverem
instaladas como bibliotecas de sistema, a extensão poderá utilizá-las
especificando `--with-mongodb-system-libs=yes` como uma opção para
`configure`.

Para obter uma lista completa de opções de `configure`, execute
**configure --help**.

Ao usar versões empacotadas de libmongoc e libmongocrypt, a extensão
também tentará selecionar uma biblioteca SSL de acordo com a
opção `--with-mongodb-ssl` `configure`.
A partir da versão de extensão 1.17.0, o OpenSSL é sempre preferido por padrão.
Anteriormente, o Secure Transport era o padrão no macOS e o OpenSSL era o
padrão em todas as outras plataformas.

> **Nota**:
>
> Se o processo de construção não conseguir encontrar uma biblioteca SSL, verifique se os
> pacotes de desenvolvimento (por exemplo, `libssl-dev`) e
> [» pkg-config](https://en.wikipedia.org/wiki/Pkg-config) estão ambos
> instalados.
>
> Ao usar o Homebrew no macOS, é comum que um sistema tenha várias
> versões do OpenSSL instaladas. Para garantir que a versão desejada do OpenSSL
> seja selecionada, a variável de ambiente `PKG_CONFIG_PATH` pode
> ser usada para controlar o caminho de pesquisa para `pkg-config`.

A etapa final de compilação, **make install**, reportará onde
mongodb.so foi instalado, semelhante a:

```
Installing shared extensions:     /usr/lib/php/extensions/debug-non-zts-20220829/
```

Certifique-se de que a opção [extension\_dir](ini.core.md#ini.extension-dir)
no php.ini aponta para o diretório onde mongodb.so
foi instalado. A opção pode ser consultada executando:

```
$ php -i | grep extension_dir
  extension_dir => /usr/lib/php/extensions/debug-non-zts-20220829 =>
                   /usr/lib/php/extensions/debug-non-zts-20220829
```

Se os diretórios forem diferentes, altere
[extension\_dir](ini.core.md#ini.extension-dir) no php.ini ou
mova manualmente mongodb.so para o diretório correto.

Finalmente, adicione a seguinte linha ao arquivo php.ini para cada ambiente
que precisará usar a extensão:

```
extension=mongodb.so
```

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
