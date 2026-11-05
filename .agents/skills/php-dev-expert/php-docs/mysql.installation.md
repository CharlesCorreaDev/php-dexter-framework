# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql.installation.php

---

## Instalação

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

Para compilar, simplesmente use a opção de configuração
**--with-mysql[=DIR]**
onde o parâmetro opcional `[DIR]` aponta para o
diretório onde o MySQL está instalado.

Embora esta esta extensão MySQL seja compatível com o MySQL 4.1.0 e posterior,
ela não suporta a funcionalidade extra que estas versões fornecem.
Para isto, use a extensão [MySQLi](book.mysqli.md).

Se você quiser instalar a extensão mysql junto com a extensão mysqli
você deve usar a mesma biblioteca de cliente para evitar quaisquer conflitos.

## Instalação em Sistemas Linux

Nota: `[DIR]` é o caminho para os arquivos da biblioteca de cliente
MySQL (*cabeçalhos e bibliotecas*), que podem ser obtidos do site do
[» MySQL](https://www.mysql.com/).

**Matriz de suporte em tempo de compilação da ext/mysql**

| Versão do PHP | Padrão | Opções de Configuração: [mysqlnd](mysqlnd.overview.md) | Opções de Configuração: `libmysqlclient` | Registro de Alterações |
| --- | --- | --- | --- | --- |
| 4.x.x | libmysqlclient | Não Disponível | **--without-mysql** para desabilitar | MySQL habilitado por padrão, bibliotecas de clientes MySQL vêm embutidas |
| 5.0.x, 5.1.x, 5.2.x | libmysqlclient | Não Disponível | **--with-mysql=[DIR]** | O MySQL não é mais habilitado por padrão, e as bibliotecas de clientes MySQL não vêm mais embutidas |
| 5.3.x | libmysqlclient | **--with-mysql=mysqlnd** | **--with-mysql=[DIR]** | mysqlnd agora está disponível |
| 5.4.x | mysqlnd | **--with-mysql** | **--with-mysql=[DIR]** | mysqlnd agora é o padrão |

## Instalação em Sistemas Windows

## PHP 5.0.x, 5.1.x, 5.2.x

O MySQL não é mais habilitado por padrão, então a DLL
php\_mysql.dll deve estar habilitada dentro do
php.ini. Além disso, o PHP precisa de acesso à biblioteca de cliente MySQL. Um arquivo
chamado libmysql.dll é incluído na distribuição PHP
do Windows, e para que o PHP possa conversar com o MySQL este arquivo precisa estar
disponível no PATH dos sistemas Windows. Veja a pergunta
entitulada "[Como adicionar meu diretório
PHP ao PATH do Windows](faq.installation.md#faq.installation.addtopath)" para informações sobre como fazer
isso. Embora copiar o arquivo libmysql.dll para o diretório de sistema
do Windows também funcione (porque o diretório de sistema está por padrão no
PATH do sistema), isto não é recomendado.

Assim como ao habilitar qualquer extensão PHP (como
php\_mysql.dll), a diretiva PHP
[extension\_dir](ini.core.md#ini.extension-dir) deve apontar para
o diretório onde as extensões PHP estão localizadas. Veja também as
[Instruções para Instalação Manual
no Windows](install.windows.manual.md). Um exemplo de valor para extension\_dir no PHP 5 é
`c:\php\ext`

> **Nota**:
>
> Se ao iniciar o servidor web um erro similar ao seguinte ocorrer:
> `"Unable to load dynamic library './php_mysql.dll'"`,
> é porque o arquivo php\_mysql.dll e/ou
> libmysql.dll não pode ser encontrado pelo sistema.

## PHP 5.3.0+

O [Driver Nativo MySQL](mysqlnd.overview.md) está habilitado por
padrão. Inclui php\_mysql.dll, mas libmysql.dll
não é mais necessário ou usado.

## Notas de Instalação do MySQL

**Aviso**

Falhas e problemas de inicialização do PHP podem ocorrer
ao carregar esta extensão em conjunto com a extensão recode.
Veja a extensão [recode](ref.recode.md) para maiores
informações.

> **Nota**:
>
> Se for necessário usar conjuntos de caracteres diferentes de *latin*
> (padrão), deve-se instalar uma libmysqlclient externa (não incluída) com o suporte
> ao conjunto de caracteres compilado.

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
