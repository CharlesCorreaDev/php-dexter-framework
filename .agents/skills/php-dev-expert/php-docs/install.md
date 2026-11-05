# Instalação e Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.php

---

# Instalação e Configuração

- [Considerações Gerais sobre Instalação](install.general.md)
- [Instalação em sistemas Unix](install.unix.md)
  - [Instalando a partir de pacotes no Debian GNU/Linux e distribuições relacionadas](install.unix.debian.md)
  - [Instalando a partir de pacotes em distribuições GNU/Linux que usam DNF](install.unix.dnf.md)
  - [Instalando a partir de pacotes ou portas no OpenBSD](install.unix.openbsd.md)
  - [Instalando a partir do código-fonte em sistemas Unix e macOS](install.unix.source.md)
  - [CGI e instalações de linha de comando](install.unix.commandline.md)
  - [Apache 2.0 em sistemas Unix](install.unix.apache2.md)
  - [Nginx 1.4.x em sistemas Unix](install.unix.nginx.md)
  - [Lighttpd 1.4 em sistemas Unix](install.unix.lighttpd-14.md)
  - [Servidores Web LiteSpeed/OpenLiteSpeed em sistemas Unix](install.unix.litespeed.md)
  - [Dicas de instalação específicas para o Solaris](install.unix.solaris.md)
- [Instalação no macOS](install.macosx.md)
  - [Instalação no macOS usando pacotes de terceiros](install.macosx.packages.md)
  - [Usando o pacote do PHP no macOS para versões anteriores ao macOS Monterey](install.macosx.bundled.md)
  - [Compilando o PHP no MacOS](install.macosx.compile.md)
- [Instalação em sistemas Windows](install.windows.md)
  - [Configuração recomendada em sistemas Windows](install.windows.recommended.md)
  - [Instalação Manual de binários pré-compilados](install.windows.manual.md)
  - [Instalação para Apache 2.x em sistemas Windows](install.windows.apache2.md)
  - [Instalação com IIS no Windows](install.windows.iis.md)
  - [Compilando a partir dos fontes](install.windows.building.md)
  - [Executando o PHP em linha de comando em sistemas Windows](install.windows.commandline.md)
- [Instalação em Plataformas de Computação em Nuvem](install.cloud.md)
  - [Azure App Services](install.cloud.azure.md)
  - [Amazon EC2](install.cloud.ec2.md)
  - [DigitalOcean](install.cloud.digitalocean.md)
- [FastCGI Process Manager (FPM)](install.fpm.md)
  - [Instalação](install.fpm.install.md)
  - [Configuração](install.fpm.configuration.md)
- [Instalação das extensões PECL](install.pecl.md)
  - [Introdução às Instalações PECL](install.pecl.intro.md)
  - [Baixando extensões PECL](install.pecl.downloads.md)
  - [Instalando uma extensão PHP no Windows](install.pecl.windows.md)
  - [Compilando extensões PECL compartilhadas com o comando pecl](install.pecl.pear.md)
  - [Compilando extensões PECL compartilhadas com phpize](install.pecl.phpize.md)
  - [php-config](install.pecl.php-config.md)
  - [Compilando extensões PECL estaticamente no PHP](install.pecl.static.md)
- [Introdução ao Composer](install.composer.intro.md)
- [Introdução ao PIE](install.pie.intro.md)
- [Configuração em tempo de execução](configuration.md)
  - [O arquivo de configuração](configuration.file.md)
  - [Arquivos .user.ini](configuration.file.per-user.md)
  - [Onde uma configuração deve ser definida](configuration.changes.modes.md)
  - [Como mudar as configurações](configuration.changes.md)

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
