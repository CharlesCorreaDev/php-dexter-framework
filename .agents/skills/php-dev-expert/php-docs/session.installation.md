# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/session.installation.php

---

## Instalação

Esta extensão está habilitada por padrão. Ela pode ser desabilitada usando a seguinte opção em tempo de compilação:
**--disable-session**

Para usar alocação de memória compartilhada (mm) para armazenamento de sessão, configure o PHP com
**--with-mm[=DIR]**.

A versão do PHP para Windows tem suporte
nativo para esta extensão. Nenhuma extensão adicional precisa ser carregada
para usar essas funções.

> **Nota**:
>
> Por padrão, todos os dados relacionados com uma sessão em particular serão armazenados em
> um arquivo no diretório especificado pela configuração INI session.save\_path.
> Um arquivo para cada sessão (independente se alguma informação está associada com
> esta sessão) será criado. Isto é devido ao fato de que uma sessão
> é aberta (um arquivo é criado) mas nenhum dado é escrito neste arquivo.
> Note que este comportamento é um efeito colateral das limitações de se trabalhar
> com o sistema de arquivos e é possível que um manipulador de sessão personalizado
> (como um que utilize banco de dados) não mantenha registros de sessões
> que não armazenem dados.

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
