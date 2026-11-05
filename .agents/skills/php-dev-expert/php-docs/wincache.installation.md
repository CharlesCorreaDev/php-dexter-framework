# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wincache.installation.php

---

## Instalação

Esta extensão [» PECL](https://pecl.php.net/) não é distribuída com o PHP.

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://pecl.php.net/package/wincache](https://pecl.php.net/package/wincache).

Existem dois pacotes para esta extensão: um pacote é para as versões 5.2.X do PHP,
e o outro pacote é para o PHP 5.3.X. Selecione o pacote apropriado para
a versão do PHP em uso.

Para instalar e habilitar a extensão, siga estas etapas:

1. Descomprima o pacote em algum local temporário.
2. Copie o arquivo php\_wincache.dll para a pasta de extensões do PHP.
   Normalmente, essa pasta é chamada de "ext" e está localizada na mesma pasta com todos os
   arquivos binários do PHP. Por exemplo: C:\Arquivos de Programas\PHP\ext.
3. Usando um editor de texto, abra o arquivo php.ini, que geralmente está localizado na
   mesma pasta onde estão todos os arquivos binários do PHP. Por exemplo:
   C:\Arquivos de Programas\PHP\php.ini.
4. Adicione a seguinte linha ao final do arquivo php.ini:
   `extension = php_wincache.dll`.
5. Salve e feche o arquivo php.ini.
6. Recicle os Pools de Aplicativos do IIS para PHP para obter as alterações de configuração.
   Para verificar se a extensão foi habilitada, crie um arquivo chamado
   phpinfo.php com um código PHP que chama a função
   [phpinfo](function.phpinfo.md).
7. Salve o arquivo phpinfo.php na pasta raiz de um
   site IIS que utilize PHP, abra um navegador e faça uma solicitação para
   http://localhost/phpinfo.php. Procure na página web retornada
   por uma seção chamada `wincache`. Se a extensão
   estiver habilitada, a saída [phpinfo](function.phpinfo.md)
   listará as configurações fornecidas pelo WinCache.

> **Nota**:
>
> Não se esqueça de remover o arquivo phpinfo.php da pasta
> raiz do site após verificar se a extensão foi habilitada.

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
