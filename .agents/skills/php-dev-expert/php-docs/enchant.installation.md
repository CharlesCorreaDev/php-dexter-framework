# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enchant.installation.php

---

## Instalação

Desde que as
[bibliotecas necessárias](enchant.requirements.md) estejam
instaladas, os usuários podem ativar o enchant adicionando a
opção **--with-enchant[=dir]** ao compilar o
PHP.

Os usuários do Windows devem habilitar php\_enchant.dll
para usar esta extensão.

> **Nota**:
> **Configuração adicional no Windows**  
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
> libenchant.dll,
> glib-2.dll,
> gmodule-2.dll.
>
> Além disso, é necessário copiar pelo menos um dos provedores enviados em
> lib\enchant para \usr\local\lib\enchant-2
> (que é um caminho absoluto de a raiz do *drive atual*).
> Antes do PHP 8.0.0, ou seja, usando o Enchant v1, os provedores tinham que ser copiados para
> C:\enchant\_plugins,
> onde esse caminho poderia ser personalizado criando o valor de registro
> `HKEY_CURRENT_USER\SOFTWARE\Enchant\Config\Module_Dir`
> e configurando-o para o caminho desejado.

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
