# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.installation.php

---

## Instalação

A extensão `mysqli` foi introduzida com o PHP versão
5.0.0. O MySQL Native Driver foi incluído no PHP na versão 5.3.0.

## Instalação no Linux

As distribuições comuns do Unix incluem versões binárias do PHP que podem
ser instaladas. Embora estas versões binárias sejam tipicamente construídas com
suporte às extensões MySQL, as próprias bibliotecas das extensões
podem precisar de pacote adicional para instalação. Verifique
o gerenciador de pacote que vem com sua distribuição escolhida para
disponibilidade.

Por exemplo, no Ubuntu o pacote `php5-mysql` instala
as extensões do PHP ext/mysql, ext/mysqli e pdo\_mysql. No CentOS,
o pacote `php-mysql` também instala estas três
extensões PHP.

Alternativamente, pode-se compilar esta extensão. Construir o PHP a partir
do código-fonte permite que se especifique as extensões MySQL que se deseja usar,
bem como pode-se escolher a biblioteca cliente para cada extensão.

O MySQL Native Driver é a opção de biblioteca cliente recomendada,
e a partir do PHP 8.2.0 a única opção, pois
resulta em melhor desempenho e dá acesso a recursos não disponíveis
ao usar a Biblioteca Cliente MySQL. Consulte a página
[O que é o Driver Nativo do MySQL?](mysqli.overview.md#mysqli.overview.mysqlnd)
para uma visão breve das vantagens do Driver Nativo
MySQL.

`/path/to/mysql_config` representa a localização do
programa `mysql_config` que vem com o Servidor
MySQL.

**Matriz de suporte ao mysqli em tempo de compilação**

| Versão do PHP | Padrão | Opções de Configuração: [mysqlnd](mysqlnd.overview.md) | Opções de Configuração: `libmysqlclient` | Registro de Alterações |
| --- | --- | --- | --- | --- |
| 8.2.0 e posteriores | mysqlnd | **--with-mysqli** | libmysqlclient não é suportada | mysqlnd é a única opção |
| 5.4.0 a 8.1.x | mysqlnd | **--with-mysqli** | **--with-mysqli=/path/to/mysql\_config** | mysqlnd é o padrão |
| 5.3.x | libmysqlclient | **--with-mysqli=mysqlnd** | **--with-mysqli=/path/to/mysql\_config** | mysqlnd é suportada |
| 5.0.x, 5.1.x, 5.2.x | libmysqlclient | Não Disponível | **--with-mysqli=/path/to/mysql\_config** | mysqlnd não é suportada |

## Instalação em Sistemas Windows

No Windows, a DLL php\_mysqli.dll deve ser habilitada no
php.ini.

Como em qualquer habilitação de extensão PHP (como
php\_mysqli.dll), a diretiva PHP
[extension\_dir](ini.core.md#ini.extension-dir) seve ser definida
para o diretório onde as extensões do PHP estão localizadas. Consulte também as
[Instruções de Instalação Manual no Windows](install.windows.manual.md).
Um exemplo de valor para `extension_dir`
é c:\php\ext.

> **Nota**:
>
> Se ao iniciar o servidor web um erro parecido com este ocorrer:
> `"Unable to load dynamic library './php_mysqli.dll'"`,
> é porque
> php\_mysqli.dll não pôde ser encontrada no sistema.

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
