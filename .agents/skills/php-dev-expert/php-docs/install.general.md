# Considerações Gerais sobre Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.general.php

---

# Considerações Gerais sobre Instalação

Antes de começar a instalar o PHP, primeiro você deve saber o que você
deseja fazer com ele. Existem duas principais formas de se usar
o PHP, como descrito na seção
[O que o PHP pode fazer?](introduction.md#intro-whatcando)
do manual:

- Websites e aplicações web (script do lado do servidor)
- Scripts para linha de comando

Para a primeira forma, e a mais comum, você precisa de três coisas:
o próprio PHP, um servidor web e um cliente (browser) web. Você
provavelmente já tem um browser, e dependendo da
configuração do seu sistema operacional, você pode também ter um
servidor web (Ex.: Apache no Linux e macOS; IIS no Windows).
Você também pode alugar um host em uma companhia qualquer. Dessa maneira, você
não precisa configurar nada por conta própria, apenas escrever
os seus scripts PHP, enviar (upload) para o servidor que você alugou, e
ver os resultados no seu browser.

No caso de você instalar o servidor e o PHP por conta própria, você tem
duas escolhas para o método de conexão do PHP com o
servidor. Para muitos servidores o PHP tem uma interface
direta de módulo (também chamada de SAPI). Entre esses servidores estão
Apache, Microsoft Internet Information Server,
Netscape e iPlanet.
Se o PHP não tiver suporte
de módulo para o seu servidor web, você também
pode usá-lo como processador CGI ou FastCGI. Isso significa configurar
seu servidor para usar o executável CGI do
PHP para processar todas as requisições a arquivos PHP no servidor.

Se você também estiver interessado em usar o PHP para
criar scripts em linha de comandos (Ex.: criar scripts que geram imagens
enquanto estão offline, ou processar arquivos de texto dependendo
de alguns argumentos que você passar ao script), você pode precisar
do executável de linha de comando. Para mais informações, leia
a seção sobre [criando
aplicações de linha de comando com o PHP](features.commandline.md). Nesse caso,
você não precisa de servidor nem de um browser.

A partir daqui, esta seção trata da instalação do PHP
em servidores web no Unix e Windows como módulos dos
servidores e executáveis CGI. Você também pode encontrar
informações sobre executáveis de linha de comando nas
seções seguintes.

O código fonte do PHP e distribuições binárias para Windows podem ser
encontradas em
[» https://www.php.net/downloads.php](https://www.php.net/downloads.php).

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
