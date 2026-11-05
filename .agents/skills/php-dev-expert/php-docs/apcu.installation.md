# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/apcu.installation.php

---

## Instalação

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://pecl.php.net/package/apcu](https://pecl.php.net/package/apcu).

**Dica**

O PHP 7 tem um módulo separado ([» apcu-bc](https://pecl.php.net/apcu_bc)) para compatibilidade com versões anteriores do APC.

Em modo de compatibilidade, o APCu registra as funções APC aplicáveis
com protótipos compatíveis com versões anteriores.

Onde uma função APC aceitar o parâmetro `cache_type`, ele é simplemente
ignorado pela versão de compatibilidade, e omitida pelo protótipo para
a versão APCu.

**Aviso**

A partir do PHP 8.0.0, apcu-bc não é mais suportado.

> **Nota**:
>
> No Windows, o APCu precisa de um diretório temporário existente e
> com permissão de escrita pelo servidor web. Ele verifica as variáveis de ambiente TMP, TEMP
> e USERPROFILE, nesta ordem, e finalmente tenta o diretório
> do WINDOWS se nenhum dos outros estiver
> definido.

> **Nota**:
>
> Para detalhes de implementação altamente técnicos e mais aprofundados, consulte o
> [» 
> arquivo de NOTAS TÉCNICAS fornecido pelo desenvolvedor](https://github.com/php/pecl-caching-apc/blob/master/TECHNOTES.txt).

O código-fonte do APCu pode ser encontrado [» aqui](https://github.com/krakjoe/apcu).

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
